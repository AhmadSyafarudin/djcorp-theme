<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php require("$this->theme_folder/$this->theme/commons/social_icons.php") ?>

<?php require("$this->theme_folder/$this->theme/plus/modal.php") ?>


<?php $this->load->view("$folder_themes/plus/menubottom"); ?>

<div class="totop">
	<div id="ScrollToTop" class="bgcolor1 flexcenter">
		<svg viewBox="0 0 96 96">
		<g>
		<path d="M82.6074,62.1072,52.6057,26.1052a6.2028,6.2028,0,0,0-9.2114,0L13.3926,62.1072a5.999,5.999,0,1,0,9.2114,7.6879L48,39.3246,73.396,69.7951a5.999,5.999,0,1,0,9.2114-7.6879Z"/>
		</g>
		</svg>
	</div>
</div>

<script type='text/javascript'>
$(function() { $(window).scroll(function() { if($(this).scrollTop()>100) { $('#ScrollToTop').fadeIn()} else { $('#ScrollToTop').fadeOut();}});
$('#ScrollToTop').click(function(){$('html,body').animate({scrollTop:0},1000);return false})});
</script>

<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/wow.min.js") ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/slick.min.js") ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/custom.js") ?>"></script>
<script>
	$(document).ready(function(){
    $(".tip-top").tooltip({
        placement : 'top'
    });
    $(".tip-right").tooltip({
        placement : 'right'
    });
    $(".tip-bottom").tooltip({
        placement : 'bottom'
    });
    $(".tip-left").tooltip({
        placement : 'left'
    });
	});
</script>

<script type="text/javascript">
	$(window).load(function() { $("#loading").delay(100).fadeOut("slow"); } )
</script>

<script type='text/javascript'>
$(function() { $(window).scroll(function() { if($(this).scrollTop()>100) { $('#ScrollToTop').fadeIn()} else { $('#ScrollToTop').fadeOut();}});
$('#ScrollToTop').click(function(){$('html,body').animate({scrollTop:0},1000);return false})});
</script>

<script>
 function setBoxMode(isBox) {
        var boxBtn = document.getElementById('boxBtn')
        var lightBtn = document.getElementById('lightBtn')

        if(isBox) {
            lightBtn.style.display = "block"
            boxBtn.style.display = "none"
        } else {
            lightBtn.style.display = "none"
            boxBtn.style.display = "block"
        }

        document.body.classList.toggle("boxmode");
    }
</script>

<script>  if (localStorage.getItem('theme') == 'boxm')
setBoxMode()
      // 🌝🌚      
  function setBoxMode() 
  { let emoticon = ''
  let isBox = document.body.classList.toggle('boxmode')
  if (isBox) 
  {      
  emoticon = '<div class="flexleft" style="cursor:pointer;"><img style="height:35px;margin:0 10px 0 0;width:auto;" src="<?= base_url("$this->theme_folder/$this->theme/images/iconpng/full.png") ?>"/><h3 style="font-size:100%;font-weight:500;">Tampilan Full</h3></div>'      
  localStorage.setItem('theme','boxm')
    } else {      
   emoticon = '<div class="flexleft" style="cursor:pointer;"><img style="height:35px;margin:0 10px 0 0;width:auto;" src="<?= base_url("$this->theme_folder/$this->theme/images/iconpng/default.png") ?>"/><h3 style="font-size:100%;font-weight:500;">Tampilan Box</h3></div>'
  localStorage.removeItem('theme')    }    
 document.getElementById('boxBtn').innerHTML = emoticon  }  
 </script>
 
 <script>
 function setDefaultMode(isDefault) {
        var defBtn = document.getElementById('defBtn')
        var lightBtn = document.getElementById('lightBtn')

        if(isDefault) {
            lightBtn.style.display = "block"
            defBtn.style.display = "none"
        } else {
            lightBtn.style.display = "none"
            defBtn.style.display = "block"
        }

        document.body.classList.toggle("defaultmode");
    }
</script>

<script>  if (localStorage.getItem('theme') == 'defm')
setDefaultMode()
      // 🌝🌚      
  function setDefaultMode() 
  { let emoticon = ''
  let isDefault = document.body.classList.toggle('defaultmode')
  if (isDefault) 
  {      
  emoticon = '<div class="flexleft" style="cursor:pointer;"><img style="height:35px;margin:0 10px 0 0;width:auto;" src="<?= base_url("$this->theme_folder/$this->theme/images/iconpng/default.png") ?>"/><h3 style="font-size:100%;font-weight:500;">Tampilan Box</h3></div>'      
  localStorage.setItem('theme','defm')
    } else {      
   emoticon = '<div class="flexleft" style="cursor:pointer;"><img style="height:35px;margin:0 10px 0 0;width:auto;" src="<?= base_url("$this->theme_folder/$this->theme/images/iconpng/full.png") ?>"/><h3 style="font-size:100%;font-weight:500;">Tampilan Full</h3></div>'
  localStorage.removeItem('theme')    }    
 document.getElementById('defBtn').innerHTML = emoticon  }  
 </script>