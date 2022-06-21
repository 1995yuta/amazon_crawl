<?php
try {
    $db = new PDO('mysql:dbname=db;host=127.0.0.1;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}

$records = $db->query("SELECT * FROM items${i}");
?>

<?php
    $stmt = $db->query("SELECT * FROM items${i}");
?>

<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <p>
                <?php
                    
                    while ($record = $records->fetch()) {
                        echo '商品名';
                        echo '<span class="d-block">'.$record['name'].'</span>';
                        echo '<span class="d-block">'.$record['price'].'</span>';
                    }
                ?>
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <?php
                        foreach ($stmt as $row) {
                            echo '<a href='.$row['url'].' class="btn btn-sm btn-outline-secondary text-primary">amazon link</a>';
                        }
                    ?>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
            </div>
        </div>
    </div>
</div>