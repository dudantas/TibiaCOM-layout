<div id="MenuColumn">
<div id="LeftArtwork">             
	<a href="index.php" ><img id="TibiaLogoArtworkTop" src="layout/images/global/header/tibia-logo-artwork-top1.gif" alt="logoartwork" /></a>
</div>
<?php if (user_logged_in() === true): ?>
	<div id="Loginbox">
		<div id="LoginTop" style="background-image:url(layout/images/global/general/box-top.gif)"></div>
		<div id="BorderLeft" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)"></div>

		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
			
		</div>
		<div id="LoginButtonContainer" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
			<div id="LoginButton">
				<a href="sub.php?page=loggedin"><img src="layout/images/global/buttons/myaccountbutton1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/myaccountbutton2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/myaccountbutton1.gif'" 
		 ></img></a>
			</div>
		</div>


		<div style="clear:both"></div>

		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
		</div>

		<div id="BorderRight" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)"></div>
		<div id="LoginBottom" class="Loginstatus" style="background-image:url(layout/images/global/general/box-bottom.gif)"></div>
	</div>
	<div id="Loginbox">
		<div id="LoginTop" style="background-image:url(layout/images/global/general/box-top.gif)"></div>
		<div id="BorderLeft" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)"></div>

		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
			
		</div>
		<div id="LoginButtonContainer" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
			<div id="LoginButton">
				<a href="downloads.php"><img src="layout/images/global/buttons/downloadbutton1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/downloadbutton2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/downloadbutton1.gif'" 
		 ></img></a>
			</div>
		</div>


		<div style="clear:both"></div>

		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
		</div>

		<div id="BorderRight" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)"></div>
		<div id="LoginBottom" class="Loginstatus" style="background-image:url(layout/images/global/general/box-bottom.gif)"></div>
	</div>
<?php else: ?>
	<div id="Loginbox" >
		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)" >
		</div>
		<div id="LoginTop" style="background-image:url(layout/images/global/general/box-top.gif)" ></div>
		<div id="BorderLeft" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)" ></div>
		<div id="LoginButtonContainer" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
			<div id="LoginButton">
				<a href="sub.php?page=login"><img src="layout/images/global/buttons/loginbutton1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/loginbutton2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/loginbutton1.gif'" 
		 ></img></a>
			</div>
		</div>
		<div style="clear:both" ></div>
		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)" >
		</div>
		<div id="BorderRight" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)" ></div>
		<div id="LoginBottom" class="Loginstatus" style="background-image:url(layout/images/global/general/box-bottom.gif)" ></div>
	</div>
	<div id="Loginbox" >
		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)" >
		</div>
		<div id="LoginTop" style="background-image:url(layout/images/global/general/box-top.gif)" ></div>
		<div id="BorderLeft" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)" ></div>
		<div id="LoginButtonContainer" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)">
			<div id="LoginButton">
				<a href="downloads.php"><img src="layout/images/global/buttons/downloadbutton1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/downloadbutton2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/downloadbutton1.gif'" 
		 ></img></a>
			</div>
		</div>
		<div style="clear:both" ></div>
		<div class="Loginstatus" style="background-image:url(layout/images/global/loginbox/loginbox-textfield-background.gif)" >
		</div>
		<div id="BorderRight" class="LoginBorder" style="background-image:url(layout/images/global/general/chain.gif)" ></div>
		<div id="LoginBottom" class="Loginstatus" style="background-image:url(layout/images/global/general/box-bottom.gif)" ></div>
	</div>

<?php endif; ?>

