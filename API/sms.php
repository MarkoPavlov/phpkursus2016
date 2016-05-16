<html>
<head>
<meta http-equiv="Content-Type" 
content="text/html; charset=utf-8">
<title>SMS saatmine</title>
</head>

<script language="javascript" type="text/javascript">
  function textCounter( field, countfield, maxlimit ) {
    if ( field.value.length > maxlimit )
    {
      field.value = field.value.substring( 0, maxlimit );
      alert( 'SMS voib olla kuni 160 symbolit pikk' );
      return false;
    }
    else
    {
      countfield.value = maxlimit - field.value.length;
    }
  }
</script>

<h3>SMS saatmine by Creature</h3>
  <form name="sms" action="<?php  
  echo $_SERVER['SCRIPT_NAME']; ?>" method="get">
  <input type="text" name="to" value="372"> 
  (kellele. nt. 37255522543)<br>
  <input type="text" name="from" value="TMK"> 
  (kellelt nt. TMK. Max 11 tÃ¤hte)<br>
  <br>
  <textarea NAME="message" ROWS="6" COLS="62" 
  onkeypress="textCounter(this,this.form.counter,160);">
  <?php  echo $_GET['message']; ?></textarea><br>
  <input type="text" name="counter" 
  maxlength="3" size="3" value="160" 
  onblur="textCounter(this.form.counter,this,160);"><br>
  <input type="submit" name="nupp" value="send">
</form>


<?php 

if ($_GET['nupp'] == "send") 
{
  $message=urlencode(substr($_GET['message'], 0, 160));
  $to=urlencode($_GET['to']);
  $from=urlencode(substr($_GET['from'], 0, 10));

  $answer = file_get_contents("http://panel.smspoint.ee/
  gateway/2d3a9wert3464rterta7b7348/api.v1/send?phone=$to&
  sender=$from&  message=$message&output=json");

  echo "Sent response code from server: ". $answer ."<br>";    
  echo 'OK response code from server:: 
  {"submitted":true,"id":"
  c0707557a85b10032111376af1a3bd09"}<br>';
  echo "Sent to: $to, from $from, message: $message";
  echo "<h3>Saadetud!</h3> Iga SMS on 0,039 âŦ TMKle.";

}

?>

<p>
<a href=http://panel.smspm.com/et/>
http://panel.smspm.com/et/</a>
</body>
</html> 	Rakendus töötab paremini uues aknas.
Ava uues aknas:
Näide API/sms/send_sms.php
või tõmba omale kood
Iseseisev töö

Valida iseseisev töö mitme ülesande hulgast.

Lisanäited: API/yl_api_google_map.txt | API/yl_api_google_chart.txt | API/yl_api_openid.txt |
Kood
	Töötava näite vaade
API (Google map)

Teha järgmine ülesanne.

Google API loeb CSV või XML failist 
välja positsioonid. 
Vähemalt 10.

Ja siis näidatakse neid kaardil. 
Peale klikkides näidatakse lisainfot.

Punase täpi asemel kaardil peaks tulema 
kaardile asjakohane logo. 
Nt. bensujaamade puhul nende logo.

NÄITED

Statoilid:
http://www.statoil.ee/11396
Kiiruskaamerad:
http://kaamerad.eu/
kiiruskaamerate-asukohad/eesti
Süntaks:
http://code.google.com/apis/maps/
documentation/javascript/basics.html


ÜLESPANEK

SVNrepo\PHP\API\kasutajanimi\
map.html
data.xml
logo.jpg


TÄHTAEG

2 nädalat 