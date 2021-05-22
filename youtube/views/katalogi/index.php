</div>
<h1></h1>

<link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="conteiner">
<nav class="navbar navbar-default">
    
         

            <a class="navbar-brand" href="#"></a>
            <div class="row">
            <ul class="nav navbar-nav">
                <?php foreach ($data as $row): ?>
                <li><a class="col" href="<?= 'catalogs/index' . '/id/' . $row['ID'] ?>"> 
                            <?= $row['Name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        
            </div>
    
</nav>
</div>


<div class="conteiner" id="photokatalogi">
<div class="row">
    <div class="col-12">
        
    </div>
</div>
</div>


