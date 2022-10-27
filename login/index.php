<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">

    <title>Form Login</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <h2 class="card-title"><i class="fas fa-sign-in-alt"></i> Form Login</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-login.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" id="" placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="" placeholder="Masukkan Password">
                        </div>
                        </br>
                        <button type="submit" class="btn btn-primary" value="Login" name="btnlogin">Login</button>