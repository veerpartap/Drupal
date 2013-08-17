<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/user_bar.css";</style>

<div id="header_navigation"> 

		<div id="user-bar">
		  <div>
		    <?php print $name; // Display username field ?>
		    <?php print $pass; // Display Password field ?>
		    <?php print $submit; // Display submit button ?>
		    <?php print $rendered; // Display hidden elements (required for successful login) ?>
		  </div>
		</div>

</div>
<div style="clear:both;"></div>
