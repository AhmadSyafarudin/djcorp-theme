<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="loading">
  <div class="pt-20">
    <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="w-28 h-auto mx-auto">
    <div class="inline-flex items-center pt-6">
      <?php if(IS_RAMADHAN) : ?>
        <svg class="animate-spin -ml-1 mr-3 h-6 w-6 text-tertiary" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.6863 21.3136C13.8738 21.126 13.9792 20.8717 13.9792 20.6065V14.9791C13.9792 14.4269 14.4269 13.9791 14.9792 13.9791H20.6065C20.8717 13.9791 21.126 13.8738 21.3136 13.6863L25.2928 9.70708C25.6833 9.31658 26.3165 9.31658 26.707 9.70708L30.6862 13.6863C30.8737 13.8738 31.1281 13.9791 31.3932 13.9791H37.0208C37.5731 13.9791 38.0208 14.4269 38.0208 14.9791V20.6067C38.0208 20.8719 38.1262 21.1263 38.3137 21.3138L42.2928 25.2929C42.6833 25.6834 42.6833 26.3166 42.2928 26.7071L38.3137 30.6861C38.1262 30.8737 38.0208 31.128 38.0208 31.3933V37.0208C38.0208 37.5731 37.5731 38.0208 37.0208 38.0208H31.3933C31.1281 38.0208 30.8737 38.1261 30.6862 38.3137L26.707 42.2929C26.3165 42.6834 25.6833 42.6834 25.2928 42.2929L21.3136 38.3137C21.126 38.1261 20.8717 38.0208 20.6064 38.0208H14.9792C14.4269 38.0208 13.9792 37.5731 13.9792 37.0208V31.3935C13.9792 31.1283 13.8738 30.874 13.6863 30.6864L9.70697 26.7071C9.31647 26.3166 9.31647 25.6834 9.70697 25.2929L13.6863 21.3136Z" fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.02948 17.3131C7.02948 17.8436 6.81879 18.3523 6.44373 18.7273L0.585754 24.5853C-0.195251 25.3663 -0.195251 26.6327 0.585754 27.4137L6.44373 33.2717C6.81879 33.6467 7.02948 34.1554 7.02948 34.6859V42.9697C7.02948 44.0743 7.92493 44.9697 9.02948 44.9697H17.3134C17.8438 44.9697 18.3525 45.1805 18.7276 45.5555L24.5852 51.4132C25.3663 52.1943 26.6326 52.1943 27.4137 51.4132L33.2713 45.5555C33.6464 45.1805 34.1551 44.9697 34.6855 44.9697H42.9698C44.0744 44.9697 44.9698 44.0743 44.9698 42.9697V34.6854C44.9698 34.155 45.1805 33.6463 45.5556 33.2712L51.4131 27.4137C52.1942 26.6327 52.1942 25.3663 51.4131 24.5853L45.5556 18.7278C45.1805 18.3527 44.9698 17.844 44.9698 17.3136V9.02932C44.9698 7.92474 44.0744 7.02932 42.9698 7.02932H34.6856C34.1552 7.02932 33.6465 6.8186 33.2714 6.44353L27.4137 0.585777C26.6326 -0.195259 25.3663 -0.195259 24.5852 0.585777L18.7275 6.44353C18.3524 6.8186 17.8438 7.02932 17.3133 7.02932H9.02948C7.92493 7.02932 7.02948 7.92474 7.02948 9.02932V17.3131ZM2 25.9995L7.85791 20.1416C8.60803 19.3914 9.02948 18.374 9.02948 17.3131V9.02932H17.3133C18.3741 9.02932 19.3916 8.6079 20.1417 7.85775L25.9995 1.99999L31.8572 7.85775C32.6073 8.6079 33.6248 9.02932 34.6856 9.02932H42.9698V17.3136C42.9698 18.3744 43.3913 19.3918 44.1414 20.142L49.9989 25.9995L44.1414 31.857C43.3913 32.6072 42.9698 33.6246 42.9698 34.6854V42.9697H34.6855C33.6247 42.9697 32.6072 43.3912 31.8571 44.1413L25.9995 49.999L20.1418 44.1413C19.3917 43.3912 18.3742 42.9697 17.3134 42.9697H9.02948V34.6859C9.02948 33.625 8.60803 32.6076 7.85791 31.8574L2 25.9995Z" fill="currentColor"/>
          </svg>
          <?php else : ?>
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-slate-600 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
      <?php endif ?>
      <p class="pl-0.5 text-opacity-50">Memuat....</p>
    </div>
  </div>
  <p class="py-8 font-medium text-sm dark:text-white">Aplikasi Sistem Informasi <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></p>
  </div>
</div>