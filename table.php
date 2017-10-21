<?php delete(); ?>
<table class="table table-condensed myTable tablesorter" id="myTable">
        <thead>
            <tr>
                <th class="text-center">Название</th>
                <th colspan="2" class="text-center">Действие</th>
            </tr>
        </thead>
<tbody>
<?php

if (is_dir($dir)){
if ($dh = opendir($dir)){

while (($file = readdir($dh)) !== false){
   
if ($file != "." && $file != "..") {
?>
        <tr>
            <td><a href="read.php?ffile=<?php echo $file;?>"><?php echo $file;?>.txt</a></td>
            <td><small><a href="edit.php?ffile2=<?php echo $file;?>">Редактировать</a></small></td>
            <td><small><a href="<?php myServer (); ?>?ffile3=<?php echo $file;?>" onclick="if(!confirm('Вы уверены?')){return false};">Удалить</a></small></td>
        </tr>
<?php 
    }
}
  
closedir($dh);
    }
}
?>
</tbody>
</table>