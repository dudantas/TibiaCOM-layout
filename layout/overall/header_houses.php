<html><?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time; ?>
	<head>
		<title>Global Server</title>
		<link rel="shortcut icon" href="layout/images/global/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="layout/images/global/general/favicon.ico" type="image/x-icon">
		<link href="layout/styles/basic.css" rel="stylesheet" type="text/css">
		<link href="layout/styles/news.css" rel="stylesheet" type="text/css">
		<link href="layout/styles/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="layout/javascripts/generic.js"></script>
		<script type="text/javascript" src="layout/javascripts/popup.js"></script>
		<script type='text/javascript'>
			var loginStatus=0;
			loginStatus='false';
			var activeSubmenuItem='latestnews';
			var IMAGES=0; IMAGES='layout/images';
			var LINK_ACCOUNT=0;
			LINK_ACCOUNT='{$path}/index.php/account';
			var g_FormName='';
			var g_FormField='';
			var g_Deactivated=false;
		</script>
		<SCRIPT TYPE="text/javascript">
			<!-- // Framekiller
			setTimeout ("changePage()", 6000);
			function changePage()
			{
			  if (parent.frames.length > 2) {
				if (browserTyp == "ie") {
				  parent.location=document.location;
				} else {
				  self.top.location=document.location;
				}
			  }
			}
			// -->
		</SCRIPT>
		<style>
	.zaptable{position:absolute;margin-left:55%;text-align:left;background:#01010185;border:2px solid #8595bb;padding:9px 8px 6px 47px;border-radius:0 0 10px 10px;color:#fff;margin-top:-2px;font:400 9pt Verdana,Arial,Times New Roman,sans-serif;box-shadow:6px 6px 50px 2px #23d100;z-index:10000;transition:all 600ms ease-out}.zaptable:hover{box-shadow:2px 2px 18px 1px #03ff0d;border:2px solid #03ff0d;background:#343f58;transition:all 500ms ease-out;z-index:10000;cursor:pointer}.zaptable img{position:absolute;margin-left:-47px;margin-top:-8px;width:43px}.zaptable small{transition:all 500ms ease-out;display:none}.zaptable:hover small{transition:all 500ms ease-out;display:block}
	</style>
	<a href="FACEBOOK LINK" target="_blank">
		<div class="zaptable">
			<div class="zapbox">
				<img src="layout/images/global/images/facebook.gif"><strong>Facebook: </strong>Global Server<br>
				<strong>Send us a </strong> Message <small style="color: #00c51d;text-shadow: 1px 1px black;text-align:center;">Click here</small>
			</div>
		</div>
	</a>
	<style>
	.zaptablee{position:absolute;margin-left:35%;text-align:left;background:#01010185;border:2px solid #8595bb;padding:9px 8px 6px 47px;border-radius:0 0 10px 10px;color:#fff;margin-top:-2px;font:400 9pt Verdana,Arial,Times New Roman,sans-serif;box-shadow:6px 6px 50px 2px #4781ff;z-index:10000;transition:all 600ms ease-out}.zaptablee:hover{box-shadow:2px 2px 18px 1px #4781ff;border:2px solid #4781ff;background:#343f58;transition:all 500ms ease-out;z-index:10000;cursor:pointer}.zaptablee img{position:absolute;margin-left:-47px;margin-top:-8px;width:43px}.zaptablee small{transition:all 500ms ease-out;display:none}.zaptablee:hover small{transition:all 500ms ease-out;display:block}
	</style>
	<a href="DISCORD URL" target="_blank">
		<div class="zaptablee">
			<div class="zapbox">
				<img src="layout/images/global/images/discordloading.gif"><strong>Discord: </strong>Global Server<br>
				<strong>Join our </strong> Community Today <small style="color: #4785ff;text-shadow: 1px 1px black;text-align:center;">Click Here</small>
			</div>
		</div>
	</a>
	
		<script type="text/javascript" src="layout/javascripts/initialize.js"></script>

	</head>
	<body onBeforeUnLoad="SaveMenu();" onUnload="SaveMenu();" onLoad="SetFormFocus()">
		<a name="top" ></a>
		<div id="ArtworkHelper" style="background-image:url(layout/images/global/header/background1.jpg);">
			<div id="DeactivationContainer" ></div>
			<div id="Bodycontainer" >

					<?php include 'layout/leftside.php'; ?>
					<div id="ContentColumn">
						<div id="Content" class="Content">
							<div id="ContentHelper">
								<div id="ContentRow">
									<div id="container">	
									
								<div id="news" class="Box">
									<div class="Corner-tl" style="background-image:url(layout/images/global/content/corner-tl.gif);"></div>
									<div class="Corner-tr" style="background-image:url(layout/images/global/content/corner-tr.gif);"></div>
									<div class="Border_1" style="background-image:url(layout/images/global/content/border-1.gif);"></div>
									<div class="BorderTitleText" style="background-image:url(layout/images/global/content/title-background-green.gif);"></div>
									<img id="ContentBoxHeadline" class="Title" src="layout/images/global/images/houses.png" alt="Contentbox headline" /> 
									<div class="Border_2">
										<div class="Border_3">
											<div class="BoxContent" style="background-image:url(layout/images/global/content/scroll.gif);">


