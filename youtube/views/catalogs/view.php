<style>

    <link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />

</style>


<p class="p"><?= reset($data)['Name'] ?></p><br>

<div class="conteiner-lg">
    <div class="row">
        
    <?php foreach ($data as $row): ?>
<div class="col-6">
        
            
                <a id="katalogs_product" href="<?= URL . 'products/index' . '/id/' . $row['category_id'] . '/' . $row['product_id'] ?>"> 

                    <img src="<?= URL; ?>/images/<?= $row["img"] ?>" alt="alt" style="width:400px;height:300px;"/><br>
                    <?= $row['name'] ?><br>
                    <?= $row['price'] . "$" ?></a>
        </div>    
<?php endforeach ?>
  
        </div>
 </div>