
<?php include __DIR__ . '/../utility/database.php'; ?>



<div class="bg-custom-dark-blue p-5">

    <div class="container">
        <h2 class="text-center text-white">Stampa in PHP</h2>
        
        <ul class="reset_list row d-flex justify_center">
            <?php 
                foreach( $database as $db) {
            ?>
            <li class="m-3 pt-4 pb-5 col-3 text-white bg_custom_blue text-center">
                
                <img class="h-75 w-100" src="<?php echo $db['poster']; ?>" alt="">
                <div class="text-uppercase p-2 fw-bold fs-5">
                    <?php
                        echo "<div>" . $db['title'] . "</div>";
                    ?>  
                </div>
                <div>
                    <?php
                        echo "<div>" . $db['author'] . "</div>";
                    ?>
                </div>  
                <?php
                    echo "<div>" . $db['year'] . "</div>";
                ?>
                
            </li>
            <?php 
                }
            ?>
        </ul>
        
    </div>

</div>