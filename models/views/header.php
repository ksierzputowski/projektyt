<!<!doctype html>
<html>
    <head>
        <title> The Greatest app </title>
        <link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />
       
    </head>
<body>
    
    <?php Session::init(); ?>
    
    <div id="header" style="font-family:verdana;">
       MENU:
       <br/>
       <a href="<?= URL; ?>index">Index</a>
       <a href="<?= URL; ?>help">Help</a>
       <a href="<?= URL; ?>katalogi">Katalogi</a>
       <?php
       if (Session::get('loggedIn') == true ):?>
       <a href="<?= URL; ?>dashboard/logout">Logout</a>
       <?php else: ?>
       <a href="<?= URL; ?>login">Login</a>
       <?php endif; ?>
       
    </div>
    <div id="content">
        <!-- tresc wpisana w tym miejsciu wyskoczy pod headerem -->
   
