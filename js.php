<html>
<head>
<script>
function maashesapla()
{
  var cgun=document.getElementById('calgun').value;
  var yev=document.getElementById('yevmiye').value;
  var hesapla=cgun*yev;
  document.getElementById('maas').value=hesapla;



}
</script>
</head>
<body>
<form name="hesapla" action="" method="post">
  Çalıştığı gün:<input type="text" name="calgun" id="calgun" value="" 
  onkeyup="maashesapla()"><br> <br> 
 Yevmiyesi:<input type="text" name="yevmiye" id="yevmiye" value=""  onkeyup=
  "maashesapla()"><br> <br>
 Maaş:<input type="text" name="maas" id="maas" value=""  onkeyup=
  "maashesapla()"><br> <br>
 <input type ="submit" name="gonder" id="gonder" value="Gönder" ><br>

</body>
</html>