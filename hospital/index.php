<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al shifa Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/logo.png">
            <h2>مستشفى الشفاء</h2>
        </div>
        <div class="book">
            <p>اهلا بك في مستشفى الشفاء .. للحجز املء الإستمارة أدناة</p>
            <form action="index.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="name" />
                <input type="text" placeholder="أدخل البريد الالكتروني" name="email" />
                <input type="date" name="date" />
                <input type="submit" value="احجز الان" name="send" />
            </form>

        <?php
        //connect DB
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
        //Send for DB
        if($_POST['send']){
            
            $pName = $_POST['name'];
            $pEmail = $_POST['email'];
            $pDate = $_POST['date'];            
        
            $query = "INSERT INTO patients(name,email,date) 
            VALUE('$pName ','$pEmail ','$pDate ')";
            $result = mysqli_query($link,$query);
            echo "<p style='color:green'>" . "تم الحجز" . "</p>";
        }else{
            echo "<p style='color:red'>" . "عفواً حدث خطأ .. حاول مجدد " . "</p>";
        }
        ?>
        </div>
    </div>
</body>
</html>