<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LISTE DES ARTICLES</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container text-center">
    <h1 class="my-4">LISTE DES ARTICLES</h1>
    <a href="ajouter" class="btn btn-primary mb-4">AJOUTER UN ARTICLE</a>
    <div class="row">
      @foreach ($articles as $article)
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="{{$article->url_image}}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{$article->nom}}</h5>
            <p class="card-text">{{$article->description}}</p>
            <p class="card-text"><span class="badge bg-success">{{$article->a_la_une}}</span></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Publié le {{$article->created_at->format('d/m/Y')}}</small>
          </div>
          <div class="card-footer d-flex justify-content-between">  
            <a href="/update/{{$article->id}}" class="btn btn-primary btn-sm">Modifier</a>
            <a href="/delete/{{$article->id}}" class="btn btn-danger btn-sm">Supprimer</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


