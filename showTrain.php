        <?php
      include 'DB.php';

      echo "<a href='mainPage.php'> Back To Home</a><br>";
      if(isset($_POST['submit']))
        {
          $start=$_POST['sl1'];
          $end=$_POST['sl2'];
          $type=$_POST['sl3'];
           if($type!="all")
            {

          $q="select * from train_time where start_station=? and end_station=? and degree=? ";
          $rows=$db->getRows($q,array($start,$end,$type));
          $num=$db->getCount($q,array($start,$end,$type));
          echo "Ther are $num Train from $start to $end";

                     echo "<table id='t' border=1px><tr><th>#Train</th><th>Start</th><th>End</th><th>Time</th><th>Speed</th><th>Type</th><th>Stop On</th></tr>";
	             foreach($rows as $row)
	              {
                         echo "<tr><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td></tr>";
                      }
                     echo "</table>";


            }
            if($type=="all")
            {

          $q="select * from train_time where start_station=? and end_station=? ";
          $rows=$db->getRows($q,array($start,$end));
          $num=$db->getCount($q,array($start,$end));
          echo "Ther are $num Train from $start to $end";
                     echo "<table id='t' border=1px><tr><th>#Train</th><th>Start</th><th>End</th><th>Time</th><th>Speed</th><th>Type</th><th>Stop On</th></tr>";
	             foreach($rows as $row)
	              {
                         echo "<tr><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td></tr>";
                      }
                     echo "</table>";


            }

        }

?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
   <link rel="stylesheet" href="style.css">
</head>

<body>



</body>

</html>
