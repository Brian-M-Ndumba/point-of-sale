
<?php $this->load->view("partial/header"); ?>
<link rel="stylesheet" href='<?php echo base_url()."css/t.css";?>'>
<script type="text/javascript">
	dialog_support.init("a.modal-dlg");
</script>
<img id="backg" src="<?php echo base_url().'images/of2.jpg';?>">
<style>
	.cd-intro strong{
		font-size:20px;
		font-style:italic;
	}
	#backg{
	width:100%;
	height:100%;
	position:absolute;
	top:0;
	left:0;
	z-index:-1;
}
#im{
	text-align:center;
display:none;
}
#im img{
	width:50%;
	height:auto;
	

}
</style>

<h3 class="text-center"><?php
echo '<br/><br/>';
$str1 = "Good morning, ";
$str2= "Good afternoon, ";
$str3 = "Good evening, ";
date_default_timezone_set("Africa/Nairobi");
$time = date('H');
if($time >= 06 && $time < 12){
	echo $str1;
 }else if($time >= 12 && $time < 16){
	 echo $str2;
 }else {
	echo $str3;
}

echo strtolower($user_info->first_name) . "!";
echo '<section class="cd-intro" >';
echo '<h1 class="cd-headline clip is-full-width" style="height:1px;">';

  echo '<span class="cd-words-wrapper">';
	echo '<b class="is-visible"><strong>Welcome to your office.</strong></b>';
	echo '<b><strong> "Did you know that you can configure your POS using the configuration button?"</strong></b>';
	echo '<b><strong> "Well, I thought you should know."</strong></b>';
	echo '<b><strong> Select a module below to get started.</strong></b>';
   
  echo '</span>';
echo '</h1>';
echo '</section>';
echo '<br/><br/>';
  ?></h3>

<div id="office_module_list">
	<?php
	foreach($allowed_modules as $module)
	{
			// remove the button for the following below
			if( $module->module_id != "taxes"){
			
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
<div id="im">
<img src="<?php echo base_url().'images/office.png';?>"/>
</div>


<!-- <?php $this->load->view("partial/footer"); ?> -->
<script src='<?php echo base_url()."js/jquery-2.1.1.js";?>'></script>
    <script src='<?php echo base_url()."js/main.js";?>'></script>