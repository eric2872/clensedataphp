<?php
function escape ($data) {
$data = mysql_real_escape_string (trim($data));
$data = strip_tags($data);
$data = preg_replace("/[^A-Z0-9a-z\w ]/u", '', $data);
return $data;
}
?>