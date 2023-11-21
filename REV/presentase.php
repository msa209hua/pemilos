<html>
  <head>
    <center>
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
          title: 'Hasil Voting Sementara Pemilihan Ketua OSIS dan Wakil Ketua OSIS Tahun Ajaran 2023-2024'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    </center>
    <meta http-equiv="refresh" content="600; URL=http://localhost/pemilos/rev/presentase.php" />
  </body>
</html>
