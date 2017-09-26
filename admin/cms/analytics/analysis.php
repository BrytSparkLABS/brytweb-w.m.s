<?php

include '../../sql.php';



$view = $_POST['id'];


if($view === '1'){


	$result = mysqli_query($con,"SELECT * FROM brytweb_wms_analytics WHERE page = 'homeland'");
$count = 0;

$android = 0;
$windows = 0;
$linux = 0;
$ios = 0;

$stnv = 0;
$fstv = 0;

$jan = 0;
$feb = 0;
$mar = 0;
$apr = 0;
$may = 0;
$jun = 0;
$jul = 0;
$aug = 0;
$sep = 0;
$oct = 0;
$nov = 0;
$dec = 0;

$sun = 0;
$mon = 0;
$tue = 0;
$wen = 0;
$thr = 0;
$fri = 0;
$sat = 0;

$chrome = 0;
$mozilla = 0;


$us = 0;
$uk = 0;


	  while($row = mysqli_fetch_array($result)){

      $dayofweek = $row['dayofweek'];
			$month = $row['month'];
      $count++;
	$newvs = $row['returnVISITOR'];

	if ($newvs  == '2') {
	$stnv++;
	}

	else if($newvs  == '1'){
	$fstv++;
	}


	$page = $row['page'];
	$os = $row['os'];
	if($os == 'Android'){
$android++;
	}
else if($os == 'Windows'){
$windows++;


	}
	else if($os == 'Linux'){
	$linux++;

		}
		else if($os == 'MacOS'){
		$ios++;


			}

if($month == 0){

	$jan++;
}
else if($month == 1){

	$feb++;
}
else if($month == 2){

	$mar++;
}
else if($month == 3){

	$apr++;
}
else if($month == 4){

	$may++;
}
else if($month == 5){

	$jun++;
}
else if($month == 6){

	$jul++;
}
else if($month == 7){

	$aug++;
}
else if($month == 8){

	$sep++;
}
else if($month == 9){

	$oct++;
}
else if($month == 10){

	$nov++;
}
else if($month == 11){

	$dec++;
}

if($dayofweek == 0){

	$sun++;
}
else if($dayofweek == 1){

	$mon++;
}
else if($dayofweek == 2){

	$tue++;
}
else if($dayofweek == 3){

	$wen++;
}
else if($dayofweek == 4){

	$thr++;
}
else if($dayofweek == 5){

	$fri++;
}
else if($dayofweek == 6){

	$sat++;
}



	$browser = $row['browser'];
if($browser == 'Chrome'){

$chrome++;

}
if($browser == 'Mozilla'){

$mozilla++;

}


	$thedate = $row['thedate'];
	$route = $row['route'];
	$language = $row['language'];
if($language == 'en-US'){

	$us++;
}
else if($language == 'en-UK'){

	$uk++;
}




	$timeonsite = $row['timeonsite'];
	$ip = $row['ip_address'];
	$country = $row['country'];




	}

	  mysqli_close($con);






$pageviews = $count;
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";



}

