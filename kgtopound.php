<!DOCTYPE html>
<html>
<title>Kilograms to Pounds Weight Converter</title>
<body>

<h2>Weight Converter</h2>
<p>Type a value in the Kilograms field to convert the value to Pounds:</p>

<p>
  <label>Kilograms</label>
  <input id="inputKilograms" type="number" placeholder="Kilograms" oninput="weightConverter(this.value)" onchange="weightConverter(this.value)">
</p>
<p>Pounds: <span id="outputPounds"></span></p>

<script>
function weightConverter(valNum) {
  document.getElementById("outputPounds").innerHTML=valNum*2.2046;
}
</script>

</body>
</html>