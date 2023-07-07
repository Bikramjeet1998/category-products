@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Category Detail</h1>
        {{-- show --}}
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th width="230">Category Name</th>
                    <td>{{ $category->name ?? null }}</td>
                </tr>
                <tr>
                    <th>Category Description</th>
                    <td>{{ $category->description ?? null }}</td>
                </tr>
                <tr>
                    <th>Category image</th>
                    <td>{{$category->image ?? null }}</td>

                </tr>
                <td> <img src="{{ asset('uploads/categories/' . $category->image) }}" height="200px" width="200px"  /> </td>

            </table>
        </div>
        {{-- /show--}}
    </div>
</main>
@endsection


