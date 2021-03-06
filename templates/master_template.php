<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Raamatupood Fahrenheit 451</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">
    <?php require_once "header.php"; ?>
    <main>
    <?php require_once $_SERVER['DOCUMENT_ROOT']."/fahrenheit451/views/$page.php"; ?>
    </main>
    <?php require_once "footer.php"; ?>
</div>
</body>
</html>
