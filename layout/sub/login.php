<center><h2>Login / Register</h2>
<div class="inner">
	<form action="login.php" method="post">
	<ul id="login">
		<div>
			Userame: <br>
			<input type="text" name="username">
		</div>
		<div>
			Password: <br>
			<input type="password" name="password">
		</div>
		<div>
			<input type="submit" value="Log in">
		</div>
		<?php
			/* Form file */
			Token::create();
		?><br></br>
	<div><a href="register.php"><img src="layout/images/global/buttons/newacc1.gif" 
  		  onMouseOver="this.src='layout/images/global/buttons/newacc2.gif'" 
  		  onMouseOut="this.src='layout/images/global/buttons/newacc1.gif'" 
		 ></img></a></div><br>
	<font size="1">- Lost <a href="recovery.php?mode=username">username</a> or <a href="recovery.php?mode=password">password</a>?</font>
	</ul>
	</form>
</div></center