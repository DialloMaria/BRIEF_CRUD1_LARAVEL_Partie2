<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container   ">
      <div class="row">
        <div class="col s12">
          <h1> AJOUTER UN ARTICLE</h1>
          <hr>

          {{-- @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
          @endif --}}

          <ul>
            @foreach ($errors->all() as $errors)
                <li class="alert alert-danger"> {{ $errors }} </li>
            @endforeach
          </ul>

          <form action="/ajouter/traitement" methode="POST" class="form-group"> 
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="a_la_une" class="form-label">A la une</label>
                <input type="text" class="form-control" id="a_la_une" name="a_la_une">
            </div>
            {{-- <div class="mb-3">
                <label for="a_la_une" class="form-label">A la une</label>
                <select class="form-control" id="a_la_une" name="a_la_une">
                  <option value="Non">Non</option>
                  <option value="Oui">Oui</option>
                </select>
              </div> --}}
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Ajouter un article</button>

            <br> <br>

            <a href="/article" class="btn btn-danger" >Revenir à la liste des artcles</a>
          </form>

        </div>
       
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>