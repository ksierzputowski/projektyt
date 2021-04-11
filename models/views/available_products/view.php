
<?php foreach ($data as $row): ?>
    <a href="<?= 'catalogs/index' . '/id/' . $row['ID']?><?= 'products/index' . 
        '/id/' . $row['id_products'] ?>"> <?= $row['name'] ?></a>
<?php endforeach; ?>

    
    
  