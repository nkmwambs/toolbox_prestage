<?php
	$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title       =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$text_align         =	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
	$account_type       =	$this->session->userdata('login_type');
	if(!file_exists(VIEWPATH.'backend/'.$this->session->userdata('login_type'))){
		$account_type = 'admin';
	}
	$skin_colour        =   $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description;
	$active_sms_service =   $this->db->get_where('settings' , array('type'=>'active_sms_service'))->row()->description;
	?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">
<head>
	
	<title><?php echo $page_title;?> | <?php echo $system_title;?></title>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Techsys Inc Softwares" />
	<meta name="author" content="Techsys Inc Softwares" />
	
	

	<?php include 'includes_top.php';?>	
	
</head>
<body class="page-body <?php if ($skin_colour != '') echo 'skin-' . $skin_colour;?>" >
		<!-- BEGIN PHP Live! HTML Code -->
		
		<!-- <script>(function(d,t,u,s,e){e=d.getElementsByTagName(t)[0];s=d.createElement(t);s.src=u;s.async=1;e.parentNode.insertBefore(s,e);})(document,'script','//www.compassionkenya.com/livechat/php/app.php?widget-init.js');</script> -->

	<!-- END PHP Live! HTML Code -->
	
	<div class="page-container sidebar-collapsed <?php if ($text_align == 'right-to-left') echo 'right-sidebar';?>" >
		<?php include $account_type.'/navigation.php';?>	
		<div class="main-content">
		
			<?php include 'header.php';?>

           <h3 style="">
           	<i class="entypo-right-circled"></i> 
				<?php echo $page_title;?>
           </h3>

			<?php include $account_type.'/'.$page_name.'.php';?>

			<?php include 'footer.php';?>

		</div>
		<?php //include 'chat.php';?>
        	
	</div>
    <?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>
    
</body>
</html>