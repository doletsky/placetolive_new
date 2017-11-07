<?php
$name = $_SERVER["DOCUMENT_ROOT"].'/upload/screenshot'.time().'.png';
file_put_contents($name, base64_decode($_POST['data'] ));
echo( $name );