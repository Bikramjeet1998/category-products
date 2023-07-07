<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    

    <p class="alert alert-success d-none"> </p>
{!! Form::open(['id' => 'myUpdateForm', 'files' => true, 'method'=>'put', 'route' => ['products.update', $product->product_id]])!!}
    <div class="form-group mt-2">
        {!! Form::hidden('image', $product->image )!!}
        {!!Form::label('Product_name','Product_name',['class' => 'fw-bold'])!!}
        {!!Form::text('Product_name',$product->name ,['class' => 'form-control'])!!}
    </div>
        <div class="form-group mt-2"> 
        {!!Form::hidden('id',$product->product_id,['class' => 'Update_id'])!!}
        {!!Form::label('Product_image','Product_image',['class' => 'fw-bold'])!!}
        {!!Form::file('Product_image',['class' => 'form-control'])!!}
    </div>
        <div class="form-group mt-2">
        {!!Form::label('Product_price','Product price',['class' => 'fw-bold'])!!}
        {!!Form::text('Product_price',$product->price ,['class' => 'form-control'])!!}
    </div>
        <div class="form-group mt-2">
        {!!Form::label('GST','GST',['class' => 'fw-bold'])!!}
        {!!Form::text('GST',$product->Gst,['class' => 'form-control'])!!}
    </div>
        <div class="form-group mt-2">
        {!!Form::label('Products_Discription','Products Discription',['class' => 'fw-bold'])!!}
        {!!Form::textarea('Products_Discription',$product->description ,['class' => 'form-control'])!!}
    </div>
        {!! Form::submit('Update' ,['class' => 'fw-bold btn btn-primary','id' => 'button'])!!}
    
{!! Form::close() !!}


<script>
    var id = $('.Update_id').val();
    $(document).ready(function(){
    $('#myUpdateForm').submit(function(e){
        e.preventDefault();
        var formdata = new FormData($(this)[0]);
        $("#button").prop("disabled",true);
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: formdata,
            cache: false,
            processData: false,
            contentType: false,
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
</body>
 </html>