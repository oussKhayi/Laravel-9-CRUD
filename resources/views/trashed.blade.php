<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel CRUD</title>
</head>
<body class="bg-dark">
  
  
  <!-- This script got from frontendfreecode.com -->
  <div class="container py-1">
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="card rounded-0 border-0 shadow">
          <div class="card-body p-5">
            <!--  Bootstrap table-->
            <div class="container mt-3">
              <h2>Laravel 9 CRUD</h2>
              <p>Gestion de donnees 'Produis, prix':</p>  
              <div class="p-1 d-flex justify-content-around col-12">
              <a class="btn btn-primary shadow rounded btn-block" id="insertRow" href="/form">Add new row</a>
              <a class="btn btn-dark shadow rounded btn-block" href={{URL('/home')}}>View Products</a>
              <a name="" id="" class="btn btn-success"
                    onclick="return confirm('Restore All Products?')"
                    href="{{URL('restoreAll')}}"
                     role="button">Restore All</a>          
                    </div>       
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Produits</th>
                          <th>Prices</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $trash as $post )
                        <tr>
                          <td>{{$post -> id}}</td>
                          <td>{{$post -> Titre}}</td>
                          <td>{{$post -> Prix}}</td>
                          <td>
                            <a class="btn btn-info btn-sm" 
                            onclick="return confirm(`Restore {{$post -> Titre}}`)"
                            href={{Url('/restore', $post->id)}}
                                role="button">Restore</a>
                            
                            <a class="btn btn-danger btn-sm" 
                            onclick="return confirm(`Remove {{$post -> Titre}}`)"
                            {{-- href={{Url('/restore', $post->id)}} --}}
                                role="button">Remove 4 ever</a>
                            
                                {{-- <a class="btn btn-danger btn-sm" 
                                href='/'
                                role="button">Remove 4 Ever</a> --}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  

                  <!-- Add rows button-->
                </div>
      </div>
  </div>
</div>
                                                                          


  </body>

  </html>