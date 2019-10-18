<?php
?>
<div class="col-sm-4">
	<div class="card">
		<div class="item">
			<?php
			$a = "{{videoid}}";
			$b = "{{title}}";
			echo '<a href="video-details.php?link=' . $a . '&title='. $b .'">
			<img src="https://img.youtube.com/vi/{{videoid}}/sddefault.jpg" style="width: 100%;">
			</a>';
			?>
			<h5 style="min-height: 30px;">{{title}}</h5>
		</div>
	</div>
</div>
<!-- https://www.youtube.com/watch?v=-vH2eZAM30s -->