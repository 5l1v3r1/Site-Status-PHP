<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.error {
  color: red;
  display: none;
}
</style>
<body>
<div>
  <form action="/">
    <label for="fname">Enter Website Address</label>
    <input lass="form-control" type="text" autocomplete="off" id="domain" name="q" placeholder="Enter url without https or /"><p class="error" id="lblError"></p>
    <input type="submit" value="Submit">
  </form>
</div>
<?php
$actual_link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$base_link   = $_SERVER['HTTP_HOST'] . "/";
if ($actual_link == $base_link) {
    echo "";
} else {
    echo '<br><br><img alt="Website" src="https://img.shields.io/website/http/' . $_GET['q'] . '?down_color=red&down_message=http:/' . $_GET['q'] . '%20is%20Offline&style=for-the-badge&up_color=green&up_message=http:/' . $_GET['q'] . '%20is%20Online" width="100%" height="auto"><br><br>';
}

$actual_link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$base_link   = $_SERVER['HTTP_HOST'] . "/";
if ($actual_link == $base_link) {
    echo "";
} else {
    echo '<img alt="Website" src="https://img.shields.io/website/https/' . $_GET['q'] . '?down_color=red&down_message=https:/' . $_GET['q'] . '%20is%20Offline&style=for-the-badge&up_color=green&up_message=https:/' . $_GET['q'] . '%20is%20Online" width="100%" height="auto"><br><br>';
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$('#domain').on('input', function() {
  rawInput = $(this).val();
  cleanInput = rawInput.replace('www.', '');
  cleanInput = cleanInput.replace('http://', '');
  cleanInput = cleanInput.replace('https://', '');
  cleanInput = cleanInput.replace('/', '');
  cleanInput = cleanInput.replace(':', '');
  $(this).val(cleanInput);
});
</script>
</body>
</html>
