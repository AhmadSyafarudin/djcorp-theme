<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $file = __DIR__ . '/../linkplus/link.json'; ?>
<?php if(is_file($file)) : ?>
<?php $json = file_get_contents($file); ?>
<?php $array = json_decode($json, true); ?>
<?php if($array['aktif']) : ?>

<div class="relative-hidden ptb-5">
	<div class="iconmenu">
		<div class="flex-container mlr-min-5" style="margin:0 auto;text-align:center;">
			<?php shuffle($array['linkplus']); foreach($array['linkplus'] as $index => $forlink) : ?>
				<div class="flexitem-6 bgwhite">
					<div class="p-10">
						<?php $gambar = base_url($this->theme_folder.'/'.$this->theme .'/linkplus/icon/' . $forlink['gambar']) ?>
						<a href="<?= $forlink['link'] ?>" target="blank">
						<div class="side-iconhome">
							<?php
							$allowed = array('mp4', 'webm', 'ogg');
							$filename = pathinfo($gambar);
							$ext = $filename['extension'];
							$allowed_pic = array('jpg', 'png', 'jpeg');
							$filename_pic = pathinfo($gambar);
							$ext_pic = $filename['extension'];
							if (in_array($ext, $allowed)): ?>
				
							<?php elseif (in_array($ext_pic, $allowed_pic)): ?>
								<img src="<?= $gambar ?>">
							<?php else: ?>
								<img src="<?= gambar_desa($desa['logo']);?>"/>
							<?php endif; ?>
							<div class="flexcenter">
								<p><?= $forlink['judulitem'] ?></p>
							</div>	
						</div>
						</a>
					</div>
					</div>
			<?php endforeach; ?>
		</div>	
	</div>
</div>

<?php endif ?>
<?php endif ?>
