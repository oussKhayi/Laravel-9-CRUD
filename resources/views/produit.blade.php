<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container py-1">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card rounded-0 border-0 shadow">
                    <div class="card-body p-5">
                        <!--  Bootstrap table-->
                        <div class="container mt-3">
                          <h2>Laravel 9 CRUD</h2>
                          <p>Gestion de donnees 'Produis, prix':</p>            
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Produits</th>
                                <th>Prices</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$produit -> id}}</td>
                                    <td>{{$produit -> Titre}}</td>
                                    <td>{{$produit -> Prix}}</td>
                                </tr>
                            </tbody>
                          </table>
                          <a href={{url('/home')}} class="btn btn-info"> <h5 class="text-light"><</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>