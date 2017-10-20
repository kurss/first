<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html>
<head>
<title>READ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php require 'functions.php'; ?>    

<div class="container">
    
<div class="text-center">   
    <?php include 'button.php';?>
    <h3><?php myName (); ?></h3>
</div> 

<div class="panel panel-default">
    <div class="panel-body"><?php read ();?></div>
</div>

</div>

</body>
</html>