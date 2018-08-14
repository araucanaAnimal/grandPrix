<?php
define('COLOR','morado');
$pos_g = array();
$lp = 0;$tp = 1;$p = 1;$rf = $ranking_final['azul'];$n=1;
foreach($rf as $_k=>$_v){
if($_v != $lp){
$p = $tp;
}
$lp = $_v;
$pos_g[$_k] = $p;
$tp++;
$n++;
}
$n = $tp;
?><!DOCTYPE html><!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Orlando - Creative HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Mis Datos - Grand Prix La Araucana</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">


    <!--[if lt IE 9]>
    <script src="./assets/bootstrap/js/html5shiv.min.js"></script>
    <script src="./assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="./assets/js/modernizr.custom.js"></script>
    
     <!-- popup css -->
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <style>
.table-striped > tbody > tr:nth-child(odd) > td {
    background-color: rgba(249,249,249,0.2);
    border-top: none;
}
.table-striped > tbody > tr:nth-child(odd),table{
    border: none;
}
.table {
    border-bottom:0px !important;
}
.table th, .table td {
    border: 1px !important;
}
.fixed-table-container {
    border:0px !important;
}

.mini-progress{
    -webkit-transform: scale(0.7);
            transform: scale(0.7);
    -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
}
.mini-progress.progress .progress-bar .ct-progressBar-text {
    width: 350px;
}

.mini-progress.progress .progress-bar.progress-bar-success .ct-progressBar-tr ,.mini-progress .progress-bar.progress-bar-success {
    background-color: #3eb1f4;
}
.mini-progress .progress-bar.progress-bar-success .ct-progressBar-tr:before {
    border-color: #3eb1f4 transparent transparent transparent;
}
.mini-progress .progress-bar.progress-bar-success .ct-progressBar-tr:after {
    border-color: transparent transparent #0b77b5 transparent;
}

</style>
</head>
<body class="cssAnimate ct-navbar-isTransparent-toInverse ct-js-navbarMakeSmaller ct-js-enableWayPoints ct--darkMotive background-img-prix">
<div class="black-bkg">
<div class="container nav-sup">
	<div class="col-md-6 col-xs-12">
		<img class="img-responsive logo-int" src="assets/images/logo-interior.png" alt="Grand Prix La Araucana">
	</div>
	<div class="col-md-6">
    <a href="index.php?logout" class="btn btn-xs btn-primary pull-right mar-top-10">Salir</a>
        <div class="mar-r-10 ingresaste pull-right">Has ingresado como sucursal <?php echo $info[$_SESSION["sucursal"]]['s'];?></div> -->
	</div>
</div>
<!-- /.container -->

