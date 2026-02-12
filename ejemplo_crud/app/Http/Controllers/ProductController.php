<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();

        return response()->json([
            'message' => 'Products retrieved successfully',
            'data' => $products
        ], 200);
    }

    public function show($id)
    {
        $product = $this->productService->getProductById($id);

        return response()->json([
            'message' => 'Product retrieved successfully',
            'data' => $product
        ], 200);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $product = $this->productService->createProduct($data);

        return response()->json([
            'message' => 'Product created successfully',
            'data' => $product
        ], 201);
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->validated();
        $product = $this->productService->updateProduct($id, $data);

        return response()->json([
            'message' => 'Product updated successfully',
            'data' => $product
        ], 200);
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);

        return response()->json([
            'message' => 'Product deleted successfully'
        ], 200);
    }
}
