<?php 

require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style type="text/css">
  * {
    margin: 10;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Montserrat, sans-serif;
    background-color: #FFE4C4;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    padding: 20px;
    border: 1px solid #F5FFFA;
    text-align: left;
}

th {
    background-color: #F0F8FF;
    font-weight: bold;
    font-size: 20px;
}

td {
    background-color: #C0C0C0;
    font-size: 18px;
}

label {
    font-weight: bold;
    text-decoration: none;
    font-size: 25px;
    padding: 10px;
    background-color: #87CEEB;
    display: block;
    text-align: center;
    margin-bottom: 300px;
}
</style>
<body>
      <table>
        <tr>
          <th>ID</th>
          <th>Familia</th>
          <th>Ima</th>
          <th>Otchestvo</th>
          <th>Email</th>
		   <th>Password</th>
           <th>Telefon</th>
        </tr>

    <?php
      $products = mysqli_query($connect, query: "SELECT * FROM `klient`");
      $products = mysqli_fetch_all($products);
      foreach($products as $product){
    ?>
        <tr>
          <td><?= $product[0] ?></td>
          <td><?= $product[1] ?></td>
          <td><?= $product[2] ?></td>
          <td><?= $product[3] ?></td>
          <td><?= $product[4] ?></td>
          <td><?= $product[5] ?></td>
		   <td><?= $product[6] ?></td>
        </tr>

      <?php
        }
      ?>

        
      </table>


</body>
</html>


