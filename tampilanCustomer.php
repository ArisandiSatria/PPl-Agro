<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])) {
        session_destroy();
        header("Location: index.php"); 
}
 

?>
 
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container">
        <form action="">
            
        </form>
        <form action="" method="POST" class="login-email">
            <div class="input-group">
                <input type="submit" name="submit" value="Log Out">
            </div>
        </form>
    </div>

</body>
</html>