!DOCTYPE HTML>
<html>
<head>

  @if(isset($stat))


  <?php 

 $tlemcen=0;
 $oran=0;
 $sba=0;
 $alger=0;
 $bejaia=0;
 $mestghanem=0;
 $aintemouchent=0;

   $row = count( $stats );
   for ($i=0; $i < $row  ; $i++) { 
        # code...
  
          $data =  $stats[$i]->wilaya; 
          // echo $data;
          $wilaya = substr($data ,3,-5);

   if($wilaya ==='tlemcen') $tlemcen++;
   if($wilaya ==='oran') $oran++;
   if($wilaya ==='sba') $sba++;
   if($wilaya ==='alger') $alger++;
   if($wilaya ==='bejaia') $bejaia++;
   if($wilaya ==='mestghanem') $mestghanem++;
   if($wilaya ==='aintemouchent') $aintemouchent++;
   
      }    
   
   ?>

@endif 


<script>
	
 window.onload = function () {

var y1= <?php echo $tlemcen; ?> ;
var y2= <?php echo $oran; ?> ;
var y3= <?php echo $sba; ?> ;
var y4= <?php echo $alger; ?> ;
var y5= <?php echo $bejaia; ?> ;
var y6= <?php echo $mestghanem; ?> ;
var y7= <?php echo $aintemouchent; ?> ;


var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "nb offres par wilaya"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}%</strong>",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			{ y: y1, name: "tlemcen", exploded: true },
			{ y: y2, name: "oran" },
			{ y: y3, name: "sba" },
			{ y: y4, name: "alger" },
			{ y: y5, name: "bejaia" },
			{ y: y6, name: "mestghanem" },
			{ y: y7, name: "aintemouchent"}
		]
	}]
});
chart.render();
}

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 