<html>
  <head>
    <?php
    include "koneksi.php";
    $sql=mysqli_query($conn, "SELECT * FROM tb_pemilihan");
    
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Nama Pasangan', 'Jumlah'],
          <?php
          while ($chart = mysqli_fetch_assoc($sql)) {
            echo "['".$chart['calon_kewatos']."',".$chart['hasil_vote']."],";
          }
          ?>
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
    
  </body>
</html>