<section id="section1" class="ct-u-backgroundDarkGray contenido">
   <div class="row ct-u-paddingTop70 fullpage-info">
    <div class="menu-left">
        <ul class="nav nav-tabs ct-navTabs--dark nav-stacked diagonal" role="tablist" id="myTab7">
            <li class="ct-navTabs--default active"><a href="#misdatos7" role="tab" data-toggle="tab">Mis Resultados</a></li>
            <li class="ct-navTabs--default"><a href="#ranking7" role="tab" data-toggle="tab">Ranking General</a></li>
            <li class="ct-navTabs--default"><a href="#posicion7" role="tab" data-toggle="tab">Posición Carrera</a></li>
            <li class="ct-navTabs--default"><a href="#pits7" role="tab" data-toggle="tab">Pits</a></li>
            <li class="ct-navTabs--default"><a href="#categoria7" role="tab" data-toggle="tab">Categorías</a></li>
            <li class="ct-navTabs--default"><a href="#tipsgestion7" role="tab" data-toggle="tab">Tip de Gestión</a></li>
            <li class="ct-navTabs--default"><a href="#galeria7" role="tab" data-toggle="tab">Galería</a></li>
        </ul>
    </div>
    <div class="container">
    <div class="col-sm-10 pull-right">
        <div class="tab-content ct-navTabs-content--dark">
            <div class="tab-pane active fade in inside" id="misdatos7">
               <div class="col-md-12 escuderia">
                <h3>Sucursal <?php echo $info[$_SESSION["sucursal"]]['s'];?></h3> 
               	<h5>Categoría <?php echo $specs[$info[$_SESSION["sucursal"]]['c']];?></h5>
               </div>
                <div class="col-md-5">
                	<img src="assets/images/sucursales/<?php echo $info[$_SESSION["sucursal"]]['i'];?>" alt=""> <!-- cargar imagen de cada sucursal carpeta images/sucursales/x.png -->
                </div>
                <div class="col-md-7 pad-top-50">
                
               <div class="progress">
                    <div class="progress-bar progress-bar-info  progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo ceil((($info[$_SESSION["sucursal"]]['_vnn']+$info[$_SESSION["sucursal"]]['_vnr'])/(($info[$_SESSION["sucursal"]]['_maxVnn']+$info[$_SESSION["sucursal"]]['_maxVnr'])))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Ventas &nbsp <?php echo  ($info[$_SESSION["sucursal"]]['_vnn']+$info[$_SESSION["sucursal"]]['_vnr'])."/".($info[$_SESSION["sucursal"]]['_maxVnn']+$info[$_SESSION["sucursal"]]['_maxVnr']);?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>

                <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info  progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_vnn']/($info[$_SESSION["sucursal"]]['_maxVnn']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Ventas Netas Nuevos &nbsp<?php echo $info[$_SESSION["sucursal"]]['_vnn']."/".$info[$_SESSION["sucursal"]]['_maxVnn'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>

                <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info  progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_vnr']/($info[$_SESSION["sucursal"]]['_maxVnr']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Ventas Netas Renegociados &nbsp<?php echo $info[$_SESSION["sucursal"]]['_vnr']."/".$info[$_SESSION["sucursal"]]['_maxVnr'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar progress-bar-info  progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo ceil((($info[$_SESSION["sucursal"]]['_cv1']+$info[$_SESSION["sucursal"]]['_cv2']+$info[$_SESSION["sucursal"]]['_r']+$info[$_SESSION["sucursal"]]['_cc'])/($info[$_SESSION["sucursal"]]['_maxR']+$info[$_SESSION["sucursal"]]['_maxCs']+$info[$_SESSION["sucursal"]]['_maxCvc']+$info[$_SESSION["sucursal"]]['_maxCvv']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Riesgo &nbsp <?php echo  ($info[$_SESSION["sucursal"]]['_cv1']+$info[$_SESSION["sucursal"]]['_cv2']+$info[$_SESSION["sucursal"]]['_r']+$info[$_SESSION["sucursal"]]['_cc'])."/".($info[$_SESSION["sucursal"]]['_maxR']+$info[$_SESSION["sucursal"]]['_maxCs']+$info[$_SESSION["sucursal"]]['_maxCvc']+$info[$_SESSION["sucursal"]]['_maxCvv']);?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>


               <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                    aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_r']/($info[$_SESSION["sucursal"]]['_maxR']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text" style="color: white;">Reprogramaciones &nbsp<?php echo $info[$_SESSION["sucursal"]]['_r']."/".$info[$_SESSION["sucursal"]]['_maxR'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>

                <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info  progress-bar-striped active" role="progressbar"
                    aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_cc']/($info[$_SESSION["sucursal"]]['_maxCs']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text" style="color: white;">Cruce Cesantía &nbsp<?php echo $info[$_SESSION["sucursal"]]['_cc']."/".$info[$_SESSION["sucursal"]]['_maxCs'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>

                <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                    aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_cv1']/($info[$_SESSION["sucursal"]]['_maxCvc']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Calidad de Venta Color &nbsp<?php echo $info[$_SESSION["sucursal"]]['_cv1']."/".$info[$_SESSION["sucursal"]]['_maxCvc'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>

                <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                    aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_cv2']/($info[$_SESSION["sucursal"]]['_maxCvv']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Calidad de Venta Vintage  &nbsp<?php echo $info[$_SESSION["sucursal"]]['_cv2']."/".$info[$_SESSION["sucursal"]]['_maxCvv'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                    aria-valuenow="<?php echo ceil((($info[$_SESSION["sucursal"]]['_sv']+$info[$_SESSION["sucursal"]]['_mp'])/($info[$_SESSION["sucursal"]]['_maxSi']+$info[$_SESSION["sucursal"]]['_maxMp']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Rentabilidad &nbsp<?php echo /*$re*/ $info[$_SESSION["sucursal"]]['rel']."/".($info[$_SESSION["sucursal"]]['_maxSi']+$info[$_SESSION["sucursal"]]['_maxMp']);?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>
                <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                    aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_sv']/($info[$_SESSION["sucursal"]]['_maxSi']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text" style="color: white;">Seguros Individuales &nbsp<?php echo $info[$_SESSION["sucursal"]]['_sv']."/".$info[$_SESSION["sucursal"]]['_maxSi'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>
                <div class="progress mini-progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                    aria-valuenow="<?php echo ceil(($info[$_SESSION["sucursal"]]['_mp']/($info[$_SESSION["sucursal"]]['_maxMp']))*100);?>" aria-valuemin="0" aria-valuemax="100">
                        <span class="ct-progressBar-text">Monto Promedio &nbsp<?php echo $info[$_SESSION["sucursal"]]['_mp']."/".$info[$_SESSION["sucursal"]]['_maxMp'];?></span>
                        <div class="ct-progressBar-tr"></div>
                    </div>
                </div>



                </div>
                </div>
            <div class="tab-pane fade ranking" id="ranking7">
                            <div class="col-md-12">
              	<img class="img-responsive" style="margin: 10px auto;" src="assets/images/ranking_general.png" alt="ranking general" width="300">
              </div>
               <div class="table-responsive">
                <table class="table table-striped">
        <thead>
        <tr>
            <th># Posición</th>
            <th>Piloto</th>
            <th>Categoría</th>
            <th>Puntaje</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $lastval = 0;
        $pos = array_keys($ranking);
        $position = 1;

        for ($i=0;$i<13 && $i< count($ranking);$i++){
            if($lastval!=$info[$pos[$i]]["p"]){
                $lastval = $info[$pos[$i]]["p"];
                
            }$position = $i+1;
            echo '
            <tr>
                <td>'.$position.'</td>
                <td>'.$info[$pos[$i]]["s"].'</td>
                <td>'.$specs[$info[$pos[$i]]["c"]].'</td>
                <td>'.$info[$pos[$i]]["p"].'</td>
            </tr>';
           
        }
        ?>
        </tbody>
    </table>
				</div>
            </div>
            <div class="tab-pane fade" id="posicion7">
               <div class="col-md-12 mar-bot-20">
               	<div class="col-md-5 escuderia">
               		<h3>Puntaje General</h3>
               		<div class="puntaje"><?php echo $info[$_SESSION["sucursal"]]['p'];?></div><div>pts</div>
               	</div>
               	<div class="col-md-7">
					<div class="col-md-6">
		<p class="text-center">Si quieres mejorar tu posición ingresa a los pits</p>
		<a href="#pits7" role="tab" data-toggle="tab"><div style="width: 180px; height: 35px; line-height: 35px; background-color: #00539b; color: #ffffff; margin: auto; text-align: center;">INGRESA A LOS PITS</div></a>
	</div>
	<div class="col-md-6">
        <img src="assets/images/<?php echo $info[$_SESSION['sucursal']]['tipsImage'];?>" class="img-responsive" alt="Consejos en los pits">
	</div>
               	</div>
               </div>
                <!-- <p>
                    <?php echo nl2br(strip_tags($posicion_carrera));?>
                </p> -->
                <div class="col-lg-12">
               	<div class="col-lg-8">
               		<img class="img-responsive" src="assets/images/pos2.jpg" style="max-width: 100%" />
               	</div>
               	<div class="positiontable col-lg-4">
               		<strong><h5>POSICIONES</h5></strong>
               		<div class="table-responsive">
                    <table height="200">
                        <tbody><?php
