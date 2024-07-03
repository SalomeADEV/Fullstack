<?php
require_once('header.php');
?>
<body>

Suppression/Delete

<?php

  $stmt = $conn->prepare('SELECT * FROM disc');

  $stmt->execute();
  
  $result = $stmt->fetchAll();
  ?>

<form action='script_delete.php' method=POST>
<label for="record">Record :</label>
  
  <select name="Nombredisque" id="record">
<?php 
  
  foreach($result as $record){
  echo '<option value="'.$record['disc_id'].'">'.$record['disc_title'].'</option>';
  }

?>   
    <select><br> 
    <button type='submit'>choisir le disque</button><br> 
</form>


  </body>
  </html>