elseif($view === '2'){


		$result = mysqli_query($con,"SELECT * FROM brytweb_wms_analytics WHERE page = 'about'");
	$count = 0;

	$android = 0;
	$windows = 0;
	$linux = 0;
	$ios = 0;

	$stnv = 0;
	$fstv = 0;

	$jan = 0;
	$feb = 0;
	$mar = 0;
	$apr = 0;
	$may = 0;
	$jun = 0;
	$jul = 0;
	$aug = 0;
	$sep = 0;
	$oct = 0;
	$nov = 0;
	$dec = 0;

	$sun = 0;
	$mon = 0;
	$tue = 0;
	$wen = 0;
	$thr = 0;
	$fri = 0;
	$sat = 0;

	$chrome = 0;
	$mozilla = 0;


	$us = 0;
	$uk = 0;


		  while($row = mysqli_fetch_array($result)){

	      $dayofweek = $row['dayofweek'];
				$month = $row['month'];
	      $count++;
		$newvs = $row['returnVISITOR'];

		if ($newvs  == '2') {
		$stnv++;
		}

		else if($newvs  == '1'){
		$fstv++;
		}


		$page = $row['page'];
		$os = $row['os'];
		if($os == 'Android'){
	$android++;
		}
	else if($os == 'Windows'){
	$windows++;


		}
		else if($os == 'Linux'){
		$linux++;

			}
			else if($os == 'MacOS'){
			$ios++;


				}

	if($month == 0){

		$jan++;
	}
	else if($month == 1){

		$feb++;
	}
	else if($month == 2){

		$mar++;
	}
	else if($month == 3){

		$apr++;
	}
	else if($month == 4){

		$may++;
	}
	else if($month == 5){

		$jun++;
	}
	else if($month == 6){

		$jul++;
	}
	else if($month == 7){

		$aug++;
	}
	else if($month == 8){

		$sep++;
	}
	else if($month == 9){

		$oct++;
	}
	else if($month == 10){

		$nov++;
	}
	else if($month == 11){

		$dec++;
	}

	if($dayofweek == 0){

		$sun++;
	}
	else if($dayofweek == 1){

		$mon++;
	}
	else if($dayofweek == 2){

		$tue++;
	}
	else if($dayofweek == 3){

		$wen++;
	}
	else if($dayofweek == 4){

		$thr++;
	}
	else if($dayofweek == 5){

		$fri++;
	}
	else if($dayofweek == 6){

		$sat++;
	}



		$browser = $row['browser'];
	if($browser == 'Chrome'){

	$chrome++;

	}
	if($browser == 'Mozilla'){

	$mozilla++;

	}


		$thedate = $row['thedate'];
		$route = $row['route'];
		$language = $row['language'];
	if($language == 'en-US'){

		$us++;
	}
	else if($language == 'en-UK'){

		$uk++;
	}




		$timeonsite = $row['timeonsite'];
		$ip = $row['ip_address'];
		$country = $row['country'];




		}

		  mysqli_close($con);

$pageviews = $count;
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";


}


elseif($view === '3'){


		$result = mysqli_query($con,"SELECT * FROM brytweb_wms_analytics WHERE page = 'contact'");
	$count = 0;

	$android = 0;
	$windows = 0;
	$linux = 0;
	$ios = 0;

	$stnv = 0;
	$fstv = 0;

	$jan = 0;
	$feb = 0;
	$mar = 0;
	$apr = 0;
	$may = 0;
	$jun = 0;
	$jul = 0;
	$aug = 0;
	$sep = 0;
	$oct = 0;
	$nov = 0;
	$dec = 0;

	$sun = 0;
	$mon = 0;
	$tue = 0;
	$wen = 0;
	$thr = 0;
	$fri = 0;
	$sat = 0;

	$chrome = 0;
	$mozilla = 0;


	$us = 0;
	$uk = 0;


		  while($row = mysqli_fetch_array($result)){

	      $dayofweek = $row['dayofweek'];
				$month = $row['month'];
	      $count++;
		$newvs = $row['returnVISITOR'];

		if ($newvs  == '2') {
		$stnv++;
		}

		else if($newvs  == '1'){
		$fstv++;
		}


		$page = $row['page'];
		$os = $row['os'];
		if($os == 'Android'){
	$android++;
		}
	else if($os == 'Windows'){
	$windows++;


		}
		else if($os == 'Linux'){
		$linux++;

			}
			else if($os == 'MacOS'){
			$ios++;


				}

	if($month == 0){

		$jan++;
	}
	else if($month == 1){

		$feb++;
	}
	else if($month == 2){

		$mar++;
	}
	else if($month == 3){

		$apr++;
	}
	else if($month == 4){

		$may++;
	}
	else if($month == 5){

		$jun++;
	}
	else if($month == 6){

		$jul++;
	}
	else if($month == 7){

		$aug++;
	}
	else if($month == 8){

		$sep++;
	}
	else if($month == 9){

		$oct++;
	}
	else if($month == 10){

		$nov++;
	}
	else if($month == 11){

		$dec++;
	}

	if($dayofweek == 0){

		$sun++;
	}
	else if($dayofweek == 1){

		$mon++;
	}
	else if($dayofweek == 2){

		$tue++;
	}
	else if($dayofweek == 3){

		$wen++;
	}
	else if($dayofweek == 4){

		$thr++;
	}
	else if($dayofweek == 5){

		$fri++;
	}
	else if($dayofweek == 6){

		$sat++;
	}



		$browser = $row['browser'];
	if($browser == 'Chrome'){

	$chrome++;

	}
	if($browser == 'Mozilla'){

	$mozilla++;

	}


		$thedate = $row['thedate'];
		$route = $row['route'];
		$language = $row['language'];
	if($language == 'en-US'){

		$us++;
	}
	else if($language == 'en-UK'){

		$uk++;
	}




		$timeonsite = $row['timeonsite'];
		$ip = $row['ip_address'];
		$country = $row['country'];




		}

		  mysqli_close($con);

$pageviews = $count;
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";


}