<div id='Menu'>
	<div id='MenuTop' style='background-image:url(layout/images/global/general/box-top.gif);'></div>
	<div id='news' class='menuitem'>
		<span onClick="MenuItemAction('news')">
			<div class='MenuButton' style='background-image:url(layout/images/global/menu/button-background.gif);'>
				<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(layout/images/global/menu/button-background-over.gif);'></div>
					<span id='news_Lights' class='Lights'>
						<div class='light_lu' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ld' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ru' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
					</span>
					<div id='news_Icon' class='Icon' style='background-image:url(layout/images/global/images/Golden_Newspaper.gif);'></div>
					<div id='news_Label' class='Label' style='background-image:url(layout/images/global/menu/label-news.gif);'></div>
					<div id='news_Extend' class='Extend' style='background-image:url(layout/images/global/general/plus.gif);'></div>
				</div>
			</div>
		</span>
		<div id='news_Submenu' class='Submenu'>
			<a href='sub.php?page=news'>
				<div id='submenu_latestnews' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_latestnews' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_latestnews' class='SubmenuitemLabel'>Latest News&nbsp;<img src="layout/images/global/images/new2.gif" width="30"></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='helpdesk.php'>
				<div id='submenu_latestnews' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_latestnews' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_latestnews' class='SubmenuitemLabel'>Ticket Support&nbsp;<img src="layout/images/global/images/aten.png" width="13"></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='changelog.php'>
				<div id='submenu_latestnews' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_latestnews' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_latestnews' class='SubmenuitemLabel'>Changelog</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
		</div>
	</div>
	<div id='account' class='menuitem'>
		<span onClick="MenuItemAction('account')">
			<div class='MenuButton' style='background-image:url(layout/images/global/menu/button-background.gif);'>
				<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(layout/images/global/menu/button-background-over.gif);'></div>
					<span id='account_Lights' class='Lights'>
						<div class='light_lu' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ld' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ru' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
					</span>
					<div id='account_Icon' class='Icon' style='background-image:url(layout/images/global/menu/icon-account.gif);'></div>
					<div id='account_Label' class='Label' style='background-image:url(layout/images/global/menu/label-account.gif);'></div>
					<div id='account_Extend' class='Extend' style='background-image:url(layout/images/global/general/plus.gif);'></div>
				</div>
			</div>
		</span>
		<div id='account_Submenu' class='Submenu'>
			<a href='myaccount.php'>
				<div id='submenu_accountmanagement' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_accountmanagement' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_accountmanagement' class='SubmenuitemLabel'>Account Management</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='register.php'>
				<div id='submenu_createaccountanddownload' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_createaccountanddownload' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_createaccountanddownload' class='SubmenuitemLabel'>Create Account</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='downloads.php'>
				<div id='submenu_downloadclient' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_downloadclient' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_downloadclient' class='SubmenuitemLabel'>Download Client</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
						<a href='premmyfeature.php'>
				<div id='submenu_downloadclient' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_downloadclient' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_downloadclient' class='SubmenuitemLabel'>Premium Features</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='serverrules.php'>
				<div id='submenu_downloadclient' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_downloadclient' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_downloadclient' class='SubmenuitemLabel'>Server Rules</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<?php if (!user_logged_in()): ?>
				<a href='sub.php?page=recover'>
					<div id='submenu_lostaccount' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div style='background-color:#131b33;'>
						<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_lostaccount' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
						<div id='ActiveSubmenuItemLabel_lostaccount' class='SubmenuitemLabel'>Lost Account?</div>
						<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					</div></div>
				</a>
			<?php endif; ?>
		</div>
	</div>
	<div id='community' class='menuitem'>
		<span onClick="MenuItemAction('community')">
			<div class='MenuButton' style='background-image:url(layout/images/global/menu/button-background.gif);'>
				<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(layout/images/global/menu/button-background-over.gif);'></div>
					<span id='community_Lights' class='Lights'>
						<div class='light_lu' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ld' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ru' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
					</span>
					<div id='community_Icon' class='Icon' style='background-image:url(layout/images/global/images/animoutfit1.gif);'></div>
					<div id='community_Label' class='Label' style='background-image:url(layout/images/global/menu/label-community.gif);'></div>
					<div id='community_Extend' class='Extend' style='background-image:url(layout/images/global/general/plus.gif);'></div>
				</div>
			</div>
		</span>
		<div id='community_Submenu' class='Submenu'>
			<a href='sub.php?page=charactersearch'>
				<div id='submenu_characters' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_characters' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_characters' class='SubmenuitemLabel'>Characters</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='auctionchar.php'>
				<div id='submenu_characters' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_characters' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_characters' class='SubmenuitemLabel'><font color="yellow">Chars Auction &nbsp;<img src="layout/images/global/images/hot2-fix.gif"></font></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='highscores.php'>
				<div id='submenu_highscores' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_highscores' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_highscores' class='SubmenuitemLabel'>Highscores</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='powergamers.php'>
				<div id='submenu_powergamers' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_creatures' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_creatures' class='SubmenuitemLabel'>Experience History</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='deaths.php'>
				<div id='submenu_deaths' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_creatures' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_creatures' class='SubmenuitemLabel'>Latest Deaths</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='killers.php'>
				<div id='submenu_killers' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_spells' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_spells' class='SubmenuitemLabel'>Kills Statistics</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='sub.php?page=houses'>
				<div id='submenu_houses' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_houses' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_houses' class='SubmenuitemLabel'>Houses</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='support.php'>
				<div id='submenu_downloadclient' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_downloadclient' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_downloadclient' class='SubmenuitemLabel'>Support List</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='guilds.php'>
				<div id='submenu_guilds' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_guilds' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_guilds' class='SubmenuitemLabel'>Guilds</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='market.php'>
				<div id='submenu_guilds' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_guilds' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_guilds' class='SubmenuitemLabel'>Item Market</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
		</div>
	</div>
	<div id='forum' class='menuitem'>
		<span onClick="MenuItemAction('forum')">
			<div class='MenuButton' style='background-image:url(layout/images/global/menu/button-background.gif);'>
				<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(layout/images/global/menu/button-background-over.gif);'></div>
					<span id='community_Lights' class='Lights'>
						<div class='light_lu' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ld' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ru' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
					</span>
					<div id='community_Icon' class='Icon' style='background-image:url(layout/images/global/menu/icon-forum.gif);'></div>
					<div id='community_Label' class='Label' style='background-image:url(layout/images/global/menu/label-forum.gif);'></div>
					<div id='community_Extend' class='Extend' style='background-image:url(layout/images/global/general/plus.gif);'></div>
				</div>
			</div>
		</span>
		<div id='forum_Submenu' class='Submenu'>
			<a href='forum.php'>
				<div id='submenu_forum' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_characters' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_characters' class='SubmenuitemLabel'><font color="green">Forum Boards</font></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div>
			</a>
		</div>
		
			<a href='forum.php?cat=3'>
				<div id='submenu_forum' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_characters' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_characters' class='SubmenuitemLabel'>Discussion</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div>
			</a>
		</div>
		
			<a href='forum.php?cat=4'>
				<div id='submenu_forum' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_characters' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_characters' class='SubmenuitemLabel'>Feedback</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
		</div>
	</div>
	<div id='wars' class='menuitem'>
		<span onClick="MenuItemAction('wars')">
			<div class='MenuButton' style='background-image:url(layout/images/global/menu/button-background.gif);'>
				<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(layout/images/global/menu/button-background-over.gif);'></div>
					<span id='community_Lights' class='Lights'>
						<div class='light_lu' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ld' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ru' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
					</span>
					<div id='community_Icon' class='Icon' style='background-image:url(layout/images/global/images/icon-wars.gif);'></div>
					<div id='community_Label' class='Label' style='background-image:url(layout/images/global/images/label-wars.gif);'></div>
					<div id='community_Extend' class='Extend' style='background-image:url(layout/images/global/general/plus.gif);'></div>
				</div>
			</div>
		</span>
		<div id='wars_Submenu' class='Submenu'>
						<a href='topguilds.php'>
				<div id='submenu_topguilds' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_guilds' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_guilds' class='SubmenuitemLabel'><font color="red">Top Guilds</font>&nbsp;<img src="layout/images/global/images/green-ico.gif"></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div>
			</a>
		</div>
		
						<a href='guildwar.php'>
				<div id='submenu_guildwar' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_guilds' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_guilds' class='SubmenuitemLabel'>Guild Wars&nbsp;<img src="layout/images/global/images/green-ico.gif"></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
		</div>
	</div>
	<div id='library' class='menuitem'>
		<span onClick="MenuItemAction('library')">
			<div class='MenuButton' style='background-image:url(layout/images/global/menu/button-background.gif);'>
				<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(layout/images/global/menu/button-background-over.gif);'></div>
					<span id='library_Lights' class='Lights'>
						<div class='light_lu' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ld' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ru' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
					</span>
					<div id='library_Icon' class='Icon' style='background-image:url(layout/images/global/images/Spellbook_of_Ancient_Arcana.gif);'></div>
					<div id='library_Label' class='Label' style='background-image:url(layout/images/global/menu/label-library.gif);'></div>
					<div id='library_Extend' class='Extend' style='background-image:url(layout/images/global/general/plus.gif);'></div>
				</div>
			</div>
		</span>
		<div id='library_Submenu' class='Submenu'>
			<a href='serverinfo.php'>
				<div id='submenu_worldquests' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_worldquests' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_worldquests' class='SubmenuitemLabel'>Server Info </div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div>
			</a>
		</div>
		
			<a href='gallery.php'>
				<div id='submenu_worldquests' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_worldquests' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_worldquests' class='SubmenuitemLabel'>Image Gallery</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div>
			</a>
			<a href='raids.php'>
				<div id='submenu_worldquests' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_worldquests' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_worldquests' class='SubmenuitemLabel'><font color="yellow">Raids</font></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
		</div>
		
			<a href='maps.php'>
				<div id='submenu_worldquests' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_worldquests' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_worldquests' class='SubmenuitemLabel'>Maps</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
		</div>
	</div>
	<div id='shops' class='menuitem'>
		<span onClick="MenuItemAction('shops')">
			<div class='MenuButton' style='background-image:url(layout/images/global/menu/button-background.gif);'>
				<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(layout/images/global/menu/button-background-over.gif);'></div>
					<span id='shops_Lights' class='Lights'>
						<div class='light_lu' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ld' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
						<div class='light_ru' style='background-image:url(layout/images/global/menu/green-light.gif);'></div>
					</span>
					<div id='shops_Icon' class='Icon' style='background-image:url(layout/images/global/images/Tibia_Coins.gif);'></div>
					<div id='shops_Label' class='Label' style='background-image:url(layout/images/global/menu/label-shops.gif);'></div>
					<div id='shops_Extend' class='Extend' style='background-image:url(layout/images/global/general/plus.gif);'></div>
				</div>
			</div>
		</span>
		<div id='shops_Submenu' class='Submenu'>
			<a href='buypoints.php'>
				<div id='submenu_cafepress' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_cafepress' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_cafepress' class='SubmenuitemLabel'><font color="yellow">Buy Points</font></div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
			<a href='shop.php'>
				<div id='submenu_cafepress' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
					<div style='background-color:#131b33;'>
					<div class='LeftChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_cafepress2' class='ActiveSubmenuItemIcon' style='background-image:url(layout/images/global/menu/icon-activesubmenu.gif);'></div>
					<div id='ActiveSubmenuItemLabel_cafepress2' class='SubmenuitemLabel'>Shop</div>
					<div class='RightChain' style='background-image:url(layout/images/global/general/chain.gif);'></div>
				</div></div>
			</a>
		</div>
	</div>
	<div id='MenuBottom' style='background-image:url(layout/images/global/general/box-bottom.gif);'></div>
</div>
</div>