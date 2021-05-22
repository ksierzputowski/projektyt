
<style>

    <link rel ="stylesheet" href ="<?= URL; ?>public/css/default.css" />

</style>
<form action="insert/index" method="post">
    
        
    <label for="name">Name:</label>
    <input type="text" class="form_view" id="fname" name="name" placeholder="Enter name of item..">
    
    <label for="price">Price:</label>
    <input type="number" class="form_view" id="price" name="price" placeholder="Enter price..">
    
    <label for="description">Description:</label>
    <input type="text" class="form_view" id="description" name="description" placeholder="Let's describe it">
    
     <label for="symbol">Symbol:</label>
    <input type="text" class="form_view" id="symbol" name="symbol" placeholder="Item sybol..">
    
    <label for="img">Img:</label>
    <input type="number" class="form_view" id="img" name="img" placeholder="Select photo">
    
   
    <input type='submit' name='submit' value='Submit'>
    <input type="reset" value="Reset">
    
 

</form>
