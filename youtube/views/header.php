<!<!doctype html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<html>
    <head>
        <title> The Greatest app </title>
        <link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />
       
    </head>
<body>
    
    <?php Session::init(); ?>
    
 
    
    <div class="header" style="font-family:verdana;">

        <div id="head1" class="w3-container">
  <div class="row">
        <div class="col">
       <a class="c" href="<?= URL; ?>index">All products</a>
        </div>
      <div class="col">
       <a class="c" href="<?= URL; ?>insert">Insert products</a>
      </div>
      <div class="col">
          <a class="c" href="<?= URL; ?>katalogi">Catalogs</a>
      </div>
       <?php
       if (Session::get('loggedIn') == true ):?>
       <a class="c" href="<?= URL; ?>dashboard/logout">Logout</a>
       <?php else: ?>
       <div class="col">
       <a class="c" href="<?= URL; ?>login">Log in</a>
       </div>
       <?php endif; ?>
  </div>
    </div>
    </div>
    <div id="content">
        <!-- tresc wpisana w tym miejsciu wyskoczy pod headerem -->
   
