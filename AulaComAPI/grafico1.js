window.onload(carregarDados());
var nome1;
var usuarios;
var nome2;
var ongs;

function carregarDados(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){	
		if(xhr.readyState==4 && xhr.status==200){
            nome1  = formata(xhr.responseText);
            nome2  = formata2(xhr.responseText);
            ongs = parseInt(nome1);
            usuarios = parseInt(nome2);
        }
	}
	xhr.open("GET","get.php",true);
    xhr.send();

    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Usuarios',     usuarios],
          ['Ongs',      ongs]
        ]);

        var options = {
          title: 'Gráfico com banco',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }	
}

function formata(strDados){
    var objDados = JSON.parse(strDados);
    var ong = '';
    for(la of objDados['lista']){
        ong += la['(select count(idOng) from tbOng)'];
    }
    return ong;
}

function formata2(strDados){
    var objDados = JSON.parse(strDados);
    var user = '';
    for(la of objDados['lista']){
        user += la['(select count(idUsuario) from tbUsuario)'];
    }
    return user;
}