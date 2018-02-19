<?php
session_start();
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
//define("DRIVE",'https://docs.google.com/spreadsheets/d/e/2PACX-1vTtlksIYy3LvIieuZgJNxnFYdJz9VIBDR1IBdovGqaBaPKXaqwLizfhnwbmhKvppEwUktSWyiHvrQKN/pub?gid=0&single=true&output=csv');
define("DRIVE", 'https://docs.google.com/spreadsheets/d/1HUTuAtDL5D8RiUeO5ZXME5Z6YrRzRBCm42FQhbn5P6o/pub?gid=0&single=true&output=csv');
define('TARGET','index.php');
ini_set('auto_detect_line_endings',TRUE);

if(isset($_GET['logout'])){
    session_destroy();
    header('location:'.TARGET);
    die();
}

if(isset($_POST['field'])){
   
    $s = strtoupper($_POST['field'][0]);
    $p = $_POST['field'][1];
    ini_set('auto_detect_line_endings',TRUE);
    $handle = fopen(DRIVE,'r');
    $e = false;

    while ( ($data = fgetcsv($handle) ) !== FALSE ) {
        if($data[2] == $s && hash('WHIRLPOOL', $p) == $data[3]){
            $e = true;
        }
    }
    if($e){
        $_SESSION['sucursal'] = $s;
        header('location:'.TARGET);
        die();
    }
}

$sucursales = array();
$info = array();
$ex = array();
$ranking = array();
$ranking_final = array();
$handle = fopen(DRIVE,'r');
$n = array(
    "VICUÑA"=>"Vicu&ntilde;a", 
    'VINA_DEL_MAR'=>'VI&ntilde;a del Mar', 
    'CANETE'=>'Ca&ntilde;ete',
    'HUERFANOS'=>'Hu&eacute;rfanos',
    'MAIPU'=>'Maip&uacute;',
    'NUNOA'=>'&Ntilde;u&ntilde;oa',
);
while ( ($data = fgetcsv($handle) ) !== FALSE ) {
    array_push($sucursales, $data[2]);	
    $a = array(
        "c"=>$data[0],
        "i"=>$data[1],
        "s"=>(array_key_exists($data[2],$n))?$n[$data[2]]:ucwords(strtolower(str_replace("_", " ", $data[2]))),

        "vl"=>((($data[24]+$data[22])>0)?(number_format(($data[23]+$data[25]), 2, ".", ",")):(number_format($data[8], 2, ".", ","))),
        "vt"=> number_format($data[7], 2, ".", ","), //((($data[24]+$data[22])>0)?($data[24]+$data[22]):($data[7])),
        
        "rel"=>number_format(($data[16]+$data[17]), 2, ".", ","),
        "ret"=>number_format($data[15], 2, ".", ","),
        
        "ril"=>($data[27]>0)?number_format(($data[11]+$data[12]+$data[13]+$data[27]), 2, ".", ","):number_format(($data[11]+$data[12]+$data[13]), 2, ".", ","),
        "rit"=>number_format($data[10], 2, ".", ","), //($data[26]>0)?($data[10]+$data[26]):($data[10]),
        
        "p"=>number_format(($data[11]+$data[12]+$data[13]+$data[16]+$data[17]+$data[8]), 2, ".", ","),
        "t"=>$data[4],
        
        "_r"=>number_format($data[11], 2, ".", ","),
        
        "_cc"=>number_format($data[12], 2, ".", ","),
        
        "_cv"=>number_format($data[13], 2, ".", ","),
        

	    "_cv1"=>number_format($data[31], 2, ".", ","),

	    "_cv2"=>number_format($data[32], 2, ".", ","),	

	    "_vnn"=>number_format($data[33], 2, ".", ","),

        "_vnr"=>number_format($data[34], 2, ".", ","),

        "_maxVnn"=>number_format($data[35], 2, ".", ","),

        "_maxVnr"=>number_format($data[36], 2, ".", ","),

        "_maxR"=>number_format($data[37], 2, ".", ","),

        "_maxCs"=>number_format($data[38], 2, ".", ","),

        "_maxCvc"=>number_format($data[39], 2, ".", ","),

        "_maxCvv"=>number_format($data[40], 2, ".", ","),

        "_maxSi"=>number_format($data[41], 2, ".", ","),

        "_maxMp"=>number_format($data[42], 2, ".", ","),

        "_sv"=>number_format($data[16], 2, ".", ","),
        
        "_mp"=>number_format($data[17], 2, ".", ","), // "Monto Promedio (MAX 10)"
        
        "_o"=>$data[2], // "Sucursal" 
        
        "_p"=>$data[5], // "IMAGEN PITS" 

        "imp2"=>$data[21], // imagen pits 2

        "vnn_t"=>number_format($data[22], 2, ".", ","),
        "vnn"=>number_format($data[23], 2, ".", ","),
        "vnr_t"=>number_format($data[24], 2, ".", ","),
        "vnr"=>number_format($data[25], 2, ".", ","),
        "scc_t"=>number_format($data[26], 2, ".", ","),
        "scc"=>number_format($data[27], 2, ".", ","),

        "tipsImage"=>$data[30],
        
    );
    $info[$data[2]] = $a;

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
arsort($ranking);

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if(isset($_SESSION['sucursal']) && in_array($_SESSION['sucursal'], $sucursales)){
    $p = ceil(($info[$_SESSION["sucursal"]]['vl']/$info[$_SESSION["sucursal"]]['vt'])*100);
    $re = ceil(($info[$_SESSION["sucursal"]]['rel']/$info[$_SESSION["sucursal"]]['ret'])*100);
    $ri = ceil(($info[$_SESSION["sucursal"]]['ril']/$info[$_SESSION["sucursal"]]['rit'])*100);
    include_once 'info-sucursal-'.$info[$_SESSION["sucursal"]]['c'].'.php';
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

                    <form role="form" action="<?php echo TARGET;?>" method="post" class="contactForm validateIt"
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
