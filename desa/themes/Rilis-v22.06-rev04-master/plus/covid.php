<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<?php if ($this->setting->covid_desa == 1): ?>
<?php
//API Local Data COVID19
$odpd = $covid[0]; //"Orang Dalam Pemantauan (ODP)" => "ODP",
$pdpd = $covid[1]; //"Pasien Dalam Pengawasan (PDP)" => "PDP",
$odr = $covid[2]; //"Orang Dalam Resiko (ODR)" => "ODR"
$otg = $covid[3]; //"Orang Tanpa Gejala (OTG)" => "OTG",
$positif = $covid[4]; //"Positif Covid-19" => "POSITIF",
?>
        <div class="covidstyle">
					<?php if ($this->setting->covid_desa) : ?>
					<div id="covid-desa">

						<div class="head-covid flexcenter color-2" style="margin-top:10px;">
							<h2 class="color-1">Perkembangan Covid 19<br/><?= strtoupper($this->setting->sebutan_desa . ' ' . $desa['nama_desa']); ?></h2>
						</div>
						<div class="covid-desa">
						<div class="mlr-min-5">
						<?php if(IS_PREMIUM) : ?>
							<?php foreach ($covid as $key => $val):
							if ($key >= 6) break;
						?>
							<div class="column-3 mtb-5">
							<div class="plr-5">
								<div class="covid-box bgsoft">
								<h2 class="flexcenter bgcolor1" style="height:50px;"><?= $val['nama']; ?></h2>
								<span class="covid-angka color-1 flexcenter"><?= number_format($val['jumlah']); ?></span>
								<p class="color-1">Orang</p>
								</div>
							</div>
							</div>
							<?php endforeach; ?>
							<div class="terdata">
								<span>Jumlah Terdata</span>
								<span><?= number_format($val['jumlah']); ?></span>
								<span class="small">Orang</span>
							</div>
						<?php else: ?>
							<?php foreach ($covid as $key => $val):
								if ($key >= 6) break;
							?>
								<div class="column-2 mtb-5">
									<div class="plr-5">
										<div class="covid-box bgsoft">
										<h2 class="flexcenter bgcolor1" style="height:50px;"><?= $val['nama']; ?></h2>
										<span class="covid-angka color-1 flexcenter"><?= number_format($val['jumlah']); ?></span>
										<p class="color-1">Orang</p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>         
						<?php endif; ?>
						</div>
						</div>
					</div>
					<?php endif ?>

        </div>
		<?php endif ?>
 </div>	
</div> 


<?php $this->load->view('head_tags_front') ?>
