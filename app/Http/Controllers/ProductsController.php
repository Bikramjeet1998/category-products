<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = product::get();
            return response()->json(['data' => $data]);
        }
        return view('pages.products.index');
        // return response()->json(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = new ProductService();
        $res =  $result->Store($request);
        if ($res['status']) {
            session()->flash('success',  $res['message']);
            return response()->json(['success' => 'Product saved successfully.']);
        } else {
            session()->flash('error',  $res['message']);
            return response()->json(['success' => "$res[message]"]);
        }
        // return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $product = Product::find($id);
        return response()->json(['project' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $product = Product::find($id);
        return view('pages.products.edit', compact('product'))->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Productservice = new ProductService();
        $res = $Productservice->update($request, $id);
        if ($res['status']) {
            session()->flash('success',  $res['message']);
            // return  redirect()->route('categories.index');
            return response()->json(['success' => 'Product updated successfully.']);
        } else {
            session()->flash('error',  $res['message']);
        }
        return response()->json(['success' => 'unable to update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        // $delete =  Product::table('products')->where('id', $id)->delete();
        $product_details = Product::find($id);

        $delete =  $product_details->delete();

        if ($delete) {

            return response()->json(['success' => 'Product delete  successfully.']);
        } else {

            return response()->json(['error' => 'unable to  delete.']);
        }
    }


    public function search(Request $request)
    {

        // if($request->ajax)
    }
}
