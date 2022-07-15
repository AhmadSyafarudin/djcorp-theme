<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script>
	$(document).ready(function(){if($("#jadwal-shalat").length){const a="https://api.banghasan.com/",s=`sholat/format/json/kota/kode/${KODE_KOTA}`,l=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${TANGGAL}`;try{$.ajax({url:a+s,type:"get",dataType:"json",crossDomain:!0,success:function(a){$("[data-name=kota]").html(a.kota[0].nama).removeClass("shimmer line-short")},error:function(a){$(".line-short").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".line-short").removeClass("shimmer line-short")}}),$.ajax({url:a+l,type:"get",dataType:"json",crossDomain:!0,success:function(a){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal]").html(`<span>${a.jadwal.data.tanggal}</span>`),$("[data-name=imsak]").html(`<span>${a.jadwal.data.imsak}</span>`),$("[data-name=subuh]").html(`<span>${a.jadwal.data.subuh}</span>`),$("[data-name=terbit]").html(`<span>${a.jadwal.data.terbit}</span>`),$("[data-name=dhuha]").html(`<span>${a.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur]").html(`<span>${a.jadwal.data.dzuhur}</span>`),$("[data-name=ashar]").html(`<span>${a.jadwal.data.ashar}</span>`),$("[data-name=maghrib]").html(`<span>${a.jadwal.data.maghrib}</span>`),$("[data-name=isya]").html(`<span>${a.jadwal.data.isya}</span>`)},error:function(a){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(a){console.log(a)}}});
	$(document).ready(function(){if($("#jadwal-shalat2").length){const b="https://api.banghasan.com/",t=`sholat/format/json/kota/kode/${KODE_KOTA}`,m=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${BESOK}`;try{$.ajax({url:b+m,type:"get",dataType:"json",crossDomain:!0,success:function(b){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal2]").html(`<span>${b.jadwal.data.tanggal}</span>`),$("[data-name=imsak2]").html(`<span>${b.jadwal.data.imsak}</span>`),$("[data-name=subuh2]").html(`<span>${b.jadwal.data.subuh}</span>`),$("[data-name=terbit2]").html(`<span>${b.jadwal.data.terbit}</span>`),$("[data-name=dhuha2]").html(`<span>${b.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur2]").html(`<span>${b.jadwal.data.dzuhur}</span>`),$("[data-name=ashar2]").html(`<span>${b.jadwal.data.ashar}</span>`),$("[data-name=maghrib2]").html(`<span>${b.jadwal.data.maghrib}</span>`),$("[data-name=isya2]").html(`<span>${b.jadwal.data.isya}</span>`)},error:function(b){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(b){console.log(b)}}});
</script>

<?php if (config_item('kode_kota')): ?>
	<script>
		const KODE_KOTA = "<?= config_item('kode_kota') ?>";
		const TANGGAL = "<?= date('Y-m-d') ?>";
		const BESOK = "<?= date("Y-m-d", mktime(0,0,0,date("n"),date("j")+1,date("Y"))) ?>";
	</script>
<?php else : ?>
	<script>
		const KODE_KOTA = "632";
		const TANGGAL = "<?= date('Y-m-d') ?>";
		const BESOK = "<?= date("Y-m-d", mktime(0,0,0,date("n"),date("j")+1,date("Y"))) ?>";
	</script>
<?php endif; ?>

<div class="jadwal-shalat" id="jadwal-shalat">
	<div class="relative-hidden">
		<div class="flexcenter mtb-15 color-1">
			<h4>Jadwal Shalat Wilayah <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?></h4>
		</div>
			<div class="mlr-min-5">
				<div class="column-3 mtb-5" style="margin:0;">
				<div class="plr-5">
					<div class="covid-box bgsoft color-1">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/mosque.svg") ?>"/>
						<h3>Imsak</h3>
						<span class="covid-angka flexcenter color-1" data-name="imsak"></span>
					</div>
				</div>
				</div>
				<div class="column-3 mtb-5" style="margin:0;">
				<div class="plr-5">
					<div class="covid-box bgsoft color-1">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/mosque.svg") ?>"/>
						<h3>Subuh</h3>
						<span class="covid-angka flexcenter color-1" data-name="subuh"></span>
					</div>
				</div>
				</div>
				<div class="column-3 mtb-5" style="margin:0;">
				<div class="plr-5">
					<div class="covid-box bgsoft color-1">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/mosque.svg") ?>"/>
						<h3>Dzuhur</h3>
						<span class="covid-angka flexcenter color-1" data-name="dzuhur"></span>
					</div>
				</div>
				</div>
				<div class="column-3 mtb-5" style="margin:0;">
				<div class="plr-5">
					<div class="covid-box bgsoft color-1">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/mosque.svg") ?>"/>
						<h3>Ashar</h3>
						<span class="covid-angka flexcenter color-1" data-name="ashar"></span>
					</div>
				</div>
				</div>
				<div class="column-3 mtb-5" style="margin:0;">
				<div class="plr-5">
					<div class="covid-box bgsoft color-1">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/mosque.svg") ?>"/>
						<h3>Maghrib</h3>
						<span class="covid-angka flexcenter color-1" data-name="maghrib"></span>
					</div>
				</div>
				</div>
				<div class="column-3 mtb-5" style="margin:0;">
				<div class="plr-5">
					<div class="covid-box bgsoft color-1">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/iconsvg/mosque.svg") ?>"/>
						<h3>Isya</h3>
						<span class="covid-angka flexcenter color-1" data-name="isya"></span>
					</div>
				</div>
				</div>
			</div>
		</div>
</div>