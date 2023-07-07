<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    function store(array $data)
    {
        try {
            $categoryModel = Category::create($data);
            if ($categoryModel) {
                return ['status' => true, 'message' => 'Category Added', 'code' => 200, 'category' => $categoryModel];
            }
            throw new \Exception("Category not added", 1);
        } catch (\Throwable $th) {
            return ['status' => false, 'message' => 'Something went wrong! Please try again.', 'error' => $th->getMessage(), 'code' => 400];
        }
    }

    function update(array $data, $id)
    {
        $category = Category::find($id);
        if ($category->update($data)) {
            return ['status' => true, 'message' => 'Category updated', 'code' => 200, 'category' => $category];
        } else {
            return ['status' => false, 'message' => 'umable to update', 'code' => 400, 'category' => $category];
        }
    }
}
