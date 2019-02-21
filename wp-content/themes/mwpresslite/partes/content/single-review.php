<div id="review-mwpress">
<script>
jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});
</script>
<style>
.skillbar {
	position:relative;
	display:block;
	margin-bottom:10px;
	width:100%;
	background:#eee;
	height:25px;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-webkit-transition:0.4s linear;
	-moz-transition:0.4s linear;
	-ms-transition:0.4s linear;
	-o-transition:0.4s linear;
	transition:0.4s linear;
	-webkit-transition-property:width, background-color;
	-moz-transition-property:width, background-color;
	-ms-transition-property:width, background-color;
	-o-transition-property:width, background-color;
	transition-property:width, background-color;
}

.skillbar-title {
	position:absolute;
	top:0;
	left:0;

	
	font-size:13px;
	color:#ffffff;
	background:#6adcfa;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-title span {
	text-transform: uppercase;
	font-size:11px;
	display:block;
	background:rgba(0, 0, 0, 0.3);
	padding:0 20px;
	height:25px;
	line-height:25px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:3px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-bar {
	height:25px;
	width:0px;
	background:<?php echo $mwpress_opt['config_colorD']; ?>;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

.skill-bar-percent {
	position:absolute;
	right:5px;
	top:3px;
	bottom:2px;
	font-size:11px;
	height:19px;
	line-height:19px;
	color:#ffffff;
	width:25px;
	padding-left:5px;
border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	font-wight:bold;
	
	background: <?php echo $mwpress_opt['config_colorT']; ?>;
}

#all-skills {float:left; width:60%;}
#media-skills {float:left; width:40%; padding-left: 80px; }
#media-skills h2 {padding-left: 50px;}
#review-mwpress {
	box-shadow: 0 0 10px #efefef;
border:1px solid #e6e6e6;
width:100%;
margin:20px 0 0px 0;
padding:0px 20px 0px 20px; 
</style>

<?php


if ($mwpress_opt['value_criterio1'] == 10.0) {
	$mwpress_opt['value_criterio1'] = 10; 
}
if ($mwpress_opt['value_criterio2'] == 10.0) {
	$mwpress_opt['value_criterio2'] = 10; 
}
if ($mwpress_opt['value_criterio3'] == 10.0) {
	$mwpress_opt['value_criterio3'] = 10; 
}
if ($mwpress_opt['value_criterio4'] == 10.0) {
	$mwpress_opt['value_criterio4'] = 10; 
}
if ($mwpress_opt['value_criterio5'] == 10.0) {
	$mwpress_opt['value_criterio5'] = 10; 
}
if ($mwpress_opt['value_criterio6'] == 10.0) {
	$mwpress_opt['value_criterio6'] = 10; 
}


$percentv = $mwpress_opt['value_criterio1']*10;
$percentv2 = $mwpress_opt['value_criterio2']*10;
$percentv3 = $mwpress_opt['value_criterio3']*10;
$percentv4 = $mwpress_opt['value_criterio4']*10;
$percentv5 = $mwpress_opt['value_criterio5']*10;
$percentv6 = $mwpress_opt['value_criterio6']*10;

//para usar no radial chart
if($mwpress_opt['txt_criterio1'] != ""){$valor1 = $percentv; $divisor1 = 1;} else {$valor1 = 0; $divisor1 = 0;}
if($mwpress_opt['txt_criterio2'] != ""){$valor2 = $percentv2; $divisor2 = 1;} else {$valor2 = 0; $divisor2 = 0;}
if($mwpress_opt['txt_criterio3'] != ""){$valor3 = $percentv3; $divisor3 = 1;} else {$valor3 = 0; $divisor3 = 0;}
if($mwpress_opt['txt_criterio4'] != ""){$valor4 = $percentv4; $divisor4 = 1;} else {$valor4 = 0; $divisor4 = 0;}
if($mwpress_opt['txt_criterio5'] != ""){$valor5 = $percentv5; $divisor5 = 1;} else {$valor5 = 0; $divisor5 = 0;}
if($mwpress_opt['txt_criterio6'] != ""){$valor6 = $percentv6; $divisor6 = 1;} else {$valor6 = 0; $divisor6 = 0;}

$valoresgeral = $valor1+$valor2+$valor3+$valor4+$valor5+$valor6;
$divisoresgeral = $divisor1+$divisor2+$divisor3+$divisor4+$divisor5+$divisor6;
$mediageral = $valoresgeral/$divisoresgeral;



?>
<div id="all-skills">
<h2 class="h1t" style="color:<?php echo $mwpress_opt['config_colorT']; ?>"> <?php echo __('Avaliação/Nota', 'mwpress'); ?></h2>

<?php if($mwpress_opt['txt_criterio1'] != '') : ?>
<div class="skillbar clearfix " data-percent="<?php echo $percentv; ?>%">
	<div class="skillbar-title" style="background:<?php echo $mwpress_opt['config_colorT']; ?>"><span><?php echo $mwpress_opt['txt_criterio1']; ?></span></div>
	<div class="skillbar-bar" style="background:<?php echo $mwpress_opt['config_colorD']; ?>"></div>
	<div class="skill-bar-percent"><?php echo $mwpress_opt['value_criterio1']; ?></div>
</div> <!-- End Skill Bar -->
<?php endif; ?>

<?php if($mwpress_opt['txt_criterio2'] != '') : ?>
<div class="skillbar clearfix " data-percent="<?php echo $percentv2; ?>%">
	<div class="skillbar-title" style="background:<?php echo $mwpress_opt['config_colorT']; ?>"><span><?php echo $mwpress_opt['txt_criterio2']; ?></span></div>
	<div class="skillbar-bar" style="background:<?php echo $mwpress_opt['config_colorD']; ?>"></div>
	<div class="skill-bar-percent"><?php echo $mwpress_opt['value_criterio2']; ?></div>
</div> <!-- End Skill Bar -->
<?php endif; ?>

<?php if($mwpress_opt['txt_criterio3'] != '') : ?>
<div class="skillbar clearfix " data-percent="<?php echo $percentv3; ?>%">
	<div class="skillbar-title" style="background:<?php echo $mwpress_opt['config_colorT']; ?>"><span><?php echo $mwpress_opt['txt_criterio3']; ?></span></div>
	<div class="skillbar-bar" style="background:<?php echo $mwpress_opt['config_colorD']; ?>"></div>
	<div class="skill-bar-percent"><?php echo $mwpress_opt['value_criterio3']; ?></div>
</div> <!-- End Skill Bar -->
<?php endif; ?>
<?php if($mwpress_opt['txt_criterio4'] != '') : ?>
<div class="skillbar clearfix " data-percent="<?php echo $percentv4; ?>%">
	<div class="skillbar-title" style="background:<?php echo $mwpress_opt['config_colorT']; ?>"><span><?php echo $mwpress_opt['txt_criterio4']; ?></span></div>
	<div class="skillbar-bar" style="background:<?php echo $mwpress_opt['config_colorD']; ?>"></div>
	<div class="skill-bar-percent"><?php echo $mwpress_opt['value_criterio4']; ?></div>
</div> <!-- End Skill Bar -->
<?php endif; ?>
<?php if($mwpress_opt['txt_criterio5'] != '') : ?>
<div class="skillbar clearfix " data-percent="<?php echo $percentv5; ?>%">
	<div class="skillbar-title" style="background:<?php echo $mwpress_opt['config_colorT']; ?>"><span><?php echo $mwpress_opt['txt_criterio5']; ?></span></div>
	<div class="skillbar-bar" style="background:<?php echo $mwpress_opt['config_colorD']; ?>"></div>
	<div class="skill-bar-percent"><?php echo $mwpress_opt['value_criterio5']; ?></div>
</div> <!-- End Skill Bar -->
<?php endif; ?>
<?php if($mwpress_opt['txt_criterio6'] != '') : ?>
<div class="skillbar clearfix " data-percent="<?php echo $percentv6; ?>%">
	<div class="skillbar-title" style="background:<?php echo $mwpress_opt['config_colorT']; ?>"><span><?php echo $mwpress_opt['txt_criterio6']; ?></span></div>
	<div class="skillbar-bar" style="background:<?php echo $mwpress_opt['config_colorD']; ?>"></div>
	<div class="skill-bar-percent"><?php echo $mwpress_opt['value_criterio6']; ?></div>
</div> <!-- End Skill Bar -->
<?php endif; ?>
</div>


<style>

/** ============================
 ** variable
 ** ============================ */
$circular-margin: 10px;
$break-small: 320px;
$break-large: 1100px;

/** ============================
 ** function circular-progress
 ** ============================ */
@function circular-progress($maxPercent, $percent, $color-bar, $color-back) {
  $increment: 360 / $maxPercent;
  $half: round($maxPercent / 2);
  $background-image: '';
  @if $percent < $half {
    $nextdeg: 90deg + ($increment * $percent);
    $background-image: 'linear-gradient(90deg, #{$color-back} 50%, transparent 50%, transparent),
 linear-gradient(#{$nextdeg}, #{$color-bar} 50%, #{$color-back} 50%, #{$color-back})';

  }
  @else {
    $nextdeg: -90deg + ($increment * ($percent - $half));
    $background-image: 'linear-gradient(#{$nextdeg}, #{$color-bar} 50%, transparent 50%, transparent),
 linear-gradient(270deg, #{$color-bar} 50%, #{$color-back} 50%, #{$color-back})';

  }
  @return unquote($background-image);
}


/** ============================
 ** Mixins Circular Progress
 ** ============================ */
@mixin circular-progress($percent-num, $color1:"#03A9F4") {
  //circular-progress function
  //circular-progress($maxPercent, $percent, $color-bar, $color-back);
  // background: circular-progress(100, $percent-num, #03A9F4, #E0E0E0);
  background: circular-progress(100, $percent-num, $color1, #E0E0E0);
  border-radius: 50%;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  height: 200px;
  margin: 2em auto;
  position: relative;
  min-width: 200px;
  margin: $circular-margin;
  transition: all .3s linear;
  &::before {
    background-color: #FAFAFA;
    border-radius: 50%;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    color: rgba(black, .54);
    content: '#{$percent-num}%';
    font-size: 72px;
    font-weight: bold;
    height: 100%;
    left: 0;
    line-height: 200px;
    position: absolute;
    text-align: center;
    top: 0;
    transform: scale(.87);
    width: 100%;
  }
  &:hover {
    box-shadow: 0 0 100px 1px rgba(255, 214, 112, 0.35);
  }
}



.group {
  margin: 10px;
  
  .circular-progress60 {
    @include circular-progress(10, #FF70A6);
  }
  .circular-progress73 {
    @include circular-progress(73, #FF9770);
  }
  .circular-progress75 {
    @include circular-progress(75, #FF9770);
  }
  .circular-progress85 {
    @include circular-progress(85, #70D6FF);
  }
  .circular-progress90 {
    @include circular-progress(90, #70D6FF);
  }
  .circular-progress100 {
    @include circular-progress(100, #C8E9A0);
  }
  
  .circular-text {
    text-align: center;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 1px;
  }
}


@keyframes turning_cw {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.skillchart canvas { width:100%}

.circle {

  margin: 6px 6px 20px;
  display: inline-block;
  position: relative;
  text-align: center;
  line-height: 1.2;
}

.circle canvas {
  vertical-align: top;
}

.circle strong {
  position: absolute;
  top: 40%;
  left: 0;
  width: 100%;
  text-align: center;
  line-height: 40px;
  font-size: 45px;
  color:<?php echo $mwpress_opt['config_colorT']; ?>;
}

.circle strong i {
  font-style: normal;
  font-size: 0.6em;
  font-weight: normal;
}

.circle span {
  display: block;
  color: #aaa;
  margin-top: 12px;
}

</style>

<div id="media-skills">
<h2 class="h1t" style="color:<?php echo $mwpress_opt['config_colorT']; ?>"> <?php echo __('Média Geral', 'mwpress'); ?></h2>
<div class="skillchart circle">
<strong></strong>
</div>

  

</div>
<div style="clear:both;"></div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/partes/content/circle-progress.js"></script>



<?php 



if ($divisoresgeral < 6) {echo '<style>.skillchart canvas { width:180px}</style>';}
if ($divisoresgeral < 5) {echo '<style>.skillchart canvas { width:150px} .circle strong {top: 35%;</style>';}
if ($divisoresgeral < 4) {echo '<style>.skillchart canvas { width:150px} .circle strong {top: 32%;</style>';}
if ($divisoresgeral < 3) {echo '<style>.skillchart canvas { width:150px} .circle strong {top: 32%; font-size:30px}</style>';}
if ($divisoresgeral < 2) {echo '<style>.skillchart canvas { width:150px} .circle strong {top: 32%; font-size:30px}</style>';}
 

 

?>

<style>
@media only screen and (max-width: 640px), only screen and (max-device-width: 640px) {
#all-skills {display:none}
.skillchart canvas { width:100px} .circle strong {top: 32%; font-size:30px}
#media-skills {float:left; width:100%; padding-left: 60px; }
#media-skills h2 {padding-left: 20px;}
}
</style>

<script>

valor1 = "";
cor1 = "";
cor2 = "";
var valorgeral = <?php echo $mediageral; ?>;
var cor1 = "<?php echo  $mwpress_opt['config_colorP'];?>";
var cor2 = "<?php echo  $mwpress_opt['config_colorD']; ?>";
var valordivgeral = valorgeral/100;
var percentvalordivgeral = valordivgeral*10;

jQuery('.skillchart').circleProgress({
	size:180,
value: valordivgeral,
fill: {
  gradient: [cor1, cor2] // or color: '#3aeabb', or image: 'http://i.imgur.com/pT0i89v.png'
}
}).on('circle-animation-progress', function(event, progress) {
    jQuery(this).find('strong').html((percentvalordivgeral * progress).toFixed(1) + '');
  });


</script>