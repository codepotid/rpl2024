<?php
function base_url()
{
  // Mendapatkan protokol HTTP atau HTTPS
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

  $host = $_SERVER['HTTP_HOST'];

  $directory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

  return $protocol . '://' . $host . $directory;
}
