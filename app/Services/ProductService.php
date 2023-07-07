<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{

    function Store($request)
    {
        $fileName = $this->uploadProductImage($request);
        $request->request->add(['image' => $fileName]);
        $data = [
            'name' => $request->Product_name,
            'image' =>  $request->image,
            'price' => $request->Product_price,
            'Gst' => $request->GST,
            'description' => $request->Products_Discription
        ];
        return (new ProductRepository)->store($data);
    }
    function uploadProductImage($request)
    {
        if ($request->hasFile('Product_image')) {
            $file = $request->file('Product_image');
            $fileName = $file->getClientOriginalName();
            if ($file->move('uploads/products', $fileName)) {
                return $fileName;
            }
        }
        return null;
    }

    // function images($request)
    // {
    //     if ($request->hasFile('Product_image')) {
    //         $file = $request->file('Product_image');
    //         $fileName = $file->getClientOriginalName();
    //         if ($file->move('uploads/products', $fileName)) {
    //             return $fileName;
    //         }
    //     }
    //     return null;
    // }
    function update($request, $id)
    {
        // dd($request->all());
        $fileName = $this->uploadProductImage($request);
        $oldimg = $request->image;
        $image = null;
        if ($fileName != null) {
            $image = $fileName;
        } else {
            $image = $oldimg;
        }
        $request->request->add(['image' => $image]);
        $data = [
            'name' => $request->Product_name,
            'image' =>  $request->image,
            'price' => $request->Product_price,
            'Gst' => $request->GST,
            'description' => $request->Products_Discription
        ];

        $ProductRepository = new ProductRepository();
        return  $ProductRepository->Update($data, $id);
    }
}
