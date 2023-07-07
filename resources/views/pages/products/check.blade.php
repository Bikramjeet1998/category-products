@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mb-4 mt-4 text-center">List Of Products</h1>
        <p class="result alert alert-success d-none"></p>
        
    
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
                    <button type="submit" class="del-button btn btn-danger btn-sm" data-id="{{$category->product_id}}" onclick="return confirm('Are You Sure to delete this?')">Delete</button>
     
                </td>
            </tr>
               @endforeach 
                </tbody>
        </table>
        {{-- /form --}}
    </div>
</main>


<script>
    $(document).ready(function(){
$(".del-button").on('click',function(e){
    e.preventDefault();
   var id = $(this).data("id");
    console.log(id);
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
     $.ajax({
        url:"products/destroy/"+id,
            type:"delete",
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success:function(response)
            {
            //    alert("done");
                console.log(response.success);
            }


});
});
});
 // for delete the record

//     $(document).ready(function(){
// $(".del-button").on('click',function(e){
//     e.preventDefault();
//    var id = $(this).data("id");
//     $.ajaxSetup({
//   headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   }
// });
//      $.ajax({
//         url:"products/destroy/"+id,
//             type:"delete",
//             dataType: 'JSON',
//             contentType: false,
//             processData: false,
//             success:function(response)
//             {
//             //    alert("done");
//                 // console.log(response.success);
//                 $('.alert-success').removeClass('d-none');
//                 $('.alert-success').html(response.success).fadeIn('slow');
//               $('.alert-success').delay(3000).fadeOut('slow');
//             }


// });
// });
// });
</script>
@endsection
