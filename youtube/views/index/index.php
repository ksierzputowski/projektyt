

<style>
<link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />
</style>





<table id="avaiable_prod">
    
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Symbol</th>
    <th>Img</th>
  </tr>
  <?php foreach ($data as $row): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['price'] ?></td>
    <td><?= $row['description'] ?></td>
    <td><?= $row['symbol'] ?></td>
    <td><?= $row['img'] ?></td>
    
  </tr>
   <?php endforeach; ?>
</table><br>


<a class="btn btn-primary" href="<?= URL . 'SortProduct'?>" role="button">Enter to sort products</a>