<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>


<div class="box-default bgwhite mb-10">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-map-marker"></i><h1 class="flexcenter"><?= $judul_widget ?></h1>
	</div>
	<div class="relative-row p-10">
		<div id="map_wilayah" class="height-boxhome"></div>
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
	//Style polygon
	var style_polygon = {
		stroke: true,
		color: '#FF0000',
		opacity: 1,
		weight: 2,
		fillColor: '#8888dd',
		fillOpacity: 0.5
	};
	var wilayah_desa = L.map('map_wilayah').setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var baseLayers = getBaseLayers(wilayah_desa, '<?= $this->setting->mapbox_key; ?>');

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(wilayah_desa);

	<?php if (!empty($data_config['path'])): ?>
		var polygon_desa = <?= $data_config['path']; ?>;
		var kantor_desa = L.polygon(polygon_desa, style_polygon).bindTooltip("Wilayah Desa").addTo(wilayah_desa);
		wilayah_desa.fitBounds(kantor_desa.getBounds());
	<?php endif; ?>
</script>