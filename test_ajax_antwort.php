 <!DOCTYPE html>
<html lang="de">
 <head>
  <meta charset="UTF-8">
  <title>JSON - Test</title>

  <script>
  // Ein XMLHTTP-Request-Objekt erzeugen
  var xhr = new XMLHttpRequest();

  // Den HTML-Buttons eine JavaScript-Funktion zuweisen
  window.addEventListener("load", function () {
   var buttons = document.getElementById("buttons").getElementsByTagName('input');
   for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", zeigeDaten);
   }
  });

  function zeigeDaten(event) {
   // Daten über GET senden
   xhr.open("GET", "antwort.php?person=" + event.target.value);
   xhr.send(null);

   // Auf eine Antwort warten
   xhr.onreadystatechange = function () {

   // Daten werden empfangen
   if (xhr.readyState == 4 && xhr.status == 200) {

     // Die Daten in einzelne Objekte zerlegen
     var obj = JSON.parse(xhr.responseText);

     // Die Eingabefelder mit den Daten befüllen
     document.getElementById("name").value = obj.name;
     document.getElementById("strasse").value = obj.strasse;
     document.getElementById("mobil").value = obj.mobil;
    }
   }
  }
  </script>

 </head>
<body>

<p><label>Name: <input type="text" id="name"></label></p>
<p><label>Straße: <input type="text" id="strasse"></label></p>
<p><label>Mobil: <input type="text" id="mobil"></label></p>

<p id="buttons">
<input type="button" value="John">
<input type="button" value="Mandy">
<input type="button" value="Paul">
<input type="button" value="Sandy">
</p>

</body>
</html> 