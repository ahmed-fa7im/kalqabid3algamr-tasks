<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي | منتجاتي</title>

    <style>
        h3 {
            font-family: 'Cario', sans-serif;
            font-weight: bold;
        }

        main {
            width: 40%;
            margin-top: 30px;
        }

        table {
            box-shadow: 1px 1px 10px silver;
        }

        thead {
            background-color: #1893f0;
            color: white;
            text-align: center;
        }

        tbody {
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <h3>منتجاتك المحجوزه</h3>
    </center>
    <?php
    include 'config.php';
    $result = mysqli_query($con, "SELECT * FROM addcard");
    ?>

    <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product Name</th>
                        <th scope='col'>Product Price</th>
                        <th scope='col'>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td><a href='del_card.php?id=" . $row['id'] . "' class='btn btn-danger'>ازالة</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </center>
    <center>
        <a href="shope.php">الرجوع الي صفحة المنتجات</a>
    </center>
</body>

</html>