<?php $current = basename($_SERVER['PHP_SELF']);?>
<ul>
	<li <?php if($current == 'p1.php') {echo 'class="current"';} ?>><a href="p1.php">Page 1</a></li>
	<li <?php if($current == 'p2.php') {echo 'class="current"';} ?>><a href="p2.php">Page 2</a></li>
    <li <?php if($current == 'p3.php') {echo 'class="current"';} ?>><a href="p3.php">Page 3</a></li>
</ul>

