<?php
    //header("Context-Type: text/html; charset=utf-8");
    $db_host="localhost";
    $db_user="root";
    $db_password="chris0806";
    $db_name="class_comment";
    $db_link=@new mysqli($db_host,$db_user,$db_password, $db_name);
    if($db_link-> connect_error != "")
    {
        echo "資料連結失敗";
    }
    else
    {
        $db_link -> query("SET NAMES 'utf8'");
        //echo "success";
    }
    //mysqli_query($db_link,"SET NAMES utf8");
?>