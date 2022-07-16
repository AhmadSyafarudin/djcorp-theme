<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php 
  $data = array(
    array(
      "type" => "confirmed",
      "bg" => "bg-red-600",
      "emoji" => "emoji-sad.png",
      "label" => "Positif"
    ),
    array(
      "type" => "recovered",
      "bg" => "bg-emerald-600",
      "emoji" => "emoji-happy.png",
      "label" => "Sembuh"
    ),
    array(
      "type" => "deaths",
      "bg" => "bg-purple-600",
      "emoji" => "emoji-cry.png",
      "label" => "Meninggal"
    )
    );

    $odp = $covid[0]; //"Orang Dalam Pemantauan (ODP)" => "ODP",
    $pdp = $covid[1]; //"Pasien Dalam Pengawasan (PDP)" => "PDP",
    $odr = $covid[2]; //"Orang Dalam Resiko (ODR)" => "ODR"
    $otg = $covid[3]; //"Orang Tanpa Gejala (OTG)" => "OTG",
    $positif = $covid[4]; //"Positif Covid-19" => "POSITIF",
?>

<?php if($this->setting->covid_data) : ?>
  <div class="relative w-full text-center covid-heading button button-tertiary text-white cursor-pointer">
    <h3 class="lg:text-lg font-bold font-heading inline-block">Live Data COVID-19</h3>
    <span class="absolute inline-flex top-0 h-4 w-4 items-center justify-center">
      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
      <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
    </span>
  </div>
  <div class="covid-wrapper transition-all duration-200 <?php @$hide_covid19 && print('hide-in-small') ?>">
      <?php if($this->setting->covid_desa) : ?>
        <div class="w-full grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4 p-3 lg:p-4 shadow bg-tertiary">
          <div class="w-full bg-white dark:bg-tertiary p-4">
            <div class="flex flex-col lg:flex-row lg:space-x-4">
              <div class="w-8 h-auto flex-shrink-0 hidden lg:inline-block">
                <img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/corona.png') ?>" alt="emoji">
              </div>
              <div class="flex-1 space-y-2 py-1">
                <h6 class="font-bold w-full text-sm">Data Kasus COVID-19 <br class="hidden lg:inline-block"> di <?= ucwords($this->setting->sebutan_desa); ?> <?=$desa['nama_desa']; ?></h6>
              </div>
            </div>
          </div>
          <?php if(!IS_PREMIUM) : ?>
            <div class="shadow p-3 lg:p-4 w-full bg-white dark:bg-dark-secondary">
              <div class="flex space-x-2 lg:space-x-4">
                <div class="w-8 lg:w-8 h-auto flex-shrink-0">
                  <img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/emoji-sad.png') ?>" alt="emoji">
                </div>
                <div class="flex-1 space-y-2 py-1">
                  <h6 class="w-3/4">Positif</h6>
                  <div class="space-y-2">
                    <span class="text-lg lg:text-2xl leading-none font-bold w-11/12 block"><?= number_format($positif['jumlah']); ?></span>
                    <span class="text-sm block">Orang</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="shadow p-4 w-full bg-white dark:bg-dark-secondary">
              <div class="flex space-x-4">
                <div class="w-8 h-auto flex-shrink-0">
                  <img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/emoji-sad.png') ?>" alt="emoji">
                </div>
                <div class="flex-1 space-y-2 py-1">
                  <h6 class="w-3/4">PDP</h6>
                  <div class="space-y-2">
                    <span class="text-lg lg:text-2xl leading-none font-bold w-11/12 block"><?= number_format($pdp['jumlah']); ?></span>
                    <span class="text-sm block">Orang</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="shadow p-4 w-full bg-white dark:bg-dark-secondary">
              <div class="flex space-x-4">
                <div class="w-8 h-auto flex-shrink-0">
                  <img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/emoji-sad.png') ?>" alt="emoji">
                </div>
                <div class="flex-1 space-y-2 py-1">
                  <h6 class="w-3/4">ODP</h6>
                  <div class="space-y-2">
                    <span class="text-lg lg:text-2xl leading-none font-bold w-11/12 block"><?= number_format($odp['jumlah']); ?></span>
                    <span class="text-sm block">Orang</span>
                  </div>
                </div>
              </div>
            </div>
            <?php else : ?>
              <?php foreach($covid as $key => $data) : ?>
                <?php if ($key >= 7) break; ?>
                <div class="shadow p-4 w-full bg-white dark:bg-dark-secondary">
                  <div class="flex space-x-4">
                    <div class="w-8 h-auto flex-shrink-0">
                      <img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/emoji-sad.png') ?>" alt="emoji">
                    </div>
                    <div class="flex-1 space-y-2 py-1">
                      <h6 class="w-3/4"><?= $data['nama'] ?></h6>
                      <div class="space-y-2">
                        <span class="text-lg lg:text-2xl leading-none font-bold w-11/12 block"><?= number_format($data['jumlah']); ?></span>
                        <span class="text-sm block">Orang</span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
          <?php endif ?>
        </div>  
      <?php endif ?>
    </div>  
  </div>
<?php endif ?>