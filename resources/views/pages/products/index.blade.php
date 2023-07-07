@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mb-4 mt-4 text-center">List Of Products</h1>
        <p class="alert alert-success d-none"> </p>
        
        <div id="editProduct"></div>
    
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



        <tbody id="tablebody">
           
                </tbody>
        </table>  
    </div>
</main>


<script>
    showAllProducts();
    function showAllProducts(){
      $.ajax({
     url: "{{route ('products.index')}}",
     type : "Get",
     dataType: 'JSON',
     contentType: false,
     processData: false,
     success : function(responce){
        $("#tablebody").html("");
                    let projects = responce.data;
                    for (var i = 0; i < projects.length; i++) 
                    {
                        // let showBtn =  '<button ' +
                        //     ' class="btn btn-outline-info" ' +
                        //     ' onclick="showAllProducts(' + projects[i].product_id + ')">Show' +
                        // '</button> ';
                        let editBtn =  '<button ' +
                            ' class="btn btn-outline-success " ' +
                            ' onclick="editProject(' + projects[i].product_id + ')">Edit' +
                        '</button> ';
                        let deleteBtn =  '<button ' +
                            ' class="del-button btn btn-outline-danger" ' +
                            ' onclick="destroyProduct(' + projects[i].product_id + ')">Delete' +
                        '</button>';
     
                        let projectRow = '<tr>' +
                            '<td>' + projects[i].name + '</td>' +
                            '<td>' + projects[i].image + '</td>' +
                            '<td>' + projects[i].price + '</td>' +
                            '<td>' + projects[i].Gst + '</td>' +
                            '<td>' + projects[i].description + '</td>' +
                            '<td>'  + editBtn + deleteBtn + '</td>' +
                        '</tr>';
                        $("#tablebody").append(projectRow);
                    }
     }

});
}

function editProject(id)
        {
        var url = '{{ route("products.edit", ":id") }}';
        url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {
                    $('#editProduct').html(response);

                },
                error: function(response) {
                    console.log(response.responseJSON)
                }
            });
        }

function destroyProduct(id)
        {
            var url = '{{ route("products.destroy", ":id") }}';
            url = url.replace(':id', id);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: "DELETE",
                success: function(response) { 
                    $('.alert-success').removeClass('d-none');
                $('.alert-success').html(response.success).fadeIn('slow');
              $('.alert-success').delay(3000).fadeOut('slow');
                    showAllProducts();
                },
                error: function(response) {
                    console.log(response.responseJSON);
                }
            });
        }
       
    $(document).ready(function(e){
        e.preventDefault;
    $('.Search_bar').on('keyup',function(){
    var value = $(this).val(); 
    console.log(value);
           
    $.ajax({
     url : "{route('products.search')}",
     type : "GET",
     data: {'search': value},
     success : function(data){
      console.log(data.msg);
     }
        
        })
         });
    });
 

   
</script>
@endsection
