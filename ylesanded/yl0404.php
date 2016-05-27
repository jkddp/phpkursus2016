<br>Ülesanne 0404
<br>
<br>
<br>Tee vorm <form> tagiga kangelase andmete sisestamiseks. Pange kogu vorm ka tabelisse. Paigutage lahtrite kirjelduse esimesse veergu ja lahtrid teise veergu. Nagu on näidatud siin. http://students.tmk.edu.ee/php/materjal/php_database.php#Sisestusvorm
<br>Nimi (<input type=text>)
<br>Klass (<select>, <options>)
<br>Rass (<select>, <options>)
<br>Sugu (<input type=radio>)
<br>Lemmikloom kaasas (<input type=checkbox>)
<br>Kirjeldus (<textarea></textarea>)
<br>Submit nupp <input type=submit>
<br>Vorm kinni.
<br>
Vastus 0404<br>
<br>
<?php 
echo '
<html> 
<head> 
<title>Kangelase andmed</title> 
</head> 
<body>
<form method="post">
<table border="1" cellpadding="2px"> 
	<tr> 
  		<td>Nimi:</td> 
  		<td><input type="text" name="name" value="Sisesta kangelase nimi"style="width:250px"></td> 
	</tr> 
	<tr> 
  		<td>Klass:</td> 
 		<td><select name="class" style="width:250px"> 
  			<option></option> 
 			<option>Klassikaline kangelane</option> 
  			<option>Tuleviku kangelane</option> 
  			<option>Mineviku kangelane</option> 
  			<option>Superkangelane</option> 
 			</select></td> 
	</tr> 
	<tr> 
  		<td>Rass:</td> 
  		<td><select name="race" style="width:250px"> 
  			<option></option> 
 			<option>Europiidne</option> 
  			<option>Mongoliidne</option> 
			<option>Negriidne</option>
 			</select></td>
	</tr> 
	<tr> 
  		<td>Sugu:</td> 
  		<td><input type="radio" name="gender" value="female">Naine
			<input type="radio" name="gender" value="male">Mees</td> 
	</tr> 
	<tr> 
  		<td>Lemmikloom kaasas:</td> 
  		<td><input type="checkbox" name="dog">Delfiin<br />
			<input type="checkbox" name="horse">Panda<br />
			<input type="checkbox" name="eagle">Rai<br />
			<input type="checkbox" name="rat">Punane panda</td> 
	</tr> 
	<tr> 
  		<td>Kirjeldus:</td> 
 		<td><textarea name="description" cols="24" rows="8">Kangelase kirjeldus</textarea></td> 
	</tr> 
</table> 
<input type="submit" name="submit" value="Loo kangelane"> 
</form> 
</body> 
</html>
';
?>