@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid ">
        <h1 class="mt-4">Create New Products</h1>
        <p class="alert alert-success d-none"> </p>
        {{-- @if (session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success')}} </p>
    @endif --}}
    @if (session()->has('error'))
        <p class="alert alert-danger">{{ session()->get('error')}} </p>
    @endif
       {{-- {!! Form::open(['route' => 'products.store', 'method' => 'post', 'files' => true])!!} --}}
        {!! Form::open(['id' => 'form', 'files' => true])!!}
        <div class="form-group mt-2">
                {!!Form::label('Product_name','Product_name',['class' => 'fw-bold'])!!}
                {!!Form::text('Product_name',null,['class' => 'form-control'])!!}
            </div>
                <div class="form-group mt-2"> 
                {!!Form::label('Product_image','Product_image',['class' => 'fw-bold'])!!}
                {!!Form::file('Product_image',['class' => 'form-control'])!!}
            </div>
                <div class="form-group mt-2">
                {!!Form::label('Product_price','Product price',['class' => 'fw-bold'])!!}
                {!!Form::text('Product_price',null,['class' => 'form-control'])!!}
            </div>
                <div class="form-group mt-2">
                {!!Form::label('GST','GST',['class' => 'fw-bold'])!!}
                {!!Form::text('GST',null,['class' => 'form-control'])!!}
            </div>
                <div class="form-group mt-2">
                {!!Form::label('Products_Discription','Products Discription',['class' => 'fw-bold'])!!}
                {!!Form::textarea('Products_Discription',null,['class' => 'form-control'])!!}
            </div>
               {!! Form::submit('submit' ,['class' => 'fw-bold btn btn-primary','id' => 'button'])!!}

        {!! Form::close() !!}
    </div>
 <script>
 $(document).ready(function(){
 $('#form').submit(function(e){
    e.preventDefault();
var form = $('#form')[0];
var formdata = new FormData(form);
$("#button").prop("disabled",true);
$.ajax({
            url: "{{route ('products.store')}}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success:function(response)
            {
                $('#form').trigger("reset");
                $("#button").prop("disabled",false);
                $('.alert-success').removeClass('d-none');
                $('.alert-success').html(response.success).fadeIn('slow');
              $('.alert-success').delay(3000).fadeOut('slow');
            },
            error: function(response) {
                console.log(response);
            }
        });
 });
 });


 </script>


</main>
@endsection