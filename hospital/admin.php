<?php
    include "header.php";
?>

<table>
    <th>الرقم</th>
    <th>إسم المريض</th>
    <th>البريد الإلكتروني</th>
    <th>التاريخ</th>

<?php
    $user = 'root';
    $password = 'root';
    $db = 'hosptial';
    $host = 'localhost';
    $port = 3306;
    
    $link = mysqli_init();
    $success = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db,
       $port
    );
    // if(isset($success)){
    //     echo "Yes database connect";
    // }else{
    //     echo "database not connect";
    // }

    //Show DB Data

    $query = "SELECT * FROM patients";
    $result = mysqli_query($link,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] .
             "</td><td>" . $row['name'] . "</td><td>" 
             . $row['email'] . "</td><td>" 
             . $row['date'] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "×خطأ×";
    }


?>