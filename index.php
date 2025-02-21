
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once "inclu/nav.php"; ?>
    <h1>Pagina Secundaria</h1>

<?php
foreach ($_POST['asignatura'] as $asignatura) {
    echo $asignatura.'<br>';
}
//var_dump($_POST['asignatura']);
//$nombre=$_POST['nombre'];
//echo $nombre.'<br>';
//$asignatura=$_POST['asignatura'];
//echo $asignatura.'<br>';
//$frutas=$_POST['frutas'];
//echo $frutas.'<br>';
?>

    <footer>
        
    </footer>
</body>
</html>