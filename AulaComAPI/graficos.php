<html>
    <head>
    <title>Gráficos (API's)</title>
    <!--LINK DO CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <!--FIM DO LINK DO CSS -->

    <!-- LINK PARA OS 2 PRIMEIROS GRÁFICOS -->
    <script type="text/javascript" src="loader.js"></script>
    <!-- LINK PARA OS 2 PRIMEIROS GRÁFICOS -->
   
    </head>

    <body>

       <div class="div1">
            <div id="piechart_3d" style="width: 100%; height: 100%;"></div>
        </div>
        
        <div class="div2">
            <div id="series_chart_div2" style="width: 100%; height: 100%;"></div>
        </div>

        <div class="div3">
            <div id="chart_div3" style="width: 100%; height: 100%;"></div>
        </div>

        <div class="div4">
            <div id="chart_div4" style="width: 100%; height: 100%;"></div>
        </div>
      

    </body>

</html>

<script src="grafico1.js"></script>

<!--CÓDIGOS GRÁFICOS 2 -->
<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawSeriesChart);

        function drawSeriesChart() {

        var data = google.visualization.arrayToDataTable([
            ['ID',           'Expectativa de vida',    'Média de altura',       'Sexo',      'N° População'],
            ['Brasil',            75.0,                    1.73,                'Homens',               209000000],
            ['Brasil',            75.0,                    1.61,                'Mulheres',             209000000],
            ['Indonésia',         71.0,                    1.58,                'Homens',               267000000],
            ['Indonésia',         71.0,                    1.47,                'Mulheres',             267000000],
            ['Holanda',           81.0,                    1.83,                'Homens',               17280000],
            ['Holanda',           81.0,                    1.70,                'Mulheres',             17280000]
        ]);

        var options = {
            title: 'Características de alguns países',
            hAxis: {title: 'Expectativa de vida'},
            vAxis: {title: 'Altura'},
            bubble: {textStyle: {fontSize: 12}}      };

        var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div2'));
        chart.draw(data, options);
        }
    </script>

</script>
<!-- FIM CÓDIGOS GRÁFICOS 2 -->

<!-- CÓDIGOS GRÁFICOS 3 -->
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Dólar', 'Euro'],
          ['2010',  1695,      2240],
          ['2013',  2345,      3213],
          ['2016',  3351,      3533],
          ['2019',  4109,      4588]
        ]);

        var options = {
          title: 'DÓLAR X EURO',
          hAxis: {title: 'ANO',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }
</script>
<!-- FIM CÓDIGOS GRÁFICOS 3 -->

<!-- CÓDIGOS GRÁFICOS 4 -->
<script type="text/javascript"> 

    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var data = google.visualization.arrayToDataTable([
            ['Cidade',                'Número estimado de habitantes',],
            ['São Paulo, 2020',      45919049],
            ['São Paulo, 2015',      43000000],
            ['São Paulo, 2010',      41223683],
            ['São Paulo, 2005',     39201179],
            ['São Paulo, 2000',     36974378],
            ['São Paulo, 1995',     33848251],
            ['São Paulo, 1990',     30783108]
  
        ]);

        var options = {
            title: 'População da cidade de São Paulo (1990 ATÉ 2020)',
            chartArea: {width: '50%'},
            hAxis: {
            title: 'Total População',
            minValue: 0
            },
            vAxis: {
            title: 'Cidade'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

        chart.draw(data, options);
        }
</script>















