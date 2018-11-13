<h2>TEST</h2>
<form action="" method="POST">
  <input list="browsers" name="browser">
  <datalist id="browsers">
    <option value="Internet Explorer">IE
    <option value="Firefox">Panadol
    <option value="Chrome">Roger Federer
    <option value="Opera">
    <option value="Safari">
  </datalist>
  <input type="submit" name="btn">
</form>

<?php  
	if(isset($_POST['btn'])){
		$a = $_POST['browser'];
		echo "KQ: ".$a;
	}

?>