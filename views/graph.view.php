<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Graphe Volley</title>
	<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
	<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
	<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	.canvas-element {
		width: 75%;
		margin: 150px auto 0;
	}
	@media screen and (max-width: 800px)
	{
		.canvas-element {
			width: 100%;
			margin-top: 50px;
		}
	}
	</style>
</head>

<body style="overflow-y: hidden;">
	<div class="canvas-element">
		<canvas id="canvas"></canvas>
	</div>

	<script>
		var config = {
			type: 'line',
			data: {
				labels: ['0','2018', '2019', '2020'],
				datasets: [{
		            hidden: false,
					label: 'Carrières Sur Seine',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						0,25,80,null
					],
					fill: false,
				}, {
		            hidden: true,
					label: 'Chatou',
					fill: false,
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					data: [
						null,0,0,null
					],
				}, {
		            hidden: true,
					label: 'Deux-Rives',
					fill: false,
					backgroundColor: window.chartColors.yellow,
					borderColor: window.chartColors.yellow,
					data: [
						0,0,40,0
					],
				}, {
					hidden: true,
					label: 'Les Essarts',
					fill: false,
					backgroundColor: window.chartColors.green,
					borderColor: window.chartColors.green,
					data: [
						0,25,20,0
					],
				}, {
					hidden: true,
					label: 'Feucherolles',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						0,87.5,60,0
					],
				}, {
					hidden: true,
					label: 'Fontenay',
					fill: false,
					backgroundColor: window.chartColors.purple,
					borderColor: window.chartColors.purple,
					data: [
						0,50,60,0
					],
				}, {
					hidden: true,
					label: 'Maisons-Laffitte',
					fill: false,
					backgroundColor: window.chartColors.grey,
					borderColor: window.chartColors.grey,
					data: [
						0,62.5,80,null
					],
				}, {
					hidden: true,
					label: 'Le Perray 1',
					fill: false,
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						null,0,60,0
					],
				}, {
					hidden: true,
					label: 'Le Perray 2',
					fill: false,
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					data: [
						null,0,40,0
					],
				}, {
					hidden: true,
					label: 'Pontchartain',
					fill: false,
					backgroundColor: window.chartColors.yellow,
					borderColor: window.chartColors.yellow,
					data: [
						0,50,100,null
					],
				}, {
					hidden: true,
					label: 'Rambouillet',
					fill: false,
					backgroundColor: window.chartColors.green,
					borderColor: window.chartColors.green,
					data: [
						0,100,0,0
					],
				}, {
					hidden: true,
					label: 'Trappes',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						0,75,null,null
					],
				}, {
					hidden: true,
					label: 'Le Perray',
					fill: false,
					backgroundColor: window.chartColors.purple,
					borderColor: window.chartColors.purple,
					data: [
						0,25,null,null
					],
				},
				{
					hidden: false,
					label: 'Carrières 1',
					fill: false,
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					data: [
						null,null,0,0
					],
				},
				{
					hidden: false,
					label: 'Carrières 2',
					fill: false,
					backgroundColor: window.chartColors.yellow,
					borderColor: window.chartColors.yellow,
					data: [
						null,null,0,0
					],
				},
				{
					hidden: true,
					label: 'Marly',
					fill: false,
					backgroundColor: window.chartColors.green,
					borderColor: window.chartColors.green,
					data: [
						null,null,0,0
					],
				},
				{
					hidden: true,
					label: 'Beynes',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						null,null,0,0
					],
				},
				{
					hidden: true,
					label: 'Houilles',
					fill: false,
					backgroundColor: window.chartColors.purple,
					borderColor: window.chartColors.purple,
					data: [
						null,null,0,0
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Évolution Des Équipes De Volley Loisir Du 78'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Années'
						}
					}],
					yAxes: [{
						ticks: {
                            max: 100,
                			min: 0,
                			stepSize: 10
		                },
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Points',
							value: 200,
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		if(screen.width < 800) {
			var mycanvas = document.getElementById('canvas');
			mycanvas.width = window.screen.width;
			mycanvas.height = window.screen.height;
		}

	</script>
</body>

</html>
