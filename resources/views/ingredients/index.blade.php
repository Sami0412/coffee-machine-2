<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Coffee Machine</title>
  </head>
  <body class="container">
    <h1>Coffee Machine Stock</h1>

    <h2>Current Stock Levels</h2>
    @foreach($ingredients as $ingredient)
        <div class="form-row">
            <div class="col-md-4">
                <span>Ingredient: {{ $ingredient->ingredient }}</span>
                <span>Stock Level: {{ $ingredient->stock_level }}</span>
            </div>

    @endforeach

    <h2>Add Stock</h2>
    <form>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="coffee">Add Coffee (g)</label>
                <input type="number" class="form-control" id="coffee" placeholder="Max 1000g" max ="1000">
            </div>
            <div class="form-group col-md-4">
                <label for="milk">Add Milk (ml)</label>
                <input type="number" class="form-control" id="milk" placeholder="Max 1000ml" max="1000">
            </div>
            <div class="form-group col-md-4">
                <label for="sugar">Add Sugar (g)</label>
                <input type="number" class="form-control" id="sugar" placeholder="Max 500g" max="500">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add to Machine</button>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>