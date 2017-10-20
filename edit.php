<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php require 'functions.php'; ?> 

<div class="container text-center">
    
    <?php include 'button.php';?>
    
    <h3><?php myName3 ();?></h3>
    
    <div class="myForm">
        <form method='post' action="<?php myServer (); ?>" >
        <input type='text' name='info2' class="form-control myInput" value="<?php myName2 ();  ?>"  readonly><br>     
        
        <textarea name='info' rows='10' cols='30' class="form-control" <?php myAttr ();  ?> ><?php edit (); ?></textarea>
        <br>
        <button type='submit' name='submiter' class="btn btn-info" id="hideme">Изменить файл</button>
        </form>
    </div>
    
    <?php  edit2 ();?>
</div>

</body>
</html>