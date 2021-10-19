<div class="inner">
	<div class="SmallBox">
				<div class="MessageContainer">
					<div class="BoxFrameHorizontal" style="background-image:url(layout/images/global/images/box-frame-horizontal.gif);"></div>
					<div class="BoxFrameEdgeLeftTop" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
					<div class="BoxFrameEdgeRightTop" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
					<div class="Message">
						<div class="BoxFrameVerticalLeft" style="background-image:url(layout/images/global/images/box-frame-vertical.gif);"></div>
						<div class="BoxFrameVerticalRight" style="background-image:url(layout/images/global/images/box-frame-vertical.gif);"></div>
<center><h2>Welcome, <?php echo $user_data['name']; ?>.</h2></center>

</div><div class="BoxFrameHorizontal" style="background-image:url(layout/images/global/images/box-frame-horizontal.gif);"></div>
						<div class="BoxFrameEdgeRightBottom" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
						<div class="BoxFrameEdgeLeftBottom" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
				</div></div>
<br>
<div class="inner">
	<div class="SmallBox">
				<div class="MessageContainer">
					<div class="BoxFrameHorizontal" style="background-image:url(layout/images/global/images/box-frame-horizontal.gif);"></div>
					<div class="BoxFrameEdgeLeftTop" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
					<div class="BoxFrameEdgeRightTop" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
					<div class="Message">
						<div class="BoxFrameVerticalLeft" style="background-image:url(layout/images/global/images/box-frame-vertical.gif);"></div>
						<div class="BoxFrameVerticalRight" style="background-image:url(layout/images/global/images/box-frame-vertical.gif);"></div>
	<ul>
		<?php
		// If admin
		if (is_admin($user_data)) {
		?>
		<?php
		$new = 0;
		$cat = 4; //Category ID for feedback section
		$threads = mysql_select_multi("SELECT `id`, `player_id` FROM `znote_forum_threads` WHERE `forum_id`='$cat' AND `closed`='0';");
		if ($threads !== false) {
			$staffs = mysql_select_multi("SELECT `id` FROM `players` WHERE `group_id` > '1';");
			
			foreach($threads as $thread) {
				$response = false;
				$posts = mysql_select_multi("SELECT `id`, `player_id` FROM `znote_forum_posts` WHERE `thread_id`='". $thread['id'] ."';");
				foreach($posts as $post) {

					foreach ($staffs as $staff) {
						if ($post['player_id'] == $staff['id']) $response = true;
					}
				}

				if (!$response) $new++;
			}
		}
		?><center>
		<div>
			<a href='forum.php?cat=4'>Feedback: [<?php echo $new; ?>] new</a>
		</div>
		<br>
		<div>
			<a href='admin.php'>Admin Page</a>
		</div>
		<div>
			<a href='admin_news.php'>Admin News</a>
		</div>
		<div>
			<a href='admin_gallery.php'>Admin Gallery</a>
		</div>
		<div>
			<a href='admin_skills.php'>Admin Skills</a>
		</div>
		<div>
			<a href='admin_reports.php'>Admin Reports</a>
		</div>
		<div>
			<a href='admin_shop.php'>Admin Shop</a>
		</div>
		<?php
		$new = 0;
		$cat = 4; //Category ID for feedback section
		$threads = mysql_select_multi("SELECT `id`, `player_id` FROM `znote_forum_threads` WHERE `forum_id`='$cat' AND `closed`='0';");
		if ($threads !== false) {
			$staffs = mysql_select_multi("SELECT `id` FROM `players` WHERE `group_id` > '1';");
			
			foreach($threads as $thread) {
				$response = false;
				$posts = mysql_select_multi("SELECT `id`, `player_id` FROM `znote_forum_posts` WHERE `thread_id`='". $thread['id'] ."';");
				if ($posts !== false) {
					foreach($posts as $post) {
						foreach ($staffs as $staff) {
							if ($post['player_id'] == $staff['id']) $response = true;
						}
					}
				}

				if (!$response) $new++;
			}
		}
		?>
		<div>
			<a href='forum.php?cat=4'>Feedback: [<?php echo $new; ?>] new</a>
		</div>
		<br>
		<?php
		}
		// end if admin
		?><center>
		<div><a href="myaccount.php"><img src="layout/images/global/buttons/myacc1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/myacc2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/myacc1.gif'" 
		 ></img></a></div><br>
		<div><a href="createcharacter.php"><img src="layout/images/global/buttons/char1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/char2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/char1.gif'" 
		 ></img></a></div><br>
		<div><a href="changepassword.php"><img src="layout/images/global/buttons/changepass1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/changepass2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/changepass1.gif'" 
		 ></img></a></div><br>
		<div><a href="settings.php"><img src="layout/images/global/buttons/settings1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/settings2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/settings1.gif'" 
		 ></img></a></div><br>

		<div><a href="logout.php"><img src="layout/images/global/buttons/logout1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/logout2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/logout1.gif'" 
		 ></img></a></div></center>
	</ul>
	</div>
						<div class="BoxFrameHorizontal" style="background-image:url(layout/images/global/images/box-frame-horizontal.gif);"></div>
						<div class="BoxFrameEdgeRightBottom" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
						<div class="BoxFrameEdgeLeftBottom" style="background-image:url(layout/images/global/images/box-frame-edge.gif);"></div>
					</div>
				</div>

</div>
