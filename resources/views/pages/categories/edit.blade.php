@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Update New Category</h1>
          {!! Form::open(['route' => ['categories.update',$category->id], 'method' => 'post', 'files' => true]) !!}
          {{-- {!! Form::model($editRole,['route' => ['updateRole', $editRole->id],'method' => 'post']) !!} --}}
              <div class="form-group mt-2">
                 @method('put')
                 {!! Form::hidden('image', $category->image )!!}
                  {!!Form::label('category_name','Category Name', ['class' => 'fw-bold'])!!}
                  {!!Form::text('category_name', $category->name, ['class' => 'form-control '.($errors->has('category_name') ? 'is-invalid' : '')])!!}
                  @error('category_name')
                      <p class="invalid-feedback d-block">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group mt-2">
                  {!!Form::label('category_image','Category Image', ['class' => 'fw-bold'])!!}
                  {!!Form::file('category_image',['class' => 'form-control'])!!}
              </div>
              <div class="form-group mt-2">
                  {!!Form::label('Category_Status','Category Status', ['class' => 'fw-bold'])!!}
                  {!!Form::select('category_status', ['A' => 'Active', 'N' => 'In-Active'], $category->status, ['class' => 'form-control']  )!!}
              </div>
              <div class="form-group mt-2">
                {!!Form::label('category_discription','Category Discription', ['class' => 'fw-bold'])!!}
                {!!Form::textarea('category_description', $category->description, ['class' => 'form-control'])!!}
              </div>
              {!! Form::submit('Update', ['class' => 'btn btn-primary'])!!}
              
          {!! Form::close() !!}
        {{-- /form --}}
    </div>
</main>
@endsection

