<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $file = __DIR__ . '/../lapakhome/lapak.json'; ?>
<?php if(is_file($file)) : ?>
<?php $json = file_get_contents($file); ?>
<?php $array = json_decode($json, true); ?>
<?php if($array['aktif']) : ?>
<style>
.map {
  width:100%;
  height:70vh;
}
#qrcode .panel-body-lg {
  margin-right: 5px;
  margin-bottom: 20px;
  pointer-events: visiblePainted;
	pointer-events: auto;
  position: relative;
  z-index: 800;
}
.leaflet-popup-content {
  height: auto;
  width: 225px;
  overflow-y: scroll;
}
</style>
<div class="lapakhome pt-5">
	<div class="heading-module bggradient1 flexcenter">
	<i class="fa fa-shopping-cart"></i><h1 class="flexcenter">Lapak <?= ucwords($this->setting->sebutan_desa); ?></h1>
	</div>
	<div class="flex-container mlr-min-5">
		<?php shuffle($array['lapak']); foreach($array['lapak'] as $index => $product) : ?>
		<?php $hp = $array['multi'] ? $product['hp'] : $array['default_hp'] ?>
		<?php $link = $array['mode'] == 'hp' ? 'https://api.whatsapp.com/send?phone='.$hp.'&text=Saya Mau Pesan '.$product['produk'] : $product['link'] ?>
		<?php $gambar = base_url($this->theme_folder.'/'.$this->theme .'/lapakhome/foto/' . $product['gambar']) ?>
			<div class="flexitem-4 bgwhite">
				<div class="relative-hidden p-10">
					<?php
					$allowed = array('mp4', 'webm', 'ogg');
					$filename = pathinfo($gambar);
					$ext = $filename['extension'];
					$allowed_pic = array('jpg', 'png', 'jpeg');
					$filename_pic = pathinfo($gambar);
					$ext_pic = $filename['extension'];
					if (in_array($ext, $allowed)): ?>
						<div class="col-12 p-3 text-center">
							<object class="mw-100" height="210">
								<param name="src" value="<?= $gambar ?>">
								<param name="autoplay" value="false">
								<param name="controller" value="true">
								<param name="bgcolor" value="#333333">
								<embed type="mp4" src="<?= $gambar ?>" autostart="false" loop="false" controller="true" bgcolor="#333333"></embed>
							</object>
						</div>
						<?php elseif (in_array($ext_pic, $allowed_pic)): ?>
						<div class="image-default">
							<a data-fancybox="gallery" href="<?= $gambar ?>">
							<img src="<?= $gambar ?>" alt="<?= $product['produk'] ?>" loading="lazy">
							</a>
						</div>
						<?php else: ?>
						<div class="image-default">
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
							<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
						</div>
					<?php endif; ?>
					<div class="flexcenter mtb-5">
					<h3><?= $product['produk'] ?></h3>
					</div>
					<div class="harga-produk flexcenter">
						<?php
						if ($gambar) {
						$harga_produk = number_format($product['diskon']);
						$diskon = '<s>Rp. ' . number_format($product['harga']) . ',-</s></small>';
						} else {
						$harga_produk = number_format($product['harga']);
						}
						?>
						<p><span style="color:#ff0000;text-decoration: line-through red;"><?= $diskon; ?></span></p>
						<p><b>Rp. <?= $harga_produk; ?>,-</b></p>	
						
					</div>
				</div>
				<div class="link-produk flexcenter">
						<a title="Detail" data-remote="false" data-toggle="modal" data-target="#deskripsi<?= $product['id']; ?>"><div class="tombol bgcolor2 flexcenter"><i class="fa fa-info"></i></div></a>
						<a href="<?= $link ?>" rel='noopener noreferrer' target='_blank' title='WhatsApp'><div class="tombol bgcolor1 flexcenter"><i class="fa fa-shopping-cart"></i></div></a>
						<a title="Lokasi" data-remote="false" data-toggle="modal" data-target="#modalBesar<?= $product['id']; ?>"><div class="tombol bgorange flexcenter"><i class="fa fa-map-marker"></i></div></a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>	

<?php foreach($array['lapak'] as $index => $product) : ?>
<div class="modal fade" id="deskripsi<?= $product['id']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Detail Produk
				<div class="close-area flexcenter">
					<div class="close-button" data-dismiss="modal" aria-hidden="true">
					<svg x="0px" y="0px" viewBox="0 0 492 492">
					</div>
				</div>
			</div>
			<div class="modal-isi">
			<div class="withscroll">
			<div class="p-15">
				<div class="lapak-detail flexcenter" style="text-align:center;">
					<div>
					<h2 class="color-1"><?= $product['judul'] ?></h2>
					<h3 style="margin-top:10px">Harga : <font style="color:#ff0000; text-decoration: line-through #ff0000;"><?= $diskon; ?></font>&nbsp;&nbsp;<b class="color-1">Rp. <?= $harga_produk; ?>,-</b></h3>
					<p><?= $product['deskripsi'] ?></p>
					</div>
				</div>
			</div>
			</div>
			</div>

		</div>
	</div>
