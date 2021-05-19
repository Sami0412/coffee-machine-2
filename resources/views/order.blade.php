<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Coffee Machine</title>

  </head>

  <body class="container">
    <h1>Order Coffee</h1>

    <form method="post" action="">
    @csrf
    @method('PATCH')
        <div class="form-row">
            <div class="form-group col-6">
                <label for="coffees">Shots of coffee (8g/shot): </label>
                <input type="number" class="form-control" id="coffees" name="coffees">
            </div>
            <div class="form-check d-flex align-items-center pl-5">
                <input type="checkbox" class="form-check-input" id="sugar">
                <label class="form-check-label " for="sugar">Sugar (4g)</label>
            </div>
        </div>
        <div class="form-group">
            <label for="milk">Milk:</label>
                <select class="form-control" id="milk" name="milk">
                    <option value="20">Dash (20ml)</option>
                    <option value="30">Medium (30ml)</option>
                    <option value="40">Milky (40ml)</option>
                </select>
        </div>
        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>