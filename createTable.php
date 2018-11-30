<?php
       include 'DB.php';
       $q="create table if not exists train_time ( id int(11) not null AUTO_INCREMENT PRIMARY KEY ,start_station varchar(255),end_station varchar(255),
       train_number int(11) not null,
       start varchar(255),end varchar(50),time  varchar(255),speed varchar(255),degree varchar(255),stop int(11))
       ;";
      $db-> myExec($q);
      



?>