$rf = $ranking_final[COLOR];
list($a1,$a2) = array_chunk($rf, ceil(count($rf) / 2),true);
$a3 = array_pad($a2,count($a1),array());
$a2 = $a3;
$k1 = array_keys($a1);
$k2 = array_keys($a2);
$pos = 1;$lp = NULL;$tp = 1;
for($i=0;$i<count($a1);$i++){
$n1 = $k1[$i];
$n2 = $k2[$i];
echo'<tr>
<td width="10">'.($i+1).'</td>
<td width="40">'.$info[$n1]['s'].'</td>
<td width="10" >'.((NULL != $info[$n2]['s'])?($i+1+count($a1)):'').'</td>
<td width="40">'.$info[$n2]['s'].'</td>
</tr>';
}?>
                        </tbody>
                    </table>
                </div>
               	</div>
               </div>
            </div>
            
            <div class="tab-pane fade" id="pits7">
            	<div class="row">
                <div class="col-md-3"><img src="assets/images/<?php echo $info[$_SESSION["sucursal"]]['imp2'];?>" alt="mecánico tips"></div>
                <div class="col-md-9">
	<div class="logo-v3"><img class="img-responsive" src="assets/images/logo-interior.png" alt="Grand Prix La Araucana"></div>
		<div class="escuderia">
			<h3 style="text-align: center; margin-bottom: 35px !important;">Sigue estos consejos</h3>
		</div>
		<p><?php echo $info[$_SESSION["sucursal"]]['t'];?></p>
	</div>
