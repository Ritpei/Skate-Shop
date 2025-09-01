<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Métodos públicos para el frontend
    public function index()
    {
        $products = Product::with('category', 'images')
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('products.index', compact('products'));
    }

    public function show($category, $product)
    {
        $product = Product::where('slug', $product)
            ->with('category', 'subcategory', 'images')
            ->firstOrFail();

        return view('products.show', compact('product'));
    }

    public function byCategory($category)
    {
        $category = Category::where('slug', $category)
            ->with('subcategories')
            ->firstOrFail();

        $products = Product::where('category_id', $category->id)
            ->with('images')
            ->where('is_active', true)
            ->paginate(12);

        return view('products.category', compact('category', 'products'));
    }

    public function bySubcategory($category, $subcategory)
    {
        $category = Category::where('slug', $category)->firstOrFail();
        
        $products = Product::whereHas('subcategory', function($query) use ($subcategory) {
            $query->where('slug', $subcategory);
        })
        ->with('images')
        ->where('is_active', true)
        ->paginate(12);

        return view('products.subcategory', compact('category', 'subcategory', 'products'));
    }

    // Métodos de administración
    public function adminIndex()
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::with('subcategories')->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'compare_price' => 'nullable|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'sku' => 'nullable|string|unique:products,sku',
            'brand' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
            'specifications' => 'nullable|array',
            'colors' => 'nullable|array',
            'sizes' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Crear slug único
        $validated['slug'] = Str::slug($request->name);
        $counter = 1;
        while (Product::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = Str::slug($request->name) . '-' . $counter;
            $counter++;
        }

        $product = Product::create($validated);

        // Manejar imágenes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('products', 'public');
                
                $product->images()->create([
                    'image_path' => $path,
                    'is_main' => $index === 0,
                    'order' => $index
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    public function edit(Product $product)
    {
        $categories = Category::with('subcategories')->get();
        $product->load('images');
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'compare_price' => 'nullable|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'sku' => 'nullable|string|unique:products,sku,' . $product->id,
            'brand' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
            'specifications' => 'nullable|array',
            'colors' => 'nullable|array',
            'sizes' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Actualizar slug si el nombre cambió
        if ($product->name !== $request->name) {
            $validated['slug'] = Str::slug($request->name);
            $counter = 1;
            while (Product::where('slug', $validated['slug'])->where('id', '!=', $product->id)->exists()) {
                $validated['slug'] = Str::slug($request->name) . '-' . $counter;
                $counter++;
            }
        }

        $product->update($validated);

        // Manejar nuevas imágenes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('products', 'public');
                
                $product->images()->create([
                    'image_path' => $path,
                    'order' => $product->images()->count() + $index
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Product $product)
    {
        // Eliminar imágenes del almacenamiento
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }
}