<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {
        // public function index(ClientsDataTable $dataTable)
        // {
        // return $dataTable->render('pages.categories.index');
        // }


        // $search =  $request['search'] ?? "";
        // if ($search != "") {
        //     $categories = Category::where('name', 'Like', $search)->get();
        // } else {
        //     $categories  = Category::all();
        // }

        //three ways to pass data through route
        //return view('pages.categories.table', compact('categories'));
        //return view('pages.categories.table', ['categories' => $categories]);

        $categories = Category::get();
        return view('pages.categories.index')->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $res = (new CategoryService)->categoryStoreAndUpdate($request);
        if ($res['status']) {
            session()->flash('success',  $res['message']);
        } else {
            session()->flash('error',  $res['message']);
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('pages.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Categoryservice = new CategoryService();
        $res = $Categoryservice->update($request, $id);
        if ($res['status']) {
            session()->flash('success',  $res['message']);
            return  redirect()->route('categories.index');
        } else {
            session()->flash('error',  $res['message']);
        }
        return  back();

        // $category = Category::find($id);
        // $category->name = $request['category_name'];
        // $category->status = $request['category_status'];
        // $category->description = $request['category_description'];
        // $category->save();
        // return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $delete =   $category->delete();
        if ($delete) {
            $delete = ['status' => true, 'message' => 'Category deleted', 'code' => 200, 'category' => $category];
            session()->flash('success',  $delete['message']);
        } else {
            $delete = ['status' => false, 'message' => 'unable to  delete', 'code' => 400, 'category' => $category];
            session()->flash('error',  $delete['message']);
        }
        return  redirect(route('categories.index'));
    }
}
