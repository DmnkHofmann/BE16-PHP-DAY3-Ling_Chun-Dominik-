<?php require_once 'db_connect.php'; 
    require_once 'delete.php'; 

$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php 

foreach ($rows as $value) {
    echo "
    <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='{$value["image"]}' alt='Card image cap'>
        <div class='card-body'>
            <h5 class='card-title'>{$value["name"]}</h5>
            <p class='card-text'>{$value["meal_description"]}</p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
        </div>
    </div>
    ";
 }

?>    

<br>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>