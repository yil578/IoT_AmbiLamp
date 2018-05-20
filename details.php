<!DOCTYPE html>
<html>
<head>
	<title>AmbiLamp</title>
	<link rel="stylesheet" type="text/css" href="assets/css/details.css">
</head>
<body>

  <?php
    include "header.php";
  ?>

  <!-- BUTTONS AND CANVASES(CHARTS) -->
  <input type="button" id="temp-btn" class="btn" value="View Temperature Chart" onclick="drawTemp()">
  <canvas id="temp-chart-long" class="chart" width="900" height="350" hidden></canvas>
  <input type="button" id="sound-btn" class="btn" value="View Sound Chart" onclick="drawSound()">
  <canvas id="sound-chart-long" class="chart" width="900" height="350" hidden></canvas>
  
  <!-- TABLE -->
  <div id="tables-container">
  	<div class="table">
	  	<table id="temp-table">
	  		<thead>
	  	      <tr>
		       <th>Time</th>
		       <th>Temperature</th>
			   <th>Deviation from Average</th>
			  </tr>
			</thead>
			<tbody>
	  		  <tr>
			    <td>I</td>
			    <td>am</td>
			    <td>a</td>
			  </tr>
			  <tr>
			    <td>table</td>
			    <td>for</td>
			    <td>demonstration</td>
			  </tr>
			  <tr>
			    <td>I</td>
			    <td>am</td>
			    <td>a</td>
			  </tr>
			  <tr>
			    <td>table</td>
			    <td>for</td>
			    <td>demonstration</td>
			  </tr>
			  <tr>
			    <td>I</td>
			    <td>am</td>
			    <td>a</td>
			  </tr>
			  <tr>
			    <td>table</td>
			    <td>for</td>
			    <td>demonstration</td>
			  </tr>
			  <tr>
			    <td>table</td>
			    <td>for</td>
			    <td>demonstration</td>
			  </tr>
			  <tr>
			    <td>table</td>
			    <td>for</td>
			    <td>demonstration</td>
			  </tr>
			  <tr>
			    <td>table</td>
			    <td>for</td>
			    <td>demonstration</td>
			  </tr>
			</tbody>
	 	</table>
	 </div>
  	<div class="table">
  		<table id="sound-table">
  		<thead>
  		  <tr>
		    <th>Time</th>
		    <th>Amplitude</th>
		    <th>Deviation from Average</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
		    <td>I</td>
		    <td>am</td>
		    <td>a</td>
		  </tr>
		  <tr>
		    <td>Centro comercial Moctezuma</td>
		    <td>Francisco Chang</td>
		    <td>Mexico</td>
		  </tr>
		  <tr>
		    <td>I</td>
		    <td>am</td>
		    <td>table</td>
		  </tr>
		  <tr>
		    <td>Island Trading</td>
		    <td>Helen Bennett</td>
		    <td>UK</td>
		  </tr>
		  <tr>
		    <td>I</td>
		    <td>am</td>
		    <td>a</td>
		  </tr>
		  <tr>
		    <td>Magazzini Alimentari Riuniti</td>
		    <td>Giovanni Rovelli</td>
		    <td>Italy</td>
		  </tr>
  		</table>
  	    </tbody>
  	</div>
  </div>
  <script type="text/javascript" src="assets/js/details.js"></script>
</body>
</html>



