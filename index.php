<meta charset="utf-8">
<div style="padding-left:40px;">
<!-- ---------------------------------------------------------------------------------------------- -->
<?php
//Первое задание
echo "<h2>Задание №1</h2>";
$name = "Елена";
$age = "100";
echo "Меня зовут $name.";
echo "<br>";
echo "Мне $age лет.";
echo "<br><br>";
echo "Задание №1 - дополнение";
echo "<br>";
echo 'Создать переменную $city и присвоить ей строковое значение, содержащее название 
города в котором Вы живете.<br> Вывести с помощью echo фразу "Я живу в <b>Ваш_город</b>".';
echo "<br><br>";
echo "<em>Пример решения:";
echo "<br>";
$city = "Тольятти";
echo "Я живу в $city. </em>";
echo "<br><br>";
?>
<code>
PHP код:<br>
$city = "Тольятти";<br>
echo "Я живу в $city.";
</code>
<!-- ---------------------------------------------------------------------------------------------- -->
<?php
//Второе задание
echo "<h2>Задание №2</h2>";
$name = "Елена";
$age = "100";
echo "Меня зовут $name.";
echo "<br>";
echo "Мне $age лет.";
echo "<br>";
unset ($age);
if (!isset ($age)) echo "<em>Мне 100 лет.</em>";
echo "<br><br>";
echo "Задание №2 - дополнение";
echo "<br>";
echo 'Создать переменную $city и присвоить ей строковое значение, содержащее название 
города в котором Вы живете.<br> Вывести с помощью echo фразу "Я живу в <b>Ваш_город</b>". <br>
Затем удалите переменную $city и попробуйте снова вывести фразу echo "Я живу в <b>Ваш_город</b>".';
echo "<br><br>";
echo "<em>Пример решения:";
echo "<br>";
$city = "Тольятти";
echo "Я живу в $city </em>";
echo "<br>";
unset ($city);
if (!isset ($city)) echo "<em>Я живу в Тольятти.</em>";
echo "<br><br>";?>
<code>
PHP код:<br>
$city = "Тольятти";<br>
echo "Я живу в $city";<br>
unset ($city);<br>
if (!isset ($city)) echo "<em>Я живу в Тольятти.</em>";</code>
<!-- ---------------------------------------------------------------------------------------------- -->
<?php
//Третье задание
echo "<h2>Задание №3</h2>";
define("PASSWORD", "123");
if (defined("PASSWORD")) {
    echo "Пароль существует!";
    echo "<br>";
    echo "Пароль - ".PASSWORD;
}
echo "<br><br>";
echo "Задание №3 - дополнение";
echo "<br>";
echo 'Создайте динамическую константу или как-бы генератор случайных чисел для пароля. <br>
Нужно изменять пароль на странице каждый раз при обновлении страницы 
и выводить фразу<br> "Ваш новый пароль <b>Ваш_новый_пароль</b>".';
echo "<br><br>";
echo "<em>Пример решения:";
echo "<br>";
//Генерируем случайное число от 100 до 600
$value = rand(100,600);
//Формируем имя константы
define ("PASSWORD2", "$value");
//Получаем значение динамической константы
echo "Ваш новый пароль - <b style='color:red'>".PASSWORD2."</b>";
echo "<br><br></em>";
?>
<code>
PHP код:<br>
//Генерируем случайное число от 100 до 600<br>
$value = rand(100,600);<br>
//Формируем имя константы<br>
define ("PASSWORD2", "$value");<br>
//Получаем значение динамической константы<br>
echo "Ваш новый пароль - ".PASSWORD2;  <br>   
</code>
<!-- ---------------------------------------------------------------------------------------------- -->
<?php
//Четвертое задание
echo "<h2>Задание №4</h2>";
$age4 = 18;
if ($age4 <= 65 && $age4 >= 18) {
    echo "Вам еще работать и работать!";
}    
elseif ($age4 < 18) {
    echo "Вам еще рано работать";
}
else {
    echo"Неизвестный возраст";
}
echo "<br><br>";
echo "Задание №4 - дополнение";
echo "<br>";
echo 'Создайте переменную $city, присвойте произвольное значение, напишите конструкцию if , которая выводит 
фразу <br> "У нас есть спец. предложение для Вас в городе Москва!" , если значение Москва, и "У нас есть скидки для жителей Санкт-Петербурга!" <br> если значение Санкт-Петербург
и выводить фразу "Будем рады сотрудничеству в Вашем городе!" для любого другого значения.';
echo "<br><br>";
echo "<em>Пример решения:";
echo "<br>";
$city = "Самара";
if ($city == "Москва") {
    echo "У нас есть спец. предложение для Вас в городе Москва!";
}    
elseif ($city == "Санкт-Петербург") {
    echo "У нас есть скидки для жителей Санкт-Петербурга!";
}
else {
    echo"Будем рады сотрудничеству в Вашем городе!";
}
echo "</em><br><br>";
?>
<code>
PHP код:<br>
$city = "Самара";
if ($city == "Москва") {<br>
    &nbsp;&nbsp;echo "У нас есть спец. предложение для Вас в городе Москва!";<br>
}<br>    
elseif ($city == "Санкт-Петербург") {<br>
    &nbsp;&nbsp;echo "У нас есть скидки для жителей Санкт-Петербурга!";<br>
}<br>
else {<br>
    &nbsp;&nbsp;echo"Будем рады сотрудничеству в Вашем городе!";<br>
}    
</code>
<!-- ---------------------------------------------------------------------------------------------- -->
<?php
//Пятое задание
echo "<h2>Задание №5</h2>";
$day = 0;
switch (true) {
    case ($day > 7 || $day < 1):
        echo "Неизвестный день!";
        break;
    case $day < 6:
        echo "Это рабочий день!";
        break;    
    default:
        echo "Это выходной день!";
}
echo "<br><br>";
echo "Задание №5 - дополнение";
echo "<br>";
echo 'Создайте переменную $color, присвойте произвольное значение цвета, напишите конструкцию switch , которая выводит 
фразу <br> "Ваш любимый цвет или красный или зеленый или синий" , если значение переменной не попадает в эти три цвета, то
вывести фразу <br>"Ваш любимый цвет ни красный, ни зеленый, ни синий..."';
echo "<br><br>";
echo "<em>Пример решения:";
echo "<br>";
$color = "red";
switch ($color) {
    case "red":
        echo "Ваш любимый цвет красный!";
        break;
    case "blue":
        echo "Ваш любимый цвет синий!";
        break;
    case "green":
        echo "Ваш любимый цвет зеленый!";
        break;
    default:
        echo "Ваш любимый цвет ни красный, ни зеленый, ни синий...";
}
echo "</em><br><br>";
?>
<code>
PHP код:<br> 
$color = "red";<br>
switch ($color) {<br>
    case "red":<br>
        &nbsp;&nbsp;echo "Ваш любимый цвет красный!";<br>
        &nbsp;&nbsp;break;<br>
    case "blue":<br>
        &nbsp;&nbsp;echo "Ваш любимый цвет синий!";<br>
        &nbsp;&nbsp;break;<br>
    case "green":<br>
        &nbsp;&nbsp;echo "Ваш любимый цвет зеленый!";<br>
        &nbsp;&nbsp;break;<br>
    default:<br>
        &nbsp;&nbsp;echo "Ваш любимый цвет ни красный, ни зеленый, ни синий...";<br>
}
</code>
<!-- ---------------------------------------------------------------------------------------------- -->
<?php
//Шестое занятие
echo "<h2>Задание №6</h2>";
$bmw['model'] = "x5";
$bmw['speed'] = "120";
$bmw['doors'] = "5";
$bmw['years'] = "2015";
$toyota['model'] = "camry";
$toyota['speed'] = "200";
$toyota['doors'] = "5";
$toyota['years'] = "2002";
$opel['model'] = "astra";
$opel['speed'] = "202";
$opel['doors'] = "5";
$opel['years'] = "2017";
echo "bmw ";
foreach ($bmw as $value) {
    echo "$value ";
}
echo "<br>";
echo "toyota ";
foreach ($toyota as $value) {
    echo "$value ";
}
echo "<br>";
echo "opel ";
foreach ($opel as $value) {
    echo "$value ";
}
echo "<br><br>";
echo "Задание №6 - дополнение";
echo "<br>";
echo 'Создайте массив названий машин и выведите его в один столбец , предварительно отсортировав в алфавитном порядке';
echo "<br><br>";
echo "<em>Пример решения:";
echo "<br>";
$cars = array("volvo", "bmw", "toyota", "lada", "opel", "saab", "ferrari", "volga");
sort($cars);
$length = count($cars);
for($x = 0; $x < $length; $x++) {
    echo $cars[$x];
    echo "<br>";
}
 echo "</em><br>";
?>
<code>
PHP код:<br> 
$cars = array("volvo", "bmw", "toyota", "lada", "opel", "saab", "ferrari", "volga");<br>
sort($cars);<br>
$length = count($cars);<br>
for($x = 0; $x < $length; $x++) {<br>
    &nbsp;&nbsp;echo $cars[$x];<br>
    &nbsp;&nbsp;echo "&lt;br&gt;";<br>
}
</code>
</div>