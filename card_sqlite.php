<?php

$db = new PDO("sqlite:card_data.db");
$res = $db->query("select * from badminton");

$db = null;
?>

<?php foreach($res as $value): ?>
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <!-- <a class="text-dark" href="<?php echo $value['url']?>"> -->
        <div class="card-body">
            <p>
               <?php
                    echo '商品名';
                    echo '<span class="d-block">'.$value['name'].'</span>';
                    echo '<span class="d-block">'.$value['price'].'</span>';
               ?>
               <?php
                    echo '<a class="btn btn-outline-primary mt-2" href='.$value['url'].'>amazon</a>';
               ?>
            </p>
        
        </div>
        <!-- </a> -->
    </div>
</div>
<?php endforeach; ?>

