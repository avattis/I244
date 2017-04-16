
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="?mode=tulemus" method="POST">
		<?php

        $i = 1;
        foreach($images as $image) {
            echo '<p>';
            echo '<label for="p'.$i.'">';
            echo '<img src="'.$image.'" alt="'.$image['alt'].'" height="100"/>';
            echo '</label>';
            echo  '<input type="radio" value="'.$i.'" id="p'.$i.'" name="pilt">';
            echo '</p>';
            $i = $i+1;
		}

        echo '<br/>';
        echo '<input type="submit" value="Valin">';
		?>

	</form>
</div>
