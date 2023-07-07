<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    function store(array $data)
    {
        try {
            $productModel = Product::create($data);
            if ($productModel) {
                return ['status' => true, 'message' => 'Product Added', 'code' => 200, 'category' => $productModel];
            }
            throw new \Exception("Category not added", 1);
        } catch (\Throwable $th) {
            return ['status' => false, 'message' => 'Something went wrong! Please try again.', 'error' => $th->getMessage(), 'code' => 400];
        }
    }
    function Update(array $data, $id)
    {
        $product = Product::find($id);
        if ($product->update($data)) {
            return ['status' => true, 'message' => 'product updated', 'code' => 200, 'category' => $product];
        } else {
            return ['status' => false, 'message' => 'umable to update', 'code' => 400, 'category' => $product];
        }
    }
}
