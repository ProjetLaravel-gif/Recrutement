
<!DOCTYPE HTML>
<html>
<head>

    @if(isset($stats))

          <?php 
 $janvier=0;
 $février=0;
 $mars=0;
 $avril=0;
 $mai=0;
 $juin=0;
 $juillet=0;
 $aout=0;
$septembre=0;
 $octobre=0;
 $novembre=0;
 $decembre =0;
  

  //  print_r($stats);
          $row = count( $stats );
      //    echo "row  : ".$row."<br>";

    for ($i=0; $i < $row  ; $i++) { 
        # code...
  
          $data =  $stats[$i]->date; 
          $data2 ='<br>'.$stats[$i]->intitule ;
   //        echo $data.'<br>';
     //      echo $data2.'<br>';
           $mois = substr($data ,3,-5);


   if($mois ==='01') $janvier++;
   if($mois ==='02') $février++;
   if($mois ==='03') $mars++;
   if($mois ==='04') $avril++;
   if($mois ==='05') $mai++;
   if($mois ==='06') $juin++;
   if($mois ==='07') $juillet++;
   if($mois ==='08') $aout++;
   if($mois ==='09') $septembre++;
   if($mois ==='10') $octobre++;
   if($mois ==='11') $novembre++;
   if($mois ==='12') $decembre++;
  

   
    //    echo $mois .'<br>';
    }   
       ?>

        @endif                    



<script>

window.onload = function () {

var y1= <?php echo $janvier; ?> ;
var y2= <?php echo $février; ?> ;
var y3= <?php echo $mars; ?> ;
var y4= <?php echo $avril; ?> ;
var y5= <?php echo $mai; ?> ;
var y6= <?php echo $juin; ?> ;
var y7= <?php echo $juillet; ?> ;
var y8= <?php echo $aout; ?> ;
var y9= <?php echo $septembre; ?> ;
var y10= <?php echo $octobre; ?> ;
var y11= <?php echo $novembre; ?> ;
var y12= <?php echo $decembre; ?> ;

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    animationEnabled: true,
    title:{
        text: "nombres d'offres"   
    },
    axisX: {
        interval: 1,
        intervalType: "month",
        valueFormatString: "MMM"
    },
    axisY:{
        title: "nb offres ",
        valueFormatString: ""
    },
    data: [{        
        type: "line",
        markerSize: 12,
        xValueFormatString: "MMM, YYYY",
        yValueFormatString: "$###.#",
        dataPoints: [        
            { x: new Date(2020, 00, 1), y: y1, indexLabel: "gain", markerType: "triangle",  markerColor: "#6B8E23" },
            { x: new Date(2020, 01, 1), y: y2, indexLabel: "gain", markerType: "triangle",  markerColor: "#6B8E23" },
            { x: new Date(2020, 02, 1) , y: y3, indexLabel: "loss", markerType: "cross", markerColor: "#6B8E23" },
            { x: new Date(2020, 03, 1) , y: y4, indexLabel: "loss", markerType: "cross", markerColor: "#6B8E23" },
            { x: new Date(2020, 04, 1) , y: y5, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
            { x: new Date(2020, 05, 1) , y: y6, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
            { x: new Date(2020, 06, 1) , y: y7, indexLabel: "loss", markerType: "cross", markerColor: "#6B8E23" },
            { x: new Date(2020, 07, 1) , y: y8, indexLabel: "loss", markerType: "cross", markerColor: "#6B8E23" },
            { x: new Date(2020, 08, 1) , y: y9, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
            { x: new Date(2020, 09, 1) , y: y10, indexLabel: "loss", markerType: "cross", markerColor: "#6B8E23" },
            { x: new Date(2020, 10, 1) , y: y11, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
            { x: new Date(2020, 11, 1) , y: y12, indexLabel: "loss", markerType: "cross", markerColor: "#6B8E23" }
        ]
    }]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>