</div>
			</div>
            
            <div class="tab-pane fade" id="categoria7">
            <div class="logo-v3"><img class="img-responsive" src="assets/images/logo-interior.png" alt="Grand Prix La Araucana"></div>
            <div class="col-md-12" style="margin-bottom: 40px;">
            <div class="col-md-4"><a href="#catg1" class="open-popup-link"><img src="assets/images/formula1_catg.png" alt="formula1"></a></div>
            <div class="col-md-4"><a href="#catg5" class="open-popup-link"><img src="assets/images/indy_catg.png" alt="indy"></a></div>
            <div class="col-md-4"><a href="#catg2" class="open-popup-link"><img src="assets/images/lemans_catg.png" alt="lemans"></a></div>
            </div>
            <div>
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-4"><a href="#catg3" class="open-popup-link"><img src="assets/images/rally_catg.png" alt="rally"></a></div>
            
            <div class="col-md-4"><a href="#catg4" class="open-popup-link"><img src="assets/images/karting_catg.png" alt="karting"></a></div>
            <div class="col-md-2">&nbsp;</div>
            </div>
            </div>
            
            <!-- popup section -->
            <div id="catg1" class="catg-popup mfp-hide">
            	<div class="col-md-12">
              		<h4 class="categ1">Categoría Formula1</h4>
             		<!--
              		<img class="img-responsive" style="margin: 15px auto;" src="assets/images/ranking_general.png" alt="ranking general" width="300">
              		-->
                </div>
 		 		<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th># Posición</th>
                            <th>Piloto</th>
                            <th>Puntaje</th>
                        </tr>
                        </thead>
                        <tbody><?php
                        $pos = 1;$lp = NULL;$tp = 1;
                        foreach($ranking_final['azul'] as $_k=>$_v){


                            if($lp == NULL){
                                $lp = $_v;
                            }

                            if($_v != $lp){
                                $lp = $_v;
                                $pos = $tp;
                            }
                            $tp++;

                            echo'<tr><td>'.$pos.'</td><td>'.$info[$_k]['s'].'</td><td>'.$_v.'</td></tr>';
                        }?>
                        </tbody>
                    </table>
                </div>
			</div>
           
           	<div id="catg2" class="catg-popup mfp-hide">
            	<div class="col-md-12">
              		<h4 class="categ1">Categoría Gran Turismo</h4>
             		<!--
              		<img class="img-responsive" style="margin: 15px auto;" src="assets/images/ranking_general.png" alt="ranking general" width="300">
              		-->
                </div>
 		 		<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th># Posición</th>
                            <th>Piloto</th>
                            <th>Puntaje</th>
                        </tr>
                        </thead>
                        <tbody><?php
                        $pos = 1;$lp = NULL;$tp = 1;
                        foreach($ranking_final['rojo'] as $_k=>$_v){


                            if($lp == NULL){
                                $lp = $_v;
                            }

                            if($_v != $lp){
                                $lp = $_v;
                                $pos = $tp;
                            }
                            $tp++;

                            echo'<tr><td>'.$pos.'</td><td>'.$info[$_k]['s'].'</td><td>'.$_v.'</td></tr>';
                        }?>
                        </tbody>
                    </table>
                </div>
			</div>
           
           	<div id="catg3" class="catg-popup mfp-hide">
                <div class="col-md-12">
                <h4 class="categ1">Categoría Nascar</h4>
                </div>
                <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                <tr>
                <th># Posición</th>
                <th>Piloto</th>
                <th>Puntaje</th>
                </tr>
                </thead>
                <tbody><?php
                $pos = 1;$lp = NULL;$tp = 1;$p=0;
                foreach($ranking_final['verde'] as $_k=>$_v){

                if($lp == NULL){
                $lp = $_v;
                }
                if($_v != $lp){
                $lp = $_v;
                $pos = $tp;
                }
                $tp++;
                $p++;
                echo'<tr><td>'.$p.'</td><td>'.$info[$_k]['s'].'</td><td>'.$_v.'</td></tr>';
                }?>
                </tbody>
                </table>
                </div>
                </div>
           
           	<div id="catg4" class="catg-popup mfp-hide">
                <div class="col-md-12">
                    <h4 class="categ1">Categoría Karting</h4>
                    <!--
                    <img class="img-responsive" style="margin: 15px auto;" src="assets/images/ranking_general.png" alt="ranking general" width="300">
                    -->
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th># Posición</th>
                            <th>Piloto</th>
                            <th>Puntaje</th>
                        </tr>
                        </thead>
                        <tbody><?php
                        $pos = 1;$lp = NULL;$tp = 1;
                        foreach($ranking_final['naranja'] as $_k=>$_v){


                            if($lp == NULL){
                                $lp = $_v;
                            }

                            if($_v != $lp){
                                $lp = $_v;
                                $pos = $tp;
                            }
                            $tp++;

                            echo'<tr><td>'.$pos.'</td><td>'.$info[$_k]['s'].'</td><td>'.$_v.'</td></tr>';
                        }?>
                        </tbody>
                    </table>
                </div>
            </div>
           
           	<div id="catg5" class="catg-popup mfp-hide">
            	<div class="col-md-12">
              		<h4 class="categ1">Categoría IndyCar</h4>
             		<!--
              		<img class="img-responsive" style="margin: 15px auto;" src="assets/images/ranking_general.png" alt="ranking general" width="300">
              		-->
                </div>
 		 		<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th># Posición</th>
                            <th>Piloto</th>
                            <th>Puntaje</th>
                        </tr>
                        </thead>
                        <tbody><?php
                        $pos = 1;$lp = NULL;$tp = 1;
                        foreach($ranking_final['morado'] as $_k=>$_v){


                            if($lp == NULL){
                                $lp = $_v;
                            }

                            if($_v != $lp){
                                $lp = $_v;
                                $pos = $tp;
                            }
                            $tp++;

                            echo'<tr><td>'.$pos.'</td><td>'.$info[$_k]['s'].'</td><td>'.$_v.'</td></tr>';
                        }?>
                        </tbody>
                    </table>
                </div>
			</div>
            <!-- FIN popup section -->
            
            <div class="tab-pane fade" id="tipsgestion7">
            	<iframe src="tips.html" width="100%" height="400" style="overflow: scroll; border: none;"></iframe>
            </div>
            <div class="tab-pane fade" id="galeria7">
            	<iframe src="galeriaHome.html" width="100%" height="600" style="overflow: scroll; border: none;"></iframe>
            </div>
        </div>
    </div>
	   </div>
