<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- line awesone --}}
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
       <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <h2 class="my-5 text-center">laravel Crud ajax 9</h2>


            <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add product</a>
            <div class="table-data">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S. No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td> <a href="" class="btn btn-success"><i class="las la-edit"></i></a>
                           <a href="" class="btn btn-danger"> <i class="las la-calendar-times"></i></a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
         </div>
       </div>
    </div>




@include('add_products_modal')
   @include('product_js')
  </body>
</html>