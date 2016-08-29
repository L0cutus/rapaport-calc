<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
</head>
<body>
    <?php
    include "main.php";
    $carati = floatval($_GET['carati']);
    $colore = $_GET['colore'];
    $purezza = $_GET['purezza'];
    $cambio = floatval($_GET['cambio']);

    if ($carati < 0.04) {
        $crange = ".01 - .03";
    } else if ($carati > 0.03 & $carati < 0.08) {
        $crange = ".04 - .07";
    } else if ($carati > 0.07 & $carati < 0.15) {
        $crange = ".08 - .14";
    } else if ($carati > 0.14 & $carati < 0.18) {
        $crange = ".15 - .17";
    } else if ($carati > 0.17 & $carati < 0.23) {
        $crange = ".18 - .22";
    } else if ($carati > 0.22 & $carati < 0.30) {
        $crange = ".23 - .29";
    } else if ($carati > 0.29 & $carati < 0.40) {
        $crange = ".30 - .39";
    } else if ($carati > 0.39 & $carati < 0.50) {
        $crange = ".40 - .49";
    } else if ($carati > 0.49 & $carati < 0.70) {
        $crange = ".50 - .69";
    } else if ($carati > 0.69 & $carati < 0.90) {
        $crange = ".70 - .89";
    }

    $res = $ary[$crange][$purezza][$colore] * 100 * $carati * $cambio;

    echo $res . ' &euro;';
    ?>    

    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
