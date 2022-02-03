<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Alunos', 'Idade'],

          <?php 
            include 'conexao.php';
            $sql = " SELECT * FROM aluno;";
            $consulta = mysqli_query($conexao, $sql);

            while ($dados = mysqli_fetch_array($consulta)){

                $nome = $dados['nomeAluno'];
                $idade = $dados['idadeAluno'];?>
            
            ['<?php echo $nome ?>', <?php echo $idade ?>],
            
            <?php } ?>
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>
