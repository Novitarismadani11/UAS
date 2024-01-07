<!DOCTYPE html>
<html>
<head>
    <title>penjualan kue</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('background/a.jpeg');
        }
    </style>
</head>
<body>
 
    <div class="alert">
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert alert-danger' role='alert'>Username dan Password tidak sesuai !</div>"; 
        }
    }
    ?>
    </div>
 
    <div class="kotak_login">
        <center><h5>SILAHKAN LOGIN</h5></center>
        <br>
 
        <form action="cek_login.php" method="post">

            <div class="input-group mb-3">
                  <span for="username" class="input-group-text"><i class="fa-solid fa-user"></i></span>
                  <input type="text" name="username" class="form-control" placeholder="Username.." required="required">
            </div>

 
            <div class="input-group mb-3">
                <span for="password" class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password.." required="required">
            </div>
            <br>
 
            <center><input class="glow-on-hover" type="submit" value="LOGIN"> 
            </center>
        </form>
        
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cc247a28f7.js" crossorigin="anonymous"></script>
</body>
</html>