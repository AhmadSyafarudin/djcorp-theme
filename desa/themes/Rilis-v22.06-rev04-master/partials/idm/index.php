<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>


<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-male"></i><h1 class="flexcenter">IDM (Indek Desa Membangun)</h1>
	</div>
	<div class="relative-hidden plr-15 pt-15">
		<div class="width-default">
			<?php if ($idm->error_msg): ?>
				<div class="alert alert-danger">
				<?= $idm->error_msg ?>
				</div>
			<?php else: ?>
				<div class="row">
					<div class="col-lg-12 col-xs-12">
					<div class="row">
						<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-blue">
								<div class="inner">
									<h3><?= number_format($idm->SUMMARIES->SKOR_SAAT_INI, 4) ?></h3>
									<p>SKOR IDM SAAT INI</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
							</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-yellow">
									<div class="inner">
										<h3><?= $idm->SUMMARIES->STATUS ?></h3>
										<p>STATUS IDM</p>
									</div>
									<div class="icon">
										<i class="ion-ios-pulse-strong"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-red">
									<div class="inner">
										<h3><?= number_format($idm->SUMMARIES->SKOR_MINIMAL, 4) ?></h2>
										<p>SKOR IDM MINIMAL</p>
									</div>
									<div class="icon">
										<i class="ion ion-ios-pie"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-xs-6">
								<div class="small-box bg-green">
									<div class="inner">
										<h3><?= $idm->SUMMARIES->TARGET_STATUS ?></h3>
										<p>TARGET STATUS</p>
									</div>
									<div class="icon">
										<i class="ion ion-arrow-graph-up-right"></i>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-xs-12">
								<div class="table-responsive">
									<table class="table table-bordered table-striped dataTable table-hover">
										<tbody>
											<tr>
												<td width="30%">PROVINSI</td>
												<td width="1">:</td>
												<td><?= $idm->IDENTITAS[0]->nama_provinsi ?></td>
											</tr>
											<tr>
												<td>KABUPATEN</td>
												<td> : </td>
												<td><?= $idm->IDENTITAS[0]->nama_kab_kota ?></td>
											</tr>
											<tr>
												<td><?= strtoupper($this->setting->sebutan_kecamatan) ?></td>
												<td> : </td>
												<td><?= $idm->IDENTITAS[0]->nama_kecamatan ?></td>
											</tr>
											<tr>
												<td><?= strtoupper($this->setting->sebutan_desa) ?></td>
												<td> : </td>
												<td><?= $idm->IDENTITAS[0]->nama_desa ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<figure class="highcharts-figure">
							<div id="container"></div>
						</figure>
					</div>
					
					<div class="col-md-12">
									<figure class="highcharts-figure">
										<div id="container"></div>
									</figure>
								</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
								<thead class="bg-gray color-palette">
									<tr>
										<th rowspan="2" class="padat">NO</th>
										<th rowspan="2" >INDIKATOR IDM</th>
										<th rowspan="2" >SKOR</th>
										<th rowspan="2" >KETERANGAN</th>
										<th rowspan="2" nowrap>KEGIATAN YANG DAPAT DILAKUKAN</th>
										<th rowspan="2" >+NILAI</th>
										<th colspan="6" class="text-center">YANG DAPAT MELAKSANAKAN KEGIATAN</th>
									</tr>
									<tr>
										<th>PUSAT</th>
										<th>PROVINSI</th>
										<th>KABUPATEN</th>
										<th>DESA</th>
										<th>CSR</th>
										<th>LAINNYA</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($idm->ROW as $data): ?>
										<tr class="<?php empty($data->NO) && print 'judul'; ?> ">
											<td class="text-center"><?= $data->NO ?></td>
											<td style="min-width: 150px;"><?= $data->INDIKATOR ?></td>
											<td class="padat"><?= $data->SKOR ?></td>
											<td style="min-width: 250px;"><?= $data->KETERANGAN ?></td>
											<td><?= $data->KEGIATAN ?></td>
											<td class="padat"><?= $data->NILAI ?></td>
											<td><?= $data->PUSAT ?></td>
											<td><?= $data->PROV ?></td>
											<td><?= $data->KAB ?></td>
											<td><?= $data->DESA ?></td>
											<td><?= $data->CSR ?></td>
											<td><?= $data->SKOR[INDIKATOR['IKS 2020']] ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php if (! $idm->error_msg): ?>
	<script type="text/javascript">
		$(document).ready(function () {

			Highcharts.chart('container', {
			chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 45
				}
			},
			title: {
				text: 'Indeks Desa Membangun (IDM) <?= $tahun; ?>'
			},
			subtitle: {
				text: 'SKOR : IKS, IKE, IKL'
			},

			plotOptions: {
				series: {
					colorByPoint: true
				},
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					showInLegend: true,
					depth: 45,
					innerSize: 70,
					dataLabels: {
						enabled: true,
						format: '<b>{point.name}</b>: {point.y:,.2f} / {point.percentage:.1f} %'
					}
				}
			},
			series: [{
				name: 'SKOR',
						shadow: 1,
						border: 1,
				data: [
					['IKS', <?= $idm->ROW[35]->SKOR ?>],
					['IKE', <?= $idm->ROW[48]->SKOR ?>],
					['IKL', <?= $idm->ROW[52]->SKOR ?>]
				]
			}]
			});
		});
	</script>
<?php endif; ?>