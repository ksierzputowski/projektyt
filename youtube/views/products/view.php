<style>

    <link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />

</style>

<div class="conteiner" >
    <div class="row">

        <?php foreach ($data as $row): ?>
            <div class="col-5">    
                <p class="s"> <?= $row['name'] ?></p><br>
                <img src="<?= URL; ?>/images/<?= $row["img"] ?>" alt="alt" style="width:600px;height:450px;"/><br>
            </div>
        <div class="col" id="productdescription">
                <div class="col-md-12">   
                    Price: <?= $row['price'] ?>$
                </div><br>
                <div class="col-md-12">     
                    Description: <?= $row['description'] ?>.
                </div><br>
                <div class="col-md-12">   
                    Symbol: <?= $row['symbol'] ?>.
                </div><br>
            </div>

        <?php endforeach ?>
    </div>
</div>