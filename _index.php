<?php
if(false){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
session_start();

if(isset($_GET['logout'])){
    session_destroy();
    header('location:index.php');
    die();
}
ini_set('auto_detect_line_endings',TRUE);

$sucursales = array();
$info = array();
$ex = array();
$ranking = array();
$ranking_final = array();
$handle = fopen('https://docs.google.com/spreadsheets/d/1HUTuAtDL5D8RiUeO5ZXME5Z6YrRzRBCm42FQhbn5P6o/pub?gid=0&single=true&output=csv','r');
$n = array(
    "VICUÑA"=>"Vicu&ntilde;a", 
    'VINA_DEL_MAR'=>'VI&ntilde;a del Mar', 
    'CANETE'=>'Ca&ntilde;ete',
    'HUERFANOS'=>'Hu&eacute;rfanos',
    'MAIPU'=>'Maip&uacute;',
    'NUNOA'=>'&Ntilde;u&ntilde;oa',
);
while ( ($data = fgetcsv($handle) ) !== FALSE ) {
    /*
    var_dump($data);
    die();
    */
    
    array_push($sucursales, $data[9]);

    $a = array(
        "c"=>$data[0],
        "i"=>$data[1],
        "s"=>(array_key_exists($data[2],$n))?$n[$data[2]]:ucwords(strtolower(str_replace("_", " ", $data[2]))),
        "vl"=>$data[15],//$data[4],
        "vt"=>40,//$data[5],
        "rel"=>($data[19]+$data[20]),//$data[6],
        "ret"=>15,//$data[7],
        "ril"=>($data[16]+$data[17]+$data[18]),//$data[8],
        "rit"=>45,//$data[9],
        "p"=>($data[15]+$data[16]+$data[17]+$data[18]+$data[19]+$data[20]), //$data[10],
        "t"=>$data[11],
        "_r"=>$data[16],
        "_cc"=>$data[17],
        "_cv"=>$data[18],
        "_sv"=>$data[19],
        "_mp"=>$data[20],
        "_o"=>$data[2],
        "_p"=>$data[12],
    );
    $info[$data[9]] = $a;

}

foreach ($info as $key => $value) {
    if($info[$_SESSION["sucursal"]]["c"] == $value["c"]){
        $ranking[$key] = $value["p"];
    }
    $ranking_final[$value["c"]][$key] = $value["p"];
}
foreach($ranking_final as &$tranking){
    arsort($tranking);
}

$specs = array("azul" => "Fórmula 1",
"morado" => "IndyCar",
"naranja" => "Karting",
"verde" => "Nascar",
"roja" => "Gran Turismo",
"rojo" => "Gran Turismo",

);

$global = '';
$posicion_carrera = '';
$categoria = '';
$handle = fopen('https://docs.google.com/spreadsheets/d/1HUTuAtDL5D8RiUeO5ZXME5Z6YrRzRBCm42FQhbn5P6o/pub?gid=1655735148&single=true&output=csv','r');
while ( ($data = fgetcsv($handle) ) !== FALSE ) {
    switch ($data[0]) {
        case 'global':
            $global = $data[1];
            break;
        case 'posicion_carrera':
            $posicion_carrera = $data[1];
            break;
        case 'categoria':
            $categoria = $data[1];
            break;
        
        default:
           break;
    }
}

arsort($ranking);

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if(isset($_SESSION['sucursal']) && in_array($_SESSION['sucursal'], $sucursales)){
    $p = ceil(($info[$_SESSION["sucursal"]]['vl']/$info[$_SESSION["sucursal"]]['vt'])*100);
    $re = ceil(($info[$_SESSION["sucursal"]]['rel']/$info[$_SESSION["sucursal"]]['ret'])*100);
    $ri = ceil(($info[$_SESSION["sucursal"]]['ril']/$info[$_SESSION["sucursal"]]['rit'])*100);
    include_once 'info-sucursal-'.$info[$_SESSION["sucursal"]]['c'].'.php';
    echo "<!--";
    print_r($info[$_SESSION["sucursal"]]);

    die();
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Orlando - Creative HTML Template">
    <meta name="author" content="CreateIT">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Grand Prix La Araucana</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">


    <!--[if lt IE 9]>
    <script src="./assets/bootstrap/js/html5shiv.min.js"></script>
    <script src="./assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="./assets/js/modernizr.custom.js"></script>
</head>
<body class="cssAnimate">

<div class="ct-specialPage background-img-prix ct-u-backgroundDarkGray">
    <div class="ct-specialPage-inner black-bkg">
       <div class="papel-picado">
        <div class="container">
           <div class="logo-signin img-responsive">
           	<img src="assets/images/logo-signin.png" alt="logo">
           </div>
                <div class="ct-contactForm">
                    <div class="successMessage alert alert-success" style="display: none">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Thank You!
                    </div>
                    <div class="errorMessage alert alert-danger" style="display: none">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Ups! An error occured. Please try again later.
                    </div>

                    <form role="form" action="login.php" method="post" class="contactForm validateIt"
                          data-email-subject="Contact Form" data-show-errors="true">
                        <div class="row">
                           <div class="col-md-3"></div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input id="id-sucursal" placeholder="Name" required type="text" name="field[]"
                                           class="form-control">
                                    <label for="contact_name">Sucursal</label>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
						</div>
                           <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input id="pass" placeholder="Contraseña" required type="password" name="field[]"
                                           class="form-control">
                                    <label for="contact_email">Contraseña</label>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                           <div class="col-md-3"></div>
                            <div class="col-md-6 col-xs-12">
                                <button type="submit"
                                        class="btn-ingresar btn btn-primary btn-lg text-uppercase"> INGRESAR
                                </button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </form>
                </div>
        </div>
	</div>
    </div>
</div>

<!-- JavaScripts -->

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.placeholder.min.js"></script>
<script src="./assets/js/jquery.easing.1.3.js"></script>
<script src="./assets/js/device.min.js"></script><script src="./assets/js/jquery.browser.min.js"></script>
<script src="./assets/js/snap.min.js"></script>
<script src="./assets/js/jquery.appear.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/waypoints-sticky.min.js"></script>

<script src="./assets/js/main.js"></script>



</body>
</html>