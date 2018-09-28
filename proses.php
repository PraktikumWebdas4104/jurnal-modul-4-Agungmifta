<form action=" " method="post">
	<H1><marquee>ISI KUISONER DIBAWAH</marquee> </H1>
<input type="checkbox" name="Hobi[]" value="Futsal">Futsal<br/>
<input type="checkbox" name="Hobi[]" value="Basket">Basket<br/>
<input type="checkbox" name="Hobi[]" value="Berenang">Berenang<br/>
<input type="checkbox" name="Hobi[]" value="Balap">Balap<br/>
<input type="checkbox" name="Hobi[]" value="Memancing">Memancing<br/>
<form action="upload.php" method="post" enctype="multipart/form-data"><br/>
	select image for upload :
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" name="Upload Image" name="submit">
</form>
<input type="submit" name="submit" value="SAVE"><br/>

<?php 
if(isset($_POST['submit'])){
	foreach ($_POST['Hobi'] as $data) {

		echo $data ."<br/>";
	}
} 
?>
