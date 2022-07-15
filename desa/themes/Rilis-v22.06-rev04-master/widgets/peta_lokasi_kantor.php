<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>


<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-map-marker"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-row p-10">
		<div id="map_canvas" class="height-boxhome"></div>
	</div>
</div>


<script>
	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
		var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
		var zoom = <?=$data_config['zoom'] ?: 10?>;
	<?php else: ?>
		var posisi = [-1.0546279422758742,116.71875000000001];
		var zoom = 10;
	<?php endif; ?>

	var lokasi_kantor = L.map('map_canvas').setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var baseLayers = getBaseLayers(lokasi_kantor, '<?= $this->setting->mapbox_key; ?>');

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(lokasi_kantor);

	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
		var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
	<?php endif; ?>
</script>