</div>
<?php endforeach; ?>

<script>
$(document).ready(function(){
<?php foreach($array['lapak'] as $index => $product) : ?>
<?php $gambar = base_url($this->theme_folder.'/'.$this->theme .'/lapakhome/gambar/' . $product['gambar']) ?>
  $('#modalBesar<?= $product['id']; ?>').on('shown.bs.modal', function(){
    var container = L.DomUtil.get('map<?= $product['id']; ?>'); if(container != null){ container._leaflet_id = null; }
    var map<?= $product['id']; ?> = L.map('map_canvas<?= $product['id']; ?>').setView([<?= $product['lat']; ?>,<?= $product['lng']; ?>], 15);
    var logo = L.icon({
      iconUrl: '<?= BASE_URL()?>assets/images/gis/point/fastfood.png',
      iconSize:     [32, 32], // size of the icon
      iconAnchor:   [16, 16], // point of the icon which will correspond to marker's location
      popupAnchor:  [-1,1] // point from which the popup should open relative to the iconAnchor
    });
    var foto = "<img src='<?= $gambar; ?>' class='mw-100' style='border-radius:1px;-moz-border-radius:3px;-webkit-border-radius:1px;width:100%;'/>";
    var info_tempat =
    '<div id="content">'
    + '<h6><b style="color:red"><center>' + <?=json_encode($product['produk'])?> + '</center></b></h6>'
    + '<?php $allowed = array("mp4", "webm", "ogg"); $filename = pathinfo($gambar); $ext = $filename["extension"]; $allowed_pic = array('jpg', 'png', 'jpeg');
    $filename_pic = pathinfo($gambar);
    $ext_pic = $filename['extension']; if (in_array($ext, $allowed)): ?>'
    + '<div class="col-12 p-3 text-center">'
    + '    <object class="mw-100">'
    + '      <param name="src" value="<?= $gambar; ?>">'
    + '      <param name="autoplay" value="false">'
    + '      <param name="controller" value="true">'
    + '      <param name="bgcolor" value="#333333">'
    + '      <embed type="mp4" src="<?= $gambar; ?>" autostart="false" loop="false" controller="true" bgcolor="#333333"></embed>'
    + '    </object>'
    + '</div>'
    + '<?php elseif (in_array($ext_pic, $allowed_pic)): ?>'
    + '<div id="bodyContent" class="mb-2 text-center">'+ foto
    + '</div>'
    + '<?php else: ?>'
    + '<div class="col-12 p-3 text-center">'
    + '<iframe class="mw-100" src="<?= $gambar; ?>" frameborder="no" loading="lazy"></iframe>'
    + '</div>'
    + '<?php endif; ?>'
    + '<table>'
    + '<tr>'
    + '<td width="60px" valign="top">Produksi</td>'
    + '<td width="10px" valign="top">:</td>'
    + '<td><b style="color:red">' + <?=json_encode($product['judul'])?> + '</b></td>'
    + '</tr>'
    + '<tr>'
    + '<td width="60px">Harga</td>'
    + '<td width="10px">:</td>'
    + '<td><s>Rp. ' + <?=json_encode($product['harga'])?> + ',-</s> Rp. ' + <?=json_encode($product['diskon'])?> + ',-</td>'
    + '</tr>'
    + '<tr>'
    + '<td width="60px" valign="top">Alamat</td>'
    + '<td width="10px" valign="top">:</td>'
    + '<td>' + <?=json_encode($product['alamat'])?> + '</td>'
    + '</tr>'
    + '<tr>'
    + '<td width="60px">Kontak</td>'
    + '<td width="10px">:</td>'
    + '<td>' + <?=json_encode(substr_replace($product['hp'],'0',0,2))?> + '</td>'
    + '</tr>'
    + '<tr>'
    + '<td width="60px">Tujuan</td>'
    + '<td width="10px">:</td>'
    + '<td><a style="color:#fff;" class="btn btn-sm btn-danger danger-gradient mt-0" target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/dir//'+<?= $product['lat']; ?> +','+<?= $product['lng']; ?>+'/"><i class="fa fa-map-marker"></i> Arah ke Lokasi</a></td>'
    + '</tr>'
    + '</table>'
    + '</div>';
    var lapakmark = L.marker([<?= $product['lat']; ?>,<?= $product['lng']; ?>],{icon:logo}).addTo(map<?= $product['id']; ?>)
    .bindPopup(info_tempat).openPopup();
    L.control.scale().addTo(map<?= $product['id']; ?>);
  	var baseLayers = getBaseLayers(map<?= $product['id']; ?>, '<?=$this->setting->google_key?>');
  	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(map<?= $product['id']; ?>);
    map<?= $product['id']; ?>.invalidateSize();
  });
  <?php endforeach; ?>
});
</script>
<?php endif ?>
<?php endif ?>
