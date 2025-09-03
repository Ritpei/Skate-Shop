const express = require('express');
const cors = require('cors');
const mysql = require('mysql2/promise');
require('dotenv').config();

const app = express();
const PORT = process.env.PORT || 3001;

// Configuración de la base de datos
const dbConfig = {
  host: process.env.DB_HOST,
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_NAME,
};

const pool = mysql.createPool(dbConfig);

// Middleware
app.use(cors());
app.use(express.json());

// Función para probar conexión a DB
async function testConnection() {
  try {
    const connection = await pool.getConnection();
    connection.release();
    return true;
  } catch (error) {
    console.error('Error conectando a MySQL:', error.message);
    return false;
  }
}

// Ruta de prueba de base de datos
app.get('/api/test/db-status', async (req, res) => {
  try {
    const isConnected = await testConnection();
    const [result] = await pool.execute('SELECT COUNT(*) as product_count FROM products');
    
    res.json({ 
      success: true, 
      message: 'Conexión a MySQL exitosa!',
      connected: isConnected,
      product_count: result[0].product_count,
      timestamp: new Date().toISOString()
    });
  } catch (error) {
    res.status(500).json({ 
      success: false, 
      error: error.message 
    });
  }
});

// Ruta para obtener todos los productos
app.get('/api/products', async (req, res) => {
  try {
    const [products] = await pool.execute(`
      SELECT 
        p.*, 
        c.name as category_name,
        s.value as main_attribute,
        s.type as attribute_type
      FROM products p
      INNER JOIN categories c ON p.category_id = c.id
      LEFT JOIN subcategories s ON p.subcategory_id = s.id
      WHERE p.is_active = true
      ORDER BY p.name
    `);
    
    res.json(products);
  } catch (error) {
    console.error('Error fetching products:', error);
    res.status(500).json({ error: error.message });
  }
});

// Ruta de bienvenida
app.get('/api', (req, res) => {
  res.json({ 
    message: '🚀 Skate Shop API funcionando!',
    version: '1.0.0',
    endpoints: {
      test: '/api/test/db-status',
      products: '/api/products'
    }
  });
});

// Manejo de errores 404
app.use('*', (req, res) => {
  res.status(404).json({ error: 'Endpoint no encontrado' });
});

// Iniciar servidor
app.listen(PORT, () => {
  console.log(`✅ Servidor corriendo en http://localhost:${PORT}`);
});

// Manejar cierre graceful
process.on('SIGINT', () => {
  console.log('\n🛑 Apagando servidor...');
  process.exit(0);
});