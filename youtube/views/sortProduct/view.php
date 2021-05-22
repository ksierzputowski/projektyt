
<style>

    <link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />

</style>
<div class="conteiner">
    
    
<form action="sortProduct/run" method="POST">
   
    <div class="row" id="row_form_placing">
        <div class="col-12" id="col_form_placing">
             <p>Enter one of Products:</p>
<?php foreach ($data as $row): ?>
<input type="radio" id="mproducts" name="product_id" value="<?=$row['id']?>">
  
<label for="<?=$row['name']?>"><?= $row['name'] ?></label><br>

    <?php endforeach;?>
        </div>
    </div>
    
    <div class="row" id="row_form_placing">
        <div class="col-12" id="col_form_placing">
            <p>Choose category:</p>

<input type="radio" id="categorys" name="category_id" value="1">
<label for="category">Męskie bluzy</label><br>

<input type="radio" id="categorys" name="category_id" value="2">
<label for="category">Męskie koszulki</label><br>

<input type="radio" id="categorys" name="category_id" value="3">
<label for="akcesoria">Akcesoria</label><br>
 

 </div>
    </div>
    <input type="submit" value="submit" name="submit"/>
</form>