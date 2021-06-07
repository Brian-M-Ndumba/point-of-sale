<style>
	.cont{
		padding:10px 0 0 0;
		width:100%;
		height:auto;
	    display:inline-flex;
		flex-direction:row;
}
.cont img{

	max-width:150px;
	max-height:150px;
	border:3px solid #2c3e50;
	border-radius:50%;
	box-shadow:0 10px 10px #2c3e50;
}
.t
{
	padding:20px 0 0 40px;
	width:75%;
	display:inline-block;
}
.t li,
.t strong{
	list-style-type:none;
	font-style:italic;
	font-size:17px;
}
.tract{
	
	width:100%;
	text-align:center;
	justify-content: space-around;
}
#slideshow img{
	max-width:300px;
	max-height:300px;
	border:none;
	border-radius:0;
	box-shadow:none;
	
}
@media (max-width:1200px){
	#slideshow {
		display:none;
	}
}
#slideshow { 
  margin:0; 
  position: relative; 
  width:350px; 
  height: 350px; 


}

#slideshow > div { 
  position: absolute; 
  top: 0; 
  left: 10px; 
  right: 10px; 
  bottom: 0; 
}
#backg{
	width:100%;
	height:120%;
	position:absolute;
	top:0;
	left:0;
	z-index:-1;
}
</style>
<img id="backg" src="<?php echo base_url().'images/3d1.jpg';?>">
<?php $this->load->view("partial/header"); ?>
<link rel="stylesheet" href='<?php echo base_url()."css/t.css";?>'>
<script type="text/javascript">
	dialog_support.init("a.modal-dlg");
</script>

<h3 class="text-center"><?php
 $str1 = "this morning.";
 $str2= "this afternoon.";
 $str3 = "this evening.";
 $str4 = "tonight.";
 date_default_timezone_set("Africa/Nairobi");
 $time = date('H');

 echo "Welcome to XJAgrovet, Let`s get started ";
 if($time >= 06 && $time < 12){
	echo $str1;
 }else if($time >= 12 && $time < 16){
	 echo $str2;
 }else if($time >= 16 && $time < 21){
	echo $str3;
}else {
	echo $str4;

}


 ?></h3>

<div id="home_module_list">
	<?php
	foreach($allowed_modules as $module)
	{
		// remove the button for the following below
		if( $module->module_id != "item_kits" && $module->module_id != "giftcards" && $module->module_id != "messages" &&  $module->module_id != "cashups"){
			
	?>
	
		<div class="module_item" title="<?php echo $this->lang->line('module_'.$module->module_id.'_desc');?>">
			<a href="<?php echo site_url("$module->module_id");?>"><img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" /></a>
			<a style="color:#2c3e50;" href="<?php echo site_url("$module->module_id");?>"><?php echo $this->lang->line("module_".$module->module_id) ?></a>
		</div>
	
	
	<?php
		}
	}
	?>
</div>

<div class="cont">
<img src="<?php echo base_url().'images/of1.jpg';?>"/>
<h3 class="t">

	<?php
	echo '<section class="cd-intro" >';
	echo '<h1 class="cd-headline clip is-full-width" style="height:1px;">';

	  echo '<span class="cd-words-wrapper">';
		echo '<b class="is-visible"><strong>"A good farmer is nothing more nor less than a handy man with a sense of humus."</strong></b>';
	

	  echo '</span>';
	echo '</h1>';
 echo '</section>';

 echo "<br/>";
 echo '<li>Farming looks mighty easy when your plow is a pencil and you are a thousand miles from the corn field.</li>';

 ?></h3>
  <div id="slideshow">

  <div>
  <img src="<?php echo base_url().'images/tire.png';?>">
  
  </div>
  <div>
  <img src="<?php echo base_url().'images/monster.png';?>">
  
  </div>
 
  <div>
  <img src="<?php echo base_url().'images/maize.png';?>">
  
  </div>
  <div>
  <img src="<?php echo base_url().'images/nuts.png';?>">
  
  </div>
</div>
</div>



 <?php $this->load->view("partial/footer");?>
 <!-- change tractor image -->
 <script>
	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow');
}, 20000);
	</script>
<script src='<?php echo base_url()."js/jquery-2.1.1.js";?>'></script>
    <script src='<?php echo base_url()."js/main.js";?>'></script>