elseif($view === '3'){


		$result = mysqli_query($con,"SELECT * FROM brytweb_wms_analytics WHERE page = 'contact'");
	$count = 0;

	$android = 0;
	$windows = 0;
	$linux = 0;
	$ios = 0;

	$stnv = 0;
	$fstv = 0;

	$jan = 0;
	$feb = 0;
	$mar = 0;
	$apr = 0;
	$may = 0;
	$jun = 0;
	$jul = 0;
	$aug = 0;
	$sep = 0;
	$oct = 0;
	$nov = 0;
	$dec = 0;

	$sun = 0;
	$mon = 0;
	$tue = 0;
	$wen = 0;
	$thr = 0;
	$fri = 0;
	$sat = 0;

	$chrome = 0;
	$mozilla = 0;


	$us = 0;
	$uk = 0;


		  while($row = mysqli_fetch_array($result)){

	      $dayofweek = $row['dayofweek'];
				$month = $row['month'];
	      $count++;
		$newvs = $row['returnVISITOR'];

		if ($newvs  == '2') {
		$stnv++;
		}

		else if($newvs  == '1'){
		$fstv++;
		}


		$page = $row['page'];
		$os = $row['os'];
		if($os == 'Android'){
	$android++;
		}
	else if($os == 'Windows'){
	$windows++;


		}
		else if($os == 'Linux'){
		$linux++;

			}
			else if($os == 'MacOS'){
			$ios++;


				}

	if($month == 0){

		$jan++;
	}
	else if($month == 1){

		$feb++;
	}
	else if($month == 2){

		$mar++;
	}
	else if($month == 3){

		$apr++;
	}
	else if($month == 4){

		$may++;
	}
	else if($month == 5){

		$jun++;
	}
	else if($month == 6){

		$jul++;
	}
	else if($month == 7){

		$aug++;
	}
	else if($month == 8){

		$sep++;
	}
	else if($month == 9){

		$oct++;
	}
	else if($month == 10){

		$nov++;
	}
	else if($month == 11){

		$dec++;
	}

	if($dayofweek == 0){

		$sun++;
	}
	else if($dayofweek == 1){

		$mon++;
	}
	else if($dayofweek == 2){

		$tue++;
	}
	else if($dayofweek == 3){

		$wen++;
	}
	else if($dayofweek == 4){

		$thr++;
	}
	else if($dayofweek == 5){

		$fri++;
	}
	else if($dayofweek == 6){

		$sat++;
	}



		$browser = $row['browser'];
	if($browser == 'Chrome'){

	$chrome++;

	}
	if($browser == 'Mozilla'){

	$mozilla++;

	}


		$thedate = $row['thedate'];
		$route = $row['route'];
		$language = $row['language'];
	if($language == 'en-US'){

		$us++;
	}
	else if($language == 'en-UK'){

		$uk++;
	}




		$timeonsite = $row['timeonsite'];
		$ip = $row['ip_address'];
		$country = $row['country'];




		}

		  mysqli_close($con);

$pageviews = $count;
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";


}




