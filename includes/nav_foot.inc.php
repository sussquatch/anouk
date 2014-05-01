
<?php
/*
   	<ul class="nav">
		<li class="separator"></li><li><a href="index.html">HOME</a></li>
		<li class="separator"></li><li class="current-page"><a href="testimononials.html">TESTIMONIALS</a></li>
		<li class="separator"></li><li><a href="press.html">PRESS</a></li>
		<li class="separator"></li><li><a href="policies.html">POLICIES</a></li>
		<li class="separator"></li><li><a href="links.html">LINKS</a></li>
		<li class="separator"></li>
	</ul>
*/	?>


   	<ul class="nav"> <!-- Note the reverse order for css's float right -->
   		<li class="separator"></li>
   		<li><a <?php if ($navName[0] == "POLICIES") echo "class=\"active-navlink\"" ?>href="<?php echo $footNavPath; ?>policies.php" >POLICIES</a></li>
   		<li class="separator"></li>
   		<li><a <?php if ($navName[0] == "PRESS") echo "class=\"active-navlink\"" ?>href="<?php echo $footNavPath; ?>press.php" >PRESS</a></li>
		<li class="separator"></li>
		<li><a <?php if ($navName[0] == "TESTIMONIALS") echo "class=\"active-navlink\"" ?>href="<?php echo $footNavPath; ?>testimonials.php" >TESTIMONIALS</a></li>
  		<li class="separator"></li>
  		<li><a <?php if ($navName[0] == "HOME") echo "class=\"active-navlink\"" ?>href="<?php echo $footNavPath; ?>index.php" >HOME</a></li>
  		<li class="separator"></li>
 	</ul>

 