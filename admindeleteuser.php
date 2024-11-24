<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Local Tourism</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="login.css">
  

  <style>
    body {
      background-color: rgb(170, 170, 230);
    }


    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }

    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th,
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }

    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }

    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }

    .data-table tbody tr:hover td {
      background-color: lightgray;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }

    .data-table tfoot th:first-child {
      text-align: left;
    }

    .data-table tbody td:empty {
      background-color: #ffcccc;
    }
  </style>

  <script type="text/javascript">

    function delete (id)
    {
      if (confirm('Are Your Sure Delete This User?')) {

        window.location = 'deletefuntion.php?delete=' + id
      }
    }

  </script>
</head>

<body>

<header>
    <div class="logo">
        <div class="border">Home</div> 
        <div class="border">Explore</div>
        <div class="border">Book</div>
        <div class="border">user Login</div>
        <div class="border"><a href="admindeleteuser.php" >Admin Login</a></div>
        <div class="border"><a href="sinup.php" >Registration</a></div>        
    </div>
</header>


  <form action="" method="POST">
    <table class="data-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Address</th>
          <th>Delete</th>
        </tr>
      </thead>

      <tbody>

        <?php


        $Server = "localhost";
        $username = "root";
        $psrd = "";
        $dbname = "localtourism";
        $connection = mysqli_connect($Server, $username, $psrd, $dbname);

        $query = "select * from User";
        $Result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($Result)) {
          
          echo "<tr>";
          echo "<td>";
          echo $row['Name'];
          echo "</td>";
          echo "<td>";
          echo $row['Email'];
          echo "</td>";
          echo "<td>";
          echo $row['Gender'];
          echo "</td>";
          echo "<td>";
          echo $row['Address'];
          echo "</td>";
          echo "<td>";
          $name = $row[1];

          echo "<a href=javascript:delete('$name')> Delete </a>";
          echo "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </form>

</body>

</html>