elseif($view === '4'){


		$result = mysqli_query($con,"SELECT * FROM brytweb_wms_analytics WHERE page = 'blogindex'");
	$count = 0;

	$android = 0;
	$windows = 0;
	$linux = 0;
	$ios = 0;

	$stnv = 0;
	$fstv = 0;

	$jan = 0;
	$feb = 0;
	$mar = 0;
	$apr = 0;
	$may = 0;
	$jun = 0;
	$jul = 0;
	$aug = 0;
	$sep = 0;
	$oct = 0;
	$nov = 0;
	$dec = 0;

	$sun = 0;
	$mon = 0;
	$tue = 0;
	$wen = 0;
	$thr = 0;
	$fri = 0;
	$sat = 0;

	$chrome = 0;
	$mozilla = 0;


	$us = 0;
	$uk = 0;


		  while($row = mysqli_fetch_array($result)){

	      $dayofweek = $row['dayofweek'];
				$month = $row['month'];
	      $count++;
		$newvs = $row['returnVISITOR'];

		if ($newvs  == '2') {
		$stnv++;
		}

		else if($newvs  == '1'){
		$fstv++;
		}


		$page = $row['page'];
		$os = $row['os'];
		if($os == 'Android'){
	$android++;
		}
	else if($os == 'Windows'){
	$windows++;


		}
		else if($os == 'Linux'){
		$linux++;

			}
			else if($os == 'MacOS'){
			$ios++;


				}

	if($month == 0){

		$jan++;
	}
	else if($month == 1){

		$feb++;
	}
	else if($month == 2){

		$mar++;
	}
	else if($month == 3){

		$apr++;
	}
	else if($month == 4){

		$may++;
	}
	else if($month == 5){

		$jun++;
	}
	else if($month == 6){

		$jul++;
	}
	else if($month == 7){

		$aug++;
	}
	else if($month == 8){

		$sep++;
	}
	else if($month == 9){

		$oct++;
	}
	else if($month == 10){

		$nov++;
	}
	else if($month == 11){

		$dec++;
	}

	if($dayofweek == 0){

		$sun++;
	}
	else if($dayofweek == 1){

		$mon++;
	}
	else if($dayofweek == 2){

		$tue++;
	}
	else if($dayofweek == 3){

		$wen++;
	}
	else if($dayofweek == 4){

		$thr++;
	}
	else if($dayofweek == 5){

		$fri++;
	}
	else if($dayofweek == 6){

		$sat++;
	}



		$browser = $row['browser'];
	if($browser == 'Chrome'){

	$chrome++;

	}
	if($browser == 'Mozilla'){

	$mozilla++;

	}


		$thedate = $row['thedate'];
		$route = $row['route'];
		$language = $row['language'];
	if($language == 'en-US'){

		$us++;
	}
	else if($language == 'en-UK'){

		$uk++;
	}




		$timeonsite = $row['timeonsite'];
		$ip = $row['ip_address'];
		$country = $row['country'];




		}

		  mysqli_close($con);

$pageviews = $count;
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";


}


elseif($view === '5'){


		$result = mysqli_query($con,"SELECT * FROM brytweb_wms_analytics WHERE page = 'portfolio'");
	$count = 0;

	$android = 0;
	$windows = 0;
	$linux = 0;
	$ios = 0;

	$stnv = 0;
	$fstv = 0;

	$jan = 0;
	$feb = 0;
	$mar = 0;
	$apr = 0;
	$may = 0;
	$jun = 0;
	$jul = 0;
	$aug = 0;
	$sep = 0;
	$oct = 0;
	$nov = 0;
	$dec = 0;

	$sun = 0;
	$mon = 0;
	$tue = 0;
	$wen = 0;
	$thr = 0;
	$fri = 0;
	$sat = 0;

	$chrome = 0;
	$mozilla = 0;


	$us = 0;
	$uk = 0;


		  while($row = mysqli_fetch_array($result)){

	      $dayofweek = $row['dayofweek'];
				$month = $row['month'];
	      $count++;
		$newvs = $row['returnVISITOR'];

		if ($newvs  == '2') {
		$stnv++;
		}

		else if($newvs  == '1'){
		$fstv++;
		}


		$page = $row['page'];
		$os = $row['os'];
		if($os == 'Android'){
	$android++;
		}
	else if($os == 'Windows'){
	$windows++;


		}
		else if($os == 'Linux'){
		$linux++;

			}
			else if($os == 'MacOS'){
			$ios++;


				}

	if($month == 0){

		$jan++;
	}
	else if($month == 1){

		$feb++;
	}
	else if($month == 2){

		$mar++;
	}
	else if($month == 3){

		$apr++;
	}
	else if($month == 4){

		$may++;
	}
	else if($month == 5){

		$jun++;
	}
	else if($month == 6){

		$jul++;
	}
	else if($month == 7){

		$aug++;
	}
	else if($month == 8){

		$sep++;
	}
	else if($month == 9){

		$oct++;
	}
	else if($month == 10){

		$nov++;
	}
	else if($month == 11){

		$dec++;
	}

	if($dayofweek == 0){

		$sun++;
	}
	else if($dayofweek == 1){

		$mon++;
	}
	else if($dayofweek == 2){

		$tue++;
	}
	else if($dayofweek == 3){

		$wen++;
	}
	else if($dayofweek == 4){

		$thr++;
	}
	else if($dayofweek == 5){

		$fri++;
	}
	else if($dayofweek == 6){

		$sat++;
	}



		$browser = $row['browser'];
	if($browser == 'Chrome'){

	$chrome++;

	}
	if($browser == 'Mozilla'){

	$mozilla++;

	}


		$thedate = $row['thedate'];
		$route = $row['route'];
		$language = $row['language'];
	if($language == 'en-US'){

		$us++;
	}
	else if($language == 'en-UK'){

		$uk++;
	}




		$timeonsite = $row['timeonsite'];
		$ip = $row['ip_address'];
		$country = $row['country'];




		}

		  mysqli_close($con);

$pageviews = $count;
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";


}




