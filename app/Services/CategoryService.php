<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    function categoryStoreAndUpdate($request, $id = null)
    {
        // file upload
        $fileName = $this->uploadCategoryImage($request);
        $request->request->add(['image' => $fileName]);
        $data = [
            'name' => $request->category_name,
            'image' =>  $request->image,
            'status' => $request->category_status,
            'description' => $request->category_description
        ];
        return (new CategoryRepository)->store($data);
    }
    function uploadCategoryImage($request)
    {
        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $fileName = $file->getClientOriginalName();
            if ($file->move('uploads/categories', $fileName)) {
                return $fileName;
            }
        }
        return null;
    }

    function update($request, $id)
    {
        $fileName = $this->uploadCategoryImage($request);
        $oldimg = $request->image;
        $image = null;
        if ($fileName != null) {
            $image = $fileName;
        } else {
            $image = $oldimg;
        }
        $request->request->add(['image' => $image]);
        $data = [
            'name' => $request->category_name,
            'image' =>  $request->image,
            'status' => $request->category_status,
            'description' => $request->category_description
        ];
        $CategoryRepository = new CategoryRepository();
        return  $CategoryRepository->update($data, $id);
    }
}