</div>
</section>

	</div>

<footer class="ct-u-backgroundDarkGray">
    <div class="ct-footerBottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>COPYRIGHT © <a href="http://www.laaraucana.cl/">LA ARAUCANA</a> 2017</p>
					<p class="legal2">Contenido exclusivo para trabajadores de La Araucana</p>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- JavaScripts -->

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="magnific-popup/jquery.magnific-popup.js"></script>
<script>
	$('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});
</script>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.placeholder.min.js"></script>
<script src="./assets/js/jquery.easing.1.3.js"></script>
<script src="./assets/js/device.min.js"></script>
<script src="./assets/js/jquery.browser.min.js"></script>
<script src="./assets/js/snap.min.js"></script>
<script src="./assets/js/jquery.appear.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/waypoints-sticky.min.js"></script>

<script src="./assets/js/main.js"></script>

<script src="./assets/js/ct-mediaSection/jquery.stellar.min.js"></script>
<script src="./assets/js/ct-mediaSection/init.js"></script>

<script src="./assets/js/charts/Chart.min.js"></script>
<script src="./assets/js/charts/init.js"></script>

<script src="./assets/js/flexslider/jquery.flexslider-min.js"></script>
<script src="./assets/js/flexslider/init.js"></script>

<script src="./assets/js/counter/jquery.countTo.js"></script>
<script src="./assets/js/counter/init.js"></script>

<script src="./assets/js/progressbars/init.js"></script>


</body>
</html>
