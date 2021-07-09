<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Banking System 🏦 </title>
    <style type="text/css">
        body{
            background: #E98580;
            border:2px solid white;
        }
        button{
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            text-decoration: none;
            font-size: 18px;
            letter-spacing: 2.5px;
            border-radius: 8px;
            background-image: linear-gradient(305deg, orange 6%, #ECD662 70%);
            height : 65%;
            width: 65%;
        }
        h1 {
        font-family: sans-serif;
        background: coral;
         }
    </style>
</head>
<body>
    <?php
  include 'navbar.php';
  ?>
  <br>
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro">
            <div >
                   <center><h1>BANK OF FREELAND</h1></center>
            </div>
        </div>
        <!-- Activity section -->
        <br>
        <br>
        <br>
        <div class="row activity text-center">
            <div class="col-md act">
                <br><br>
                <a href="users.php"><button ><img src="img/users.png" class="img-fluid" style="width: 70%; height: 70%"><br><b>Users</b></button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <a href="transfermoney.php"><button><img src="img/transfer_money1.png" class="img-fluid" style="width: 70%; height: 70%"><br><b>Transfer Money</b></button></a>
            </div>
            <div class="col-md act">        
                <br><br>
                <a href="transactionhistory.php"><button ><img src="img/transaction_history.jpg" class="img-fluid" style="width: 70%; height: 70%;"><br><b>Transaction History</b></button></a>
            </div>
        </div>
    </div>
    <br>
    <br> 
    <br>
    <br>     
    <footer class="text-center mt-5 py-2">
        <p>CREATED by <b>RAKSHITH HEGDE KS</b> &copy 2021.</p>
        <p><b>THE SPARKS FOUNDATION</b></p>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>