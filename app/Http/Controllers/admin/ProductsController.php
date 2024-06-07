<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $validated = $request->validate([
            'name' => 'required|unique:products,name|min:5|max:200',
            'price' => 'numeric|min:1|max:1000|',
            'description' => 'nullable|min:10|max:500',
            
        ]
    
        );



        $formData = $request->all();
        $newProduct = new Product;
        $newProduct->name = $formData['name'];
        $newProduct->price = $formData['price'];
        $newProduct->description = $formData['description'];
        $newProduct->img = $formData['img'];
        $newProduct->slug = Str::slug($newProduct->name , '-');
        $newProduct->save();

        return redirect()->route('admin.products.show', ['product' => $newProduct->id]);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $produt)
    {
        $formData = $request->all();
        $product->slug = Str::slug($formData['name'], '-');
        $product->update($formData);

        return redirect()->route('admin.products.show', $product->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        {
            $product->delete();
            return redirect()->route('admin.products.index');
        }
    }
}
