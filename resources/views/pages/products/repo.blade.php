@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mb-4 mt-4 text-center">List Of Products</h1>
        {{-- form --}}
        @if (session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success')}} </p>
    @endif
    @if (session()->has('error'))
        <p class="alert alert-error">{{ session()->get('error')}} </p>
    @endif
        <table class="table  table-hover table-bordered">
            {{-- <caption>List of users</caption> --}}
            <thead class="thead-dark fw-bold"></thead>
            <tr >
                <th>Name</th>
                <th>Image </th>
                <th>Gst %</th>
                <th>price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->image}}</td>
                <td>{{$category->Gst}}</td>
                <td>{{$category->price}}</td>
                <td>{{$category->description}}</td>
                <td>

                    <a class="btn btn-primary btn-sm" href="{{route('products.show', $category->product_id)}}">Detail</a>
                    <a class="btn btn-primary btn-sm" href="{{route('products.edit', $category->product_id)}}">Edit</a>

                    <form method="Post" id="delete-product" class="d-inline">
                        <input type="hidden" value="{{ $category->product_id }}" name="productId">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure to delete this?')">Delete</button>
                    </form>
                </td>
            </tr>
               @endforeach
                </tbody>
        </table>
        {{-- /form --}}
    </div>
</main>
<script>
    $(document).ready(function (){
        $('#delete-product').submit(function(event){
            event.preventDefault();
            const form = $(this)[0];
            const formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "{{ route('product.delete') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data, textStatus, jqXHR) {
                    //process data
                    console.log({
                        data, textStatus, jqXHR
                    });
                },
                error: function(data, textStatus, jqXHR) {
                    //process error msg
                },
            });
        });
    });
</script>
@endsection