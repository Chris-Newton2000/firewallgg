<?php 
$httprequest = file_get_contents("https://firewall.hyperz.net/api/checkuser/<?php echo $input ?>");
$input = $_POST['userid'];
?>
<html>
<body>
User ID<input type="text" name="userid"><br>
<input type="submit">
</form>
</body>
</html>

