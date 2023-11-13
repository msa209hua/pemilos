<html>
  <head>
    <?php
    include "koneksi.php";
    $sql=mysqli_query($conn, "SELECT hasil_vote FROM tb_pemilihan WHERE calon_kewatos='Fasya-Sahla'");
    $sql2=mysqli_query($conn, "SELECT hasil_vote FROM tb_pemilihan WHERE calon_kewatos='Endriana-Deni'");
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Nama Pasangan', 'Jumlah'],
          ['Fasya-Sahla','<?$sql;?>'],
          ['Endriana-Deny','<?$sql2;?>']
        ]);

        var options = {
          title: 'Presentase'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <h3><?= $sql;?></h3>
  </body>
</html>
