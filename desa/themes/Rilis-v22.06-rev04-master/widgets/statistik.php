<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<style type="text/css">
	.highcharts-xaxis-labels tspan {font-size: 8px;}
</style>


	<script type="text/javascript">
		$(function () {
			var chart_widget;
			$(document).ready(function () {
					// Build the chart
					chart_widget = new Highcharts.Chart({
						chart: {
							renderTo: 'container_widget',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Jumlah Penduduk'
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							}
						},
						xAxis: {
							categories:
							[
							<?php foreach($stat_widget as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'column',
							name: 'Populasi',
							data: [
							<?php foreach ($stat_widget as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['nama']?>',<?= $data['jumlah']?>],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						}]
					});
				});

		});
	</script>
	
	
	
<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-pie-chart"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-row p-10">
		<div id="container_widget" class="height-boxhome"></div>
	</div>
</div>	
	


