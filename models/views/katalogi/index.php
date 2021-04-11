<h1></h1>

<link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header"> 
            <a class="navbar-brand" href="#">Catalogs:</a>
        </div>
        <ul class="nav navbar-nav">
            <?php foreach ($data as $row): ?>
            <li><a href="<?= 'catalogs/index' . '/id/' . $row['ID']?>"> <?= $row['Name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>