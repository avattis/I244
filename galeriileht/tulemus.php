<div id="wrap">


        <?php

            if (!empty($_POST)) {
                $votes = array();
                if (!empty($_POST["image"])) {
                    $votes[] = "Valisid pildi number {$_POST["image"]}";
                }
            }else {
                $votes[] = "Hääletamiseks vali pilt";
                }
        echo "<h3>Valiku tulemus</h3>";
        if(!empty($votes)){
            foreach($votes as $vote){
                echo $vote;
                echo '<br/>';
            }
        }
        ?>
</div>