elseif($view === '6'){


		$result = mysqli_query($con,"SELECT * FROM brytweb_wms_analytics WHERE page = 'store'");
	$count = 0;

	$android = 0;
	$windows = 0;
	$linux = 0;
	$ios = 0;

	$stnv = 0;
	$fstv = 0;

	$jan = 0;
	$feb = 0;
	$mar = 0;
	$apr = 0;
	$may = 0;
	$jun = 0;
	$jul = 0;
	$aug = 0;
	$sep = 0;
	$oct = 0;
	$nov = 0;
	$dec = 0;

	$sun = 0;
	$mon = 0;
	$tue = 0;
	$wen = 0;
	$thr = 0;
	$fri = 0;
	$sat = 0;

	$chrome = 0;
	$mozilla = 0;


	$us = 0;
	$uk = 0;


		  while($row = mysqli_fetch_array($result)){

	      $dayofweek = $row['dayofweek'];
				$month = $row['month'];
	      $count++;
		$newvs = $row['returnVISITOR'];

		if ($newvs  == '2') {
		$stnv++;
		}

		else if($newvs  == '1'){
		$fstv++;
		}


		$page = $row['page'];
		$os = $row['os'];
		if($os == 'Android'){
	$android++;
		}
	else if($os == 'Windows'){
	$windows++;


		}
		else if($os == 'Linux'){
		$linux++;

			}
			else if($os == 'MacOS'){
			$ios++;


				}

	if($month == 0){

		$jan++;
	}
	else if($month == 1){

		$feb++;
	}
	else if($month == 2){

		$mar++;
	}
	else if($month == 3){

		$apr++;
	}
	else if($month == 4){

		$may++;
	}
	else if($month == 5){

		$jun++;
	}
	else if($month == 6){

		$jul++;
	}
	else if($month == 7){

		$aug++;
	}
	else if($month == 8){

		$sep++;
	}
	else if($month == 9){

		$oct++;
	}
	else if($month == 10){

		$nov++;
	}
	else if($month == 11){

		$dec++;
	}

	if($dayofweek == 0){

		$sun++;
	}
	else if($dayofweek == 1){

		$mon++;
	}
	else if($dayofweek == 2){

		$tue++;
	}
	else if($dayofweek == 3){

		$wen++;
	}
	else if($dayofweek == 4){

		$thr++;
	}
	else if($dayofweek == 5){

		$fri++;
	}
	else if($dayofweek == 6){

		$sat++;
	}



		$browser = $row['browser'];
	if($browser == 'Chrome'){

	$chrome++;

	}
	if($browser == 'Mozilla'){

	$mozilla++;

	}


		$thedate = $row['thedate'];
		$route = $row['route'];
		$language = $row['language'];
	if($language == 'en-US'){

		$us++;
	}
	else if($language == 'en-UK'){

		$uk++;
	}




		$timeonsite = $row['timeonsite'];
		$ip = $row['ip_address'];
		$country = $row['country'];




		}

		  mysqli_close($con);

$pageviews = $count;
$bouncerate = "";
$source = "";
$sesduration = "";
$nvsr = "";


}






echo'<h3>Total Page views - '.$pageviews.'</h3>';




	echo '
<div class="row">
<div class="col-md-5">

	<h4>New VS Returning</h4>';
	echo '<div id="canvas-holder2">
				<canvas id="chart-area2" width="200" height="200"/>
			</div>


		<script>

			var pieData2 = [
					{
						value: '.$fstv.',
						color:"#F7464A",
						highlight: "#FF5A5E",
						label: "New"
					},
					{
						value:'.$stnv.',
						color: "#46BFBD",
						highlight: "#5AD3D1",
						label: "Returning"
					}
				];

	$(document).ready(function() {

		var ctx2 = document.getElementById("chart-area2").getContext("2d");
			window.myPie = new Chart(ctx2).Pie(pieData2);
		});


		</script>

