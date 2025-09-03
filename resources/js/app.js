import React, { useState, useEffect } from 'react';

function App() {
  const [products, setProducts] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchProducts = async () => {
      try {
        setLoading(true);
        const response = await fetch('http://localhost:3001/api/products');
        
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        setProducts(data);
        setError(null);
      } catch (error) {
        console.error('Error fetching products:', error);
        setError('Error cargando productos. ¿El servidor está corriendo?');
        // Puedes mantener datos de muestra como fallback
      } finally {
        setLoading(false);
      }
    };

    fetchProducts();
  }, []);

  if (loading) return <div>Cargando productos...</div>;
  if (error) return <div>{error}</div>;

  return (
    <div className="App">
      <h1>Skate Shop - Productos Reales desde MySQL</h1>
      <div className="products-grid">
        {products.map(product => (
          <div key={product.id} className="product-card">
            <h3>{product.name}</h3>
            <p>Precio: ${product.price}</p>
            <p>Categoría: {product.category_name}</p>
            {product.main_attribute && (
              <p>{product.attribute_type}: {product.main_attribute}</p>
            )}
            <p>Stock: {product.stock}</p>
            <img 
              src={product.image || '/placeholder-skate.jpg'} 
              alt={product.name}
              style={{ width: '200px', height: 'auto' }}
            />
          </div>
        ))}
      </div>
    </div>
  );
}

export default App;