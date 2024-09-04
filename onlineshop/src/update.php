<?php

include 'config.php';
$ID = $_GET['id'];
$update_query = "SELECT * FROM prod WHERE id=$ID";
$up = mysqli_query($con, $update_query);
$data = mysqli_fetch_array($up);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product | تعديل منتج</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل المنتجات</h2>
                <input required type="text" name="id" value="<?php echo $data['id'] ?>">
                <br>
                <input type="text" name="name" value="<?php echo $data['name'] ?>">
                <br>
                <input type="text" name="price" value="<?php echo $data['price'] ?>">
                <br>
                <input type="file" name="image" id="file" style="display: none;">
                <label for="file">تحديث صورة المنتج</label>
                <button name="update" type="submit"> تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>

            </form>
        </div>
        <P>Developed By Ahmed</P>
    </center>

</body>

</html>