</div>
		';




echo '
<div class="col-md-5">

<h4>Views by Operating system</h4>';
echo '<div id="canvas-holder">
			<canvas id="chart-area" width="200" height="200"/>
		</div>


	<script>

		var pieData = [
				{
					value: '.$windows.',
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Windows"
				},
				{
					value:'.$android.',
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Android"
				},
				{
					value: '.$ios.',
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "IOS"
				},
				{
					value: '.$linux.',
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Linux"
				}
			];

$(document).ready(function() {

	var ctx = document.getElementById("chart-area").getContext("2d");
		window.myPie = new Chart(ctx).Pie(pieData);
	});


	</script>

</div>
</div>
	';


		echo '
	<div class="row">
	<div class="col-md-5">

		<h4>Views by language</h4>';
		echo '<div>
					<canvas id="chartlanguage" width="200" height="200"/>
				</div>


			<script>

				var pieData2 = [
						{
							value: '.$us.',
							color:"#F7464A",
							highlight: "#FF5A5E",
							label: "en-US"
						},
						{
							value:'.$uk.',
							color: "#46BFBD",
							highlight: "#5AD3D1",
							label: "en-UK"
						}
					];

		$(document).ready(function() {

			var ctx2 = document.getElementById("chartlanguage").getContext("2d");
				window.myPie = new Chart(ctx2).Pie(pieData2);
			});


			</script>

	</div>
			';




	echo '
	<div class="col-md-5">

	<h4>Views by Browser</h4>';
	echo '<div>
				<canvas id="chartbrowsers" width="200" height="200"/>
			</div>


		<script>

			var pieData = [
					{
						value: '.$chrome.',
						color:"#F7464A",
						highlight: "#FF5A5E",
						label: "Chrome"
					},
					{
						value:'.$mozilla.',
						color: "#46BFBD",
						highlight: "#5AD3D1",
						label: "Mozilla"
					}
				];

	$(document).ready(function() {

		var ctx = document.getElementById("chartbrowsers").getContext("2d");
			window.myPie = new Chart(ctx).Pie(pieData);
		});


		</script>

	</div></div>
		';








	echo '
	<div style="width:50%">
	<h4>Views by week day</h4>
			<div>
				<canvas id="canvasweek" height="450" width="600"></canvas>
			</div>
		</div>


	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : ["Sunday","Monday","Tuesday","Wendsday","Thurday","Friday","Saturday"],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : ['.$sun.','.$mon.','.$tue.','.$wen.','.$thr.','.$fri.','.$sat.']
				}
			]

		}

	$(document).ready(function() {
		var ctx = document.getElementById("canvasweek").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	});


	</script>';






echo '
<div style="width:80%">
<h4>Views by month</h4>
		<div>
			<canvas id="canvas2" height="450" width="600"></canvas>
		</div>
	</div>


<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	var lineChartData = {
		labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
		datasets : [
			{
				label: "My First dataset",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : ['.$jan.','.$feb.','.$mar.','.$apr.','.$may.','.$jun.','.$jul.','.$aug.','.$sep.','.$oct.','.$nov.','.$dec.']
			}
		]

	}

$(document).ready(function() {
	var ctx = document.getElementById("canvas2").getContext("2d");
	window.myLine = new Chart(ctx).Line(lineChartData, {
		responsive: true
	});
});


</script>';


echo '<div style="width:30%">
			<canvas id="canvas-ref" height="450" width="450"></canvas>
		</div>


	<script>
	var radarChartData = {
		labels: ["Google", "Bing", "Facebook", "Twitter", "Youtube", "Instagram", "LinkedIn"],
		datasets: [
			{
				label: "My First dataset",
				fillColor: "rgba(220,220,220,0.2)",
				strokeColor: "rgba(220,220,220,1)",
				pointColor: "rgba(220,220,220,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				data: [65,59,90,81,56,55,40]
			},
			{
				label: "My Second dataset",
				fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,205,1)",
				data: [28,48,40,19,96,27,100]
			}
		]
	};

	$(document).ready(function() {
		window.myRadar = new Chart(document.getElementById("canvas-ref").getContext("2d")).Radar(radarChartData, {
			responsive: true
		});
	});

	</script>';




console.log($analytics['about'])
 ?>
