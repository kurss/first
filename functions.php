<?php

$dir = 'files';

function delete () {
    global $dir; 
    if (isset($_GET['ffile3'])) unlink ($dir.'/'.$_GET['ffile3']);
}

function create () {
global $dir;    
if(isset($_POST['submiter']))  
{    
    $info = $_POST['info'];      
    $info2 = $_POST['info2'];       
    if(!file_exists($dir)){
    mkdir($dir, 0777);
    }
    $file_name = $dir.'/'.$info2; 
    
    if(file_exists($file_name)) {
    die('<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-down"></span></h2><br>
        
        <div style="width:200px; margin:0 auto;">
            <p class="alert alert-warning text-center" role="alert">Файл с названием <span><b>'.$info2.'</b></span> уже существует! Укажите другое название файла.</p>
        </div>
         ');
        }       
        else {
            $f = fopen($file_name,'x');
            fwrite($f,$info);        
            fclose($f);             
            echo '<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-up"></span></h2>';
            }
    }    
}

function read () {
    global $dir;
    if (isset($_GET['ffile'])) {
    $file_name = $dir.'/'.$_GET['ffile'];
    $f = fopen($file_name, "r") or die("Нeвозможно открыть файл!");
    $br = fread($f,filesize($file_name));
    echo nl2br ($br);
    fclose($f);
    }
}

function edit () {
    global $dir;
    if (isset($_GET['ffile2'])) {
    $current = file_get_contents($dir.'/'.$_GET['ffile2']);
    echo $current;
    }
}

function edit2 () {
    global $dir;
    
    if(isset($_POST['submiter'])  )  
    {   
        $info = $_POST['info'];      
        $info2 = $_POST['info2'];      
        $current = $info;
        $file_name = $dir.'/'.$info2;
        file_put_contents($file_name, $current);
        echo '<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-up"></span></h2>';
    }
}

function myServer () {
    echo $_SERVER["PHP_SELF"];
}

function myName () {
    if (isset($_GET['ffile'])) {echo $_GET['ffile'].'.txt';}
}

function myName2 () {
    if (isset($_GET['ffile2'])) {echo $_GET['ffile2'];}
}

function myName3 () {
    if (isset($_GET['ffile2'])) {echo $_GET['ffile2'].'.txt';}
}


function myAttr () {
if(isset($_POST['submiter'])  )  
    {   
        echo 'readonly'  ; 
    }
else {echo 'required';}
}

function myTextarea () {
if(isset($_POST['submiter'])  )  
    {   
        $info = $_POST['info'];
        echo $info; 
    }
}


?>