<meta charset ="utf-8">
<?php
$host='localhost';
$dbname='3pk'; //имя базы данных
$user='redactor'; //пользователь
$password=''; //пароль от пользователя
require_once 'connection.php'; //имя глвного пчп 
if(isset($_POST['id']))
{
    $link = mysqli_connect($host, $user, $password, $database) 
      or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['id']);

    $query ="DROP FROM "_" WHERE id = '$id'";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    mysqli_close($link);
}
?>