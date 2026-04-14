<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../assets/style/historique.css">
  <link rel="stylesheet" href="../assets/style/navbar.css">
</head>
<body>
<?php require("navbar.php"); ?>
<div class="filtre">
    <div class="espace">
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
    </div>
    <div class="temps">    
        <div class="heure">
            <label for="appt1">Choose hour</label>
            <input class="form-control" type="time" id="appt1" name="time">
        </div>    
        <div class="date">
            <label for="appt2">Choose date</label>
            <input class="form-control" type="date" id="appt2" name="date">
        </div>
    </div>
    <div class="price">
        <div class="input-group mb-3">
        <span class="input-group-text">€</span>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Price min">
        <label for="floatingInputGroup1">price min</label>
        </div>
    </div>
        <div class="input-group mb-3">
        <span class="input-group-text">€</span>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="pricemax">
        <label for="floatingInputGroup1">price max</label>
        </div>
    </div>
  </div>
  <div class=btnapply>
  
     <select class="form-select" aria-label="Default select example">
        <option selected>Price order</option>
        <option value="descending">descending</option>
        <option value="ascending">ascending</option>
    </select>
      <button type="button" class="btn btn-primary">Apply</button>
  </div>
</div>
    <table class="table table-light">
    <thead>
        <tr>
            <th>ID Reservation</th>
            <th>ID Flight</th>
            <th>Reservation Date</th>
            <th>Reservation Time</th>
            <th>From</th>
            <th>To</th>
            <th>From Airport</th>
            <th>To Airport</th>
            <th>Day</th>
            <th>Flight Time</th>
            <th>Price</th>
            <th>Payment Mode</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>FL102</td>
            <td>2026-02-01</td>
            <td>09:15</td>
            <td>Tunis</td>
            <td>Paris</td>
            <td>TUN</td>
            <td>CDG</td>
            <td>01/02/2026</td>
            <td>11:30</td>
            <td>850 DT</td>
            <td>Card</td>
        </tr>

        <tr>
            <td>2</td>
            <td>FL215</td>
            <td>2026-02-03</td>
            <td>14:40</td>
            <td>Tunis</td>
            <td>Rome</td>
            <td>TUN</td>
            <td>FCO</td>
            <td>01/02/2026</td>
            <td>16:00</td>
            <td>620 DT</td>
            <td>Cash</td>
        </tr>

        <tr>
            <td>3</td>
            <td>FL330</td>
            <td>2026-02-05</td>
            <td>18:10</td>
            <td>Sfax</td>
            <td>Istanbul</td>
            <td>SFA</td>
            <td>IST</td>
            <td>01/02/2026</td>
            <td>20:45</td>
            <td>980 DT</td>
            <td>PayPal</td>
        </tr>
    </tbody>
</table>

    
</body>
</html>