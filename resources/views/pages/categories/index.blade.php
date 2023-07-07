@extends('layouts.master')

@section('content')
    <main>
        {{-- <div class="container-fluid"> --}}
        <div class="table-row-inner">
            <div class="table-responsive">
                @if (isset($dataTable))
                    {!! $dataTable->table(['class' => 'table custom-table table-hover']) !!}
                @endif
            </div>
            <h1 class="mb-4 mt-4 text-center">List Of Categories</h1>
            {{-- form --}}
            @if (session()->has('success'))
                <p class="alert alert-success">{{ session()->get('success') }} </p>
            @endif
            @if (session()->has('error'))
                <p class="alert alert-error">{{ session()->get('error') }} </p>
            @endif
            <table class="table  table-hover table-bordered">
                <caption>List of users</caption>
                <thead class="thead-dark fw-bold"></thead>
                <tr>
                    <th>Name</th>
                    <th>Image </th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->image }}</td>
                            <td>{{ $category->status }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                    <form method="Post" action="/categories/destroy/{{ $category->id }}">
                                        <form method="Post" action="{{ route('categories.destroy', $category->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('categories.show', $category->id) }}">Detail</a>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                            {{-- <a class="btn btn-danger"
                                                href="{{ route('categories.destroy', $category->id) }}">Delete</a> --}}

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are You Sure to delete this?')">Delete</button>

                                        </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- /form --}}
        </div>

    </main>
@endsection
{{-- @push('scripts')
    @if (isset($dataTable))
        {!! $dataTable->scripts() !!}
    @endif
@endpush --}}
