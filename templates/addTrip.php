<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../assets/style/ajoutertrip.css">
  <link rel="stylesheet" href="../assets/style/navbar.css">
</head>

<body>
<?php require("navbar.php"); ?>
<div class="filtre">
    <select class="form-select" aria-label="Default select example" name="from">
        <option selected>From</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <select class="form-select" aria-label="Default select example">
        <option selected>To</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <select class="form-select" aria-label="Default select example">
        <option selected>From Airport</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <select class="form-select" aria-label="Default select example">
        <option selected>To airport</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <div class="price">
        <div class="input-group mb-3">
            <span class="input-group-text">€</span>
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Price">
            <label for="floatingInputGroup1">price </label>
            </div>
           
        </div>
    </div>
     <button type="button" class="btn btnapply btn-primary">Apply</button>
</div>
</body>
</html>