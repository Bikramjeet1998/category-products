@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create New Category</h1>
        @if (session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success')}} </p>
        @endif
        @if (session()->has('error'))
            <p class="alert alert-error">{{ session()->get('error')}} </p>
        @endif
        {{-- form --}}
          {!! Form::open(['route' => 'categories.store', 'method' => 'post', 'files' => true]) !!}
              <div class="form-group mt-2">
                  {!!Form::label('category_name','Category Name', ['class' => 'fw-bold'])!!}
                  {!!Form::text('category_name', null, ['class' => 'form-control '.($errors->has('category_name') ? 'is-invalid' : '')])!!}
                  @error('category_name')
                      <p class="invalid-feedback d-block">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group mt-2">
                  {!!Form::label('category_image','Category Image', ['class' => 'fw-bold'])!!}
                  {!!Form::file('category_image', ['class' => 'form-control'])!!}
              </div>
              <div class="form-group mt-2">
                  {!!Form::label('Category_Status','Category Status', ['class' => 'fw-bold'])!!}
                  {!!Form::select('category_status', ['A' => 'Active', 'N' => 'In-Active'], null, ['class' => 'form-control']  )!!}
              </div>
              <div class="form-group mt-2">
                {!!Form::label('category_discription','Category Discription', ['class' => 'fw-bold'])!!}
                {!!Form::textarea('category_description', null, ['class' => 'form-control'])!!}
              </div>
              {!! Form::submit('Submit', ['class' => 'btn btn-primary'])!!}
              
          {!! Form::close() !!}
        {{-- /form --}}
    </div>
</main>
@endsection


