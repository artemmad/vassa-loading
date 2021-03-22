<?php
    $pos_x = rand(0, 90)/100;
    $pos_y = rand(0, 90)/100;
    header("refresh: 4;");

?>
<html style="overflow:  hidden;">
<head></head>
	<body>
		<div id='text'>
			Hello, world!
		</div>

		<script language="JavaScript">
			var W = window.innerWidth;
			var H = window.innerHeight;
			elem = document.getElementById('text');
			elem.style.marginTop = H * <?= $pos_y;?>;
			elem.style.marginLeft = W * <?= $pos_x;?>;
		</script>

	</body>
</html>
