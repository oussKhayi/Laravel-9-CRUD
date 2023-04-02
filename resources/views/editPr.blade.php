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
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body p-5">
                    <!--  Bootstrap table-->
                    <div class="container mt-3">
                      <h2>Laravel 9 CRUD</h2>
                      <p>Gestion de donnees 'Produis, prix':</p>            
            
                    </div>
                    <form action="{{Route('home.update', $produit->id)}}" method="post"
                        class="col-18 col-sm-5 p-2 shadow"
                        >
                        @csrf
                        @method("put")
                        
                        <input type="text" class="form-control mb-3" value='{{$produit->Titre}}' name="Titre">
                        
                        <input type="text" class="form-control" value='{{$produit->Prix}}' name="Prix">
                        <button type="submit" class="btn btn-success m-2">Submit</button>
                        <a href={{url('/home')}} class="btn btn-warning">Cancel</a>
                    </form>
  
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>