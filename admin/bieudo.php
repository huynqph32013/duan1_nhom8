<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:1000px; height:900px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
    ['Danh Mục', 'Số Lượng Sản Phẩm'],
    <?php
    $tong = count($bieudo);
    $i = 1; 
    ?>
 
  <?php foreach($bieudo as $value){
     if($i==$tong){
        $dau = "";
    }else{
        $dau = ",";
    }
  echo "['".$value['tendm']."',".$value['sl']."]".$dau;
  $i+=1;
}
  ?>
//   ['Italy',54.8],
//   ['France',48.6],
//   ['Spain',44.4],
//   ['USA',23.9],
//   ['Argentina',14.5]
]);

// Set Options
const options = {
  title:'Biểu đồ danh mục'
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>


