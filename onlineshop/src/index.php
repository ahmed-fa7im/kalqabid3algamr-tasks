<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope Online | اضافة منتجات</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>موقع تسويقي اونلاين</h2>
                <img src="images/logo.webp" alt="logo" width="450px">
                <input required type="text" name="name">
                <br>
                <input required type="text" name="price">
                <br>
                <input required type="file" name="image" id="file" style="display: none;">
                <label for="file">اختيار صورة المنتج</label>
                <button name="upload">رفع المنتج ✅</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>

            </form>
        </div>
        <P>Developed By Ahmed</P>
    </center>

</body>

</html>