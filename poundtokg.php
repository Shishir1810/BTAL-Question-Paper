<!DOCTYPE html>
<html>
<title>Pounds to Kilograms Weight Converter</title>
<body>

<h2>Weight Converter</h2>
<p>Type a value in the Pounds field to convert the value to Kilograms:</p>

<p>
  <label>Pounds</label>
  <input id="inputPounds" type="number" placeholder="Pounds" oninput="weightConverter(this.value)" onchange="weightConverter(this.value)">
</p>
<p>Kilograms: <span id="outputKilograms"></span></p>

<script>
function weightConverter(valNum) {
  document.getElementById("outputKilograms").innerHTML=valNum/2.2046;
}
</script>


</body>
</html>
