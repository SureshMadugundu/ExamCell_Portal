<?php
    echo "Name:".$_POST['name']."<br/>";
    echo "Subjects:<br/>";
    foreach($_POST['sub'] as $subject){
        echo $subject."<br/>";
    }
    echo "Gender:".$_POST['gender']."<br/>";
    echo "ID:".$_POST['id'];
?>
