<?php

  // definicion de una variable
  $hora = date("Y-M-d H:i:s");

  // impresion de la pagina
  printf('<!DOCTYPE HTML>');
  printf('<html>');
  printf('<head>');
  printf('<title>Ejemplo</title>');
  printf('</head>');
  printf('<body>');
  printf('La hora es: %s', $hora);
  printf('</body>');
  printf('</html>');

