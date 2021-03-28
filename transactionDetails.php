<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Basic Banking System</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="design.css">

</head>
<body>

<table bgcolor="black">
        <tr>
            <td><img src="logo1.png" height="100px" width="105px" ></td>
            <th style="text-align: start;" width="59%"><font color="white"><h2>SPARKS BANK</h2></font></th>
            <th style="width:12%"><a href="index.html" ><font color="white">HOME</font></a></th>
            <th style="width:15%"><a href="#transaction_history" class="active"><font color="white">TRANSACTION HISTORY</font></a></th>
            <th style="width:15%"><a href="contact.html"><font color="white">CONTACT US</font></th>
        </tr>
    </table>

    <br>
    <div>
    <table class="table table-dark">
        <thead>
          <tr>
            <th>Id</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Transferred Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'config.php';


          $sql = "select * from transaction";

          $query = mysqli_query($conn, $sql);

          while ($rows = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $rows['id']; ?></td>
              <td><?php echo $rows['sender']; ?></td>
              <td><?php echo $rows['receiver']; ?></td>
              <td><?php echo $rows['credits']; ?> </td>

            <?php
          }

            ?>
        </tbody>
      </table>

    </div>
  </div>


  <div class="footer"
      style="        
        background-color: #212529;
        color: white;
        font-family: Cambria, Cochin, Georgia, Times, serif;
      "
    >
      <p>© PRANAY USATKAR</p>
    </div>
</body>

</html>