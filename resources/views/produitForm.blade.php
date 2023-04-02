<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action={{Route("home.store")}} method="post" class="bg-light shadow rounded p-2"
        > @csrf
            <div class="mb-3">
              <label for="" class="form-label">Titre</label>
              <input type="text" name="titre" class="form-control" placeholder="Produit X" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted">Titre de Produit 'X'</small>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Prix</label>
              <input type="text" name="prix" class="form-control" placeholder="00.00$" aria-describedby="helpId" required>
              <small id="helpId" class="text-muted">Prix de produits 00.00$</small>
            </div>
            <div class="p-1 d-flex justify-content-around col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href={{url("home")}} class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>