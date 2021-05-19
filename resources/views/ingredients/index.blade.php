<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Coffee Machine</title>

  </head>

  <body class="container">
    <h1>Coffee Machine Stock</h1>

    <h2>Current Stock Levels</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Ingredient</th>
          <th scope="col">Stock Level</th>
          <th scope="col">Add Stock</th>
        </tr>
      </thead>
      <tbody>
        @foreach($ingredients as $ingredient)
        <tr>
          <td>{{ $ingredient->ingredient }}</td>
          <td>{{ $ingredient->stock_level }}</td>
          <td><a href="{{ URL::to('stock/' . $ingredient->id . '/edit') }}" class="btn btn-primary">Add</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @if(session()->has('update'))
      <div class="alert alert-success">
          {{ session()->get('update') }}
      </div>
    @endif
    <a class="btn btn-small btn-info" href="{{ URL::to('/order') }}">Order a Coffee</a>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>