<!DOCTYPE html>
<?php Hier geändert ?>
<?php NEW Änderung ?>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>AxxG - AJAX Beispiel</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type="text/javascript">
function clickPHPtoJS(event){
        // Minimal:-)
   $.ajax({
        url: "sendInfo.php",
      type: "POST",
        success: function(data) { clickPHPtoJSResponse(data); }
   });
}
 
function clickPHPtoJSResponse(data) {
   // Antwort des Server ggf. verarbeiten
   var response = $.parseJSON(data);
   var nummer = response.nr;
   var blog = response.blog;
   alert("Mein Ergebnis bei AxxG-AJAX: " + nummer);
   alert("Mein Ergebnis bei AxxG-AJAX: " + blog);
}

function clickRestart(event) {
    var start = document.getElementById("btnRestart").value;    
 
   alert("Werte: " + start);
 return start;

}


    </script>
  </head>
  <body>
      <?php
      //$wert = echo "<script></script>";
      
      ?>
      
    <button type="button" id="myClickBtn" onclick="clickPHPtoJS(event)">go!</button> 
    <button type="button" id="btnRestart" value = "1" onclick="clickRestart(event)">Restart</button> 
    <button type="button" id="btnStop" value = "0" onclick="clickStop(event)">Stop</button> 
  </body>
</html>


<!-- OK -->
<!--<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "gethint.php?q="+str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form>
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>-->