<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>



<script type="text/javascript">
	var chart;
	$(document).ready(function()
	{
		chart = new Highcharts.Chart(
		{
			chart:
			{
				renderTo: 'container',
				defaultSeriesType: 'column'
			},
			title:
			{
				text: 'Statistik Kelas Sosial'
			},
			xAxis:
			{
				title:
				{
					text: 'Kelas Sosial'
				},
				categories: [
				<?php $i=0;foreach($main as $data){$i++;?>
					<?= "'$data[nama]',";?>
				<?php }?>
				]
			},
			yAxis:
			{
				title:
				{
					text: 'Populasi'
				}
			},
			legend:
			{
				layout: 'vertical',
				backgroundColor: '#FFFFFF',
				align: 'left',
				verticalAlign: 'top',
				x: 100,
				y: 70,
				floating: true,
				shadow: true,
				enabled:false
			},
			tooltip:
			{
				formatter: function()
				{
					return ''+
					this.x +': '+ this.y +'';
				}
			},
			plotOptions:
			{
				series:
				{
					colorByPoint: true
				},
				column:
				{
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [
			{
				name: 'Populasi',
				data: [
				<?php foreach($main as $data){?>
					<?= $data['jumlah'].",";?>
					<?php }?>]
				}]
			});
	});
</script>

<?php
	echo "
	
	<div class=\"statistikstyle\">
	<div class=\"container-page mb-20\">
	<div class=\"headingpage border-grey-soft bg-white flexleft\">
		<div class=\"headingpage-image border-grey-soft flexcenter\">
		<img src="<?= base_url("$this->theme_folder/$this->theme/images/icon/statistik.svg") ?>"/>
		</div>
		<h2>Grafik Statistik Kependudukan berdasarkan Indeks Kemiskinan</h2>
	</div>
	<div class=\"box-article mb-30 bg-white\">
	<div class=\"relative-border p-15 border-grey-soft\">
		<div class=\"head-content\" style=\"text-align:center;\">
			<h1>Grafik Statistik Kependudukan berdasarkan Indeks Kemiskinan</h1>
		</div>
		<div id=\"container\"></div>
		<div id=\"contentpane\">
			<div class=\"tombol colorbiru\"></div>
			<div class=\"tombol colorungu\" id=\"chart\"></div>
		</div>
	
		<div class=\"heading-tabel flexcenter\" style=\"text-align:center;float:none;\">
			<h1>Tabel Statistik Kependudukan berdasarkan Indeks Kemiskinan</h1>
		</div>
		<div class=\"box-body\">
			<table class=\"table table-striped\">
				<thead>
				<tr>
					<th>#</th>
					<th>Kelompok</th>
					<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>";
				$i=0;
				foreach($main as $data){
					echo "<tr>
						<td class=\"angka\">".$data['id']."</td>
						<td>".$data['nama']."</td>
						<td class=\"angka\">".$data['jumlah']."</td>
					</tr>";
					$i=$i+$data['jumlah'];
				}
				echo "
				</tbody>
				<tfooter><tr><th colspan=\"2\" class=\"angka\">JUMLAH</th><th>".$i."</th></tr></tfooter>
			</table>";
		echo "
		</div>
	</div>	
	</div>
	</div>	
	</div>";
?>

