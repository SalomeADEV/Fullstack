<?php
require_once('header.php');
?>
<body>


Mise à jour/Upload

<?php

  $stmt = $conn->prepare('SELECT * FROM disc');

  $stmt->execute();
  
  $result = $stmt->fetchAll();
  ?>

<form method=get>
<label for="record">Record :</label>
  
  <select name="a" id="record">
<?php 
  
  foreach($result as $record){
  echo '<option value="'.$record['disc_id'].'">'.$record['disc_title'].'</option>';
  }

?>   
    <select><br> 
    <button type='submit'>choisir le disque</button><br> 
</form>
<?php 

$stock = $_GET['a'];

$stmt = $conn->prepare('SELECT * FROM disc WHERE disc_id=:id');
$stmt->bindValue(':id',$_GET['a']);
$stmt->execute();

$result = $stmt->fetch();

?>

  <form action='script_upload.php' method='POST' enctype="multipart/form-data">
      
      <label class='mt-2' for='title'>Titre :</label><br><input type='text' id='title' name='title' value="<?php echo $result['disc_title'] ?>"><br>
  
      <!-- <label for="record">Record :</label> -->
  
          <!-- <select name="a" id="record"> -->
         <?php 
  
        //   foreach($result as $record){
        //   echo '<option value="'.$record['record_id'].'">'.$record['record_name'].'</option>';
        //   }
  
      ?>    

  

      <label class='mt-2' for='year'>Année :</label><br><input type='text' id='year' name='year' value="<?php echo $result['disc_year'] ?>"><br>
      <label class='mt-2' for='genre'>Genre :</label><br><input type='text' id='genre' name='genre' value="<?php echo $result['disc_genre'] ?>"><br>
      <label class='mt-2' for='label'>label :</label><br><input type='text' id='label' name='label' value="<?php echo $result['disc_label'] ?>"><br>
      <label class='mt-2' for='price'>Prix :</label><br><input type='text' id='price' name='prix' value="<?php echo $result['disc_price'] ?>"><br>
  
      <label class='mt-2' for='jacquette'>Jacquette d'album :</label><br><input type='file' id='jacquette' name='picture'><br>
            <input type=hidden name='savepicture' value="<?php echo $result['disc_picture'] ?>">
            <input type=hidden name='saveid' value="<?php echo $result['disc_id'] ?>">
      <button type='submit'>upload</button>
      </form>
     </select>


















</body>
</html>