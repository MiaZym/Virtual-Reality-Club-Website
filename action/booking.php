<?php

    $name = $_POST['name_book'] ;
    $phone= $_POST['phone_book'];
    $date = $_POST['date_book'] ; //2001-01-21
    $num_glasses= $_POST['glasses_book'];
    $pays= $_POST['payradio'];


  if(mb_strlen($name) <= 3 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit();
    
    } 
  else if(mb_strlen($num_glasses) < 1 || mb_strlen($password) > 6) {
    echo "Введите корректное число шлемов (от 1 до 6)";
    exit();
    }


    $mysql = new mysqli('localhost', 'root', '', 'registervr-bd');
    
    $mysql-> query("INSERT INTO `booking` (`name`, `phone`, `date`, `num_glasses`,`pays`) 
    VALUES('$name', '$phone', '$date','$num_glasses', '$pays')");
    
    $mysql->close();
    header('Location: /');

    
?>

