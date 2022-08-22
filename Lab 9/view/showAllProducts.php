<!DOCTYPE html>
<html>
<style>
th,td {
  padding: 5px;
}
</style>
<body>

<h2>The XMLHttpRequest Object</h2>

<form action=""> 
  <select name="products" onchange="showProduct(this.value)">
    <option value="">Select a product:</option>
    <option value="1">T-Shirt</option>
	<option value="4">Jercy</option>
    <option value="5">Punjabi</option>
	<option value="6">Kit</option>
    
  </select>
</form>
<br>
<div id="txtHint">Product info will be listed here...</div>

<script>
function showProduct(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getproduct.php?q="+str);
  xhttp.send();
}
</script>
</body>
</html>