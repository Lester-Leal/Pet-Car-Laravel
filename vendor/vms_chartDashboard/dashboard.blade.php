<?php
ob_start();
/**
 * DashboardBuilder
 *
 * @author Diginix Technologies www.diginixtech.com
 * Support <support@dashboardbuider.net> - https://www.dashboardbuilder.net
 * @copyright (C) 2016-2022 Dashboardbuilder.net
 * @version 5.8
 * @license: This code is under MIT license, you can find the complete information about the license here: https://dashboardbuilder.net/code-license
 */

include("inc/dashboard_dist.php");  // copy this file to inc folder 
?>
<!DOCTYPE html>
<html lang="en-us" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/gh/DashboardBuilder/cdn@master/v55/dashboard.min.js"></script> <!-- copy this file to assets/js folder -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DashboardBuilder/cdn@master/v55/bootstrap.min.css"> <!-- Bootstrap 5 CSS file, change the path accordingly -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DashboardBuilder/cdn@master/v55/font-awesome.min.css">  <!-- Font Awesome CSS file, change the path accordingly -->
	
<style>
@media screen and (min-width: 960px) {
.id0 {position:absolute; top:32px;}

}
.card-header {line-height:0.7em;}
#number {font-size:32px; font-weight:bold;text-align:center;margin-top:-10px;}
#number_legand {font-size:11px; text-align:center;}
.panel-body {  box-shadow: 5px 5px 35px  #e0e0e0;color:#787b80;}
.page-header {margin-top:-30px;}.dropdown-toggle{font-size:12px;line-height:12px;}
	.selectoption {font-size:12px !important;}
	.bs-searchbox > input {
	  font-size: 12px;
	  height:26px;
	}
</style>

</head>
<body> 

<?php
// for chart #1
$data = new dashboardbuilder(); 
$data->type[0]=  "bar";

$data->legacy = "";
$data->source =  "Database"; 
$data->rdbms =  "mysql"; 
$data->servername =  "localhost";
$data->username =  "root";
$data->password =  "";
$data->dbname =  "vms_db";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->filterlabel = "Filter";
$data->forecastlabel = "Forecast";
$data->filter = "false";
$data->xaxisSQL[0]=  "SELECT * FROM appointments LIMIT 10;";
$data->xaxisCol[0]=  "start";
$data->xsort[0]=  "ASC";
$data->xmodel[0]=  "MON";
$data->forecast[0]=  "0";
$data->yaxisSQL[0]=  "SELECT * FROM appointments LIMIT 10;";
$data->yaxisCol[0]=  "id";
$data->ysort[0]=  "";
$data->ymodel[0]=  "COUNT";

$data->name = "0";
$data->title = "Appointment Reports";
$data->orientation = "v";
$data->dropdown = "false";
$data->side = "left";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->filter = "false";
$data->forecastlabel = "Forecast";
$data->legposition = "";
$data->xaxistitle = "Month";
$data->yaxistitle = "Appointment Made";
$data->datalabel = "false";
$data->showgrid = "true";
$data->showline = "true";
$data->tablefontsize = "9";
$data->height = "333";
$data->width = "0";
$data->col = "0";

$data->plot = "dynamic";
$result[0] = $data->result(); 
function vms_chartDashboard($result) {?>
<div class="container-fluid main-container position-relative">
<div class="col col-md-12 col-lg-12 col-xs-12">
	<div class="row my-4">
	<div class="col-md-6 col-xs-12  id0">
	<div class="card-default shadow">
		<div class="card-body bgcolor">
		<span class="d-flex justify-content-start mx-2 font-color">Appointment Reports</span>
			<?php echo $result[0];?>
		</div>
	</div>
	</div>
        </div>
</div>
</div>
<?php 
}?>
</body>
