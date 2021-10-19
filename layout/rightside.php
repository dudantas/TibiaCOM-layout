<div id="DeactivationContainerThemebox" ></div>
<div id="RightArtwork">
	<img id="Monster" src="layout/images/global/header/monsters/King_Zelos.gif" onClick="window.location = 'onlinelist.php';" alt="Monster of the Week" />
	<img id="PedestalAndOnline" src="layout/images/global/header/pedestal-and-online1.gif" alt="Monster Pedestal and Players Online Box"/>
	<div id="PlayersOnline" onClick="window.location = 'onlinelist.php';">
		<a href="onlinelist.php" id="online">Players online:<br><?php echo user_count_online();?></a>
		
	</div>
</div>
<div id="Themeboxes">
	<div id="HighscoreBox" class="HighscoreBox" style="background-image:url(layout/images/global/themeboxes/current-poll/bk_themebox8.png);">
<br><br><div class="container" style="position:absolute;left:-9px;color:yellow">
	<?php
            $cache = new Cache('engine/cache/topPlayer');
            if ($cache->hasExpired()) {
                $players = mysql_select_multi('SELECT `name`, `level`, `experience`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `experience` DESC LIMIT 5;');
                $cache->setContent($players);
                $cache->save();
            } else {
                $players = $cache->load();
            }
            if ($players) {
            $count = 1;
            foreach($players as $player) {
            echo '<img style="margin-top: -35px; margin-left: -35px;" src="https://lepiigortv.com/animatedoutfits/animoutfit.php?id='.$player['looktype'].'&addons='.$player['lookaddons'].'&head='.$player['lookhead'].'&body='.$player['lookbody'].'&legs='.$player['looklegs'].'&feet='.$player['lookfeet'].'&g=0&h=3&i=1"></img> <a href="characterprofile.php?name='.$player['name'].'" style="color:orange">'.$player['name'].'&ensp;</a><strong>'. $player['level'].'</strong><br>';
           $count++;
            }
            }
            ?>
        </div>
            </div>
            <div id="PremiumBox" class="Themebox" style="background-image:url(layout/images/global/images/themeboxtibiacoin.png);">
		
			<br><br><br><br><br><br><br><br><br>
			<a href="buypoints.php"><img src="layout/images/global/images/getibiacoins.png" 
  		  onMouseOver="this.src='layout/images/global/images/getibiacoins1.png'" 
  		  onMouseOut="this.src='layout/images/global/images/getibiacoins.png'" 
		 ></img></a>
			
		
	</div>
            <div id="TranslateBox" class="TranslateBoxing" style="background-image:url(layout/images/global/images/translatorbox1.png);">
            	<div id="google_translate_element" style="display:none"></div>
            	<br><br><br>
<input value="en" id="language" style="width: 100px"/><br>
<button onclick="changeLanguageByButtonClick()">Translate</button>
            </div>
											
	<div id="ScreenshotBox" class="Themebox" style="background-image:url(layout/images/global/themeboxes/screenshot/screenshotbox.gif);">
		<a href="{$path}/index.php/p/v/gallery">
			<img id="ScreenshotContent" class="ThemeboxContent" src="layout/images/abouttibia/screenshotoftheday.png" alt="Screenshot of the Day"/>
		</a>
		<div class="Bottom" style="background-image:url(http://static.tibia.com/images/global/general/box-bottom.gif);"></div>
	</div>
	<div id="NewcomerBox" class="Themebox" style="background-image:url(layout/images/global/themeboxes/newcomer/newcomerbox.gif);">
		<a class="ThemeboxButton" href="register.php" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url(layout/images/global/buttons/sbutton.gif);">
			<div class="BigButtonOver" style="background-image:url(layout/images/global/buttons/sbutton_over.gif);"></div>
			<div class="ButtonText" style="background-image:url(layout/images/global/buttons/_sbutton_jointibia.gif);"></div>
		</a>
		<div class="Bottom" style="background-image:url(layout/images/global/general/box-bottom.gif);"></div>
	</div>
</div>