
<?php include __DIR__ . '../database.php'; ?>



<div style="height: 90vh;">

    <div id="card" class="container">
        <ul class="reset_list">
            <li class="m-2">
                <?php

                    foreach( $database as $db) {
                        echo $db['title'];
                    }

                ?>
            </li>
        </ul>
    </div>

</div>