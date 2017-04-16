<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
        <?php
        foreach($images as $image) {
            echo '<img src="'.$image.'" height="300"/>';
        }
        ?>
	</div>
</div>


