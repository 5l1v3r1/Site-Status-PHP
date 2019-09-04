<?php
echo '<img alt="Website" src="https://img.shields.io/website/http' . $_SERVER['REQUEST_URI'] . '?down_color=red&down_message=http:/' . $_SERVER['REQUEST_URI'] . '%20is%20Offline&style=for-the-badge&up_color=green&up_message=http:/' . $_SERVER['REQUEST_URI'] . '%20is%20Online" width="100%" height="auto">';
?>
<br><br>
<?php
echo '<img alt="Website" src="https://img.shields.io/website/https' . $_SERVER['REQUEST_URI'] . '?down_color=red&down_message=https:/' . $_SERVER['REQUEST_URI'] . '%20is%20Offline&style=for-the-badge&up_color=green&up_message=https:/' . $_SERVER['REQUEST_URI'] . '%20is%20Online" width="100%" height="auto">';
?>
