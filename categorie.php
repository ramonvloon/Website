<html>
<body>
    <?
    include('layers.php');
    ?>
<div class="style2" id="inhoud" style="">
<form enctype="multipart/form-data" action="fotoscat.php" method="POST">
Bekijk de foto's per categorie:<br />
<select id="categorien" name="categorien">
<option selected>Categorie:</option>
<option value="tuinen">Tuinen</option>
<option value="badkamer">Badkamer</option>
<option value="aanbouw">Aanbouw</option>
<option value="deuren">Deuren</option>
<option value="garages">Garages</option>
<option value="slaapkamers">Slaapkamers</option>
</select>
<input type="submit" value="Bekijk" />
</form>
</div>
</body>
</html>