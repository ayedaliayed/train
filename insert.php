<?php

       include 'DB.php';

       $q="select *form train_time";
       $number=(int)$db->getCount($q,array());



         $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','alex',2004,'3 AM','6 AM','3 Hours','130KM/H','vip',5);";
    $db->myExec($q);
        $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','alex',2005,'4 AM','7 AM','3 Hours','130KM/H','vip',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','alex',3003,'4AM','7.5 AM','4Hours','100KM/H','Express',7);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','alex',4406,'6 AM','11 AM','5 Hours','120KM/H','Air Conditioner',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','alex',4405,'7 AM','12 AM','5 Hours','120KM/H','Air Conditioner',5);";
    $db->myExec($q);


$q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','cario',2006,'3 AM','6 AM','3 Hours','130KM/H','vip',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','cario',2007,'3 AM','6 AM','3 Hours','130KM/H','vip',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','cario',2006,'4 AM','7AM','3 Hours','130KM/H','vip',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','cario',3033,'4AM','7.5 AM','4 Hours','100KM/H','Express',7);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','cario',4444,'5 AM','10 AM','5 Hours','120KM/H','Air Conditioner',5);";
    $db->myExec($q);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','assuit',1004,'3AM','12 PM','9 Hours','130KM/H','vip',8);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','assuit',1234,'12 AM','7.5 AM','4 Hours','100KM/H','Express',10);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','assuit',654,'5 AM','10 AM','5 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','assuit',655,'7 AM','12 AM','5 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','assuit',657,'6 AM','11 AM','5 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
    ///////////////////////////////////////////////////////////////////////////
       $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','cario',9874,'1.5 AM','6AM','3Hours','130KM/H','vip',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','cario',8521,'4 AM','7.5 AM','4Hours','100KM/H','Express',9);";
    $db->myExec($q);
     $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','cario',8522,'6 AM','9.5 AM','4Hours','100KM/H','Express',9);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','cario',9510,'2 AM','10 AM','8 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
     $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','cario',9510,'4 AM','2 PM','8 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','sohag',2004,'2 AM','12 PM',' 10 Hours','130KM/H','vip',8);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','sohag',2005,'3 AM','1 AM',' 10 Hours','130KM/H','vip',8);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','sohag',7234,'12 AM','7.5 AM','8 Hours','100KM/H','Express',10);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','sohag',9654,'5 AM','11 AM','6 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
     $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('cario','sohag',9656,'6 AM','12 AM','6 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
       $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','cario',6874,'1.5 AM','6AM','3Hours','130KM/H','vip',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','cario',6521,'4 AM','7.5 AM','4Hours','100KM/H','Express',9);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','cario',6510,'2 AM','10 AM','8 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
      $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','cario',6511,'3 AM','11 AM','8 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','assuit',2088,'2 AM','10 PM',' 8 Hours','130KM/H','vip',6);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','assuit',2089,'3 AM','11 PM',' 8 Hours','130KM/H','vip',6);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','assuit',8234,'12 AM','5.5 AM','6 Hours','100KM/H','Express',8);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','assuit',8654,'5.5 AM','11 AM','5.5 Hours','120KM/H','Air Conditioner',5);";
    $db->myExec($q);
    ///////////////////////////////////////////////////////////////////////////
       $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','alex',8974,'10 PM','6 AM','8 Hours','130KM/H','vip',6);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','alex',9921,'5 AM',' 2 AM','12 Hours','100KM/H','Express',12);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','alex',9910,'1 AM','10 AM','7 Hours','120KM/H','Air Conditioner',9);";
    $db->myExec($q);
/////////////////////////////////////////////////////////////////////////////////////////
$q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','sohag',2088,'2 AM','12 PM',' 10 Hours','130KM/H','vip',8);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','sohag',8234,'12 AM','7.5 AM','8 Hours','100KM/H','Express',10);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('alex','sohag',8654,'5 AM','11 AM','6 Hours','120KM/H','Air Conditioner',7);";
    $db->myExec($q);
    ///////////////////////////////////////////////////////////////////////////
       $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','alex',8874,'10 PM','6 AM','3Hours','130KM/H','vip',9);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','alex',7521,'4 AM',' 2 AM','4Hours','100KM/H','Express',15);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','alex',7510,'12 PM','10 AM','8 Hours','120KM/H','Air Conditioner',11);";
    $db->myExec($q);
        $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','alex',8874,'10 PM','6 AM','3Hours','130KM/H','vip',9);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','alex',7521,'3 AM',' 3 AM','4Hours','100KM/H','Express',15);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','alex',7511,'1 PM','9 AM','8 Hours','120KM/H','Air Conditioner',11);";
    $db->myExec($q);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','sohag',3388,'11 PM','12 PM',' 1 Hours','130KM/H','vip',3);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','sohag',3334,'6 AM','7.50 AM','8 Hours','100KM/H','Express',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('assuit','sohag',3354,'9.5 AM','11 AM','1.5 Hours','120KM/H','Air Conditioner',4);";
    $db->myExec($q);
    ///////////////////////////////////////////////////////////////////////////
       $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','assuit',4474,'4 AM','5 AM','3Hours','130KM/H','vip',2);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','assuit',4421,'4 AM',' 5.40 AM','1Hours','100KM/H','Express',5);";
    $db->myExec($q);
    $q="insert into train_time(start_station,end_station,train_number,start,end,time,speed,degree,stop)
    values('sohag','assuit',4410,'8.5 PM','10 AM','1.5 Hours','120KM/H','Air Conditioner',4);";
    $db->myExec($q);
  

?>
