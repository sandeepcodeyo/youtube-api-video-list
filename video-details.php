<?php
include('header.php');
$link = $_GET['link'];
$title = $_GET['title'];
?>
<div class="col-sm-8">
	<div class="card">
		<div class="item">
			<h3 style="min-height: 30px;"><?php echo $title; ?></h3>
			<iframe class="video" width="100%" height="425px" src="//www.youtube.com/embed/<?php echo $link; ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<!-- https://www.youtube.com/watch?v=-vH2eZAM30s -->
<?php
include('footer.php');