---
marp: true
---
<!-- $theme: gaia -->

<br /><br />
<center>
  <img src="assets/logo.png" />
  <h1>Curso de PHP</h1>
</center>

---

# Arturo Maltos
- @arturomaltos
- Desarrollador Web desde 1998.
- Flash, PHP, Node, Go.

---
<!-- page_number: true -->

# Requisitos
- Conocimientos **básicos** de HTML.
- Conocimientos **básicos** de computación.
- Ganas de investigar y aprender por ti mismo.

---
<!-- page_number: true -->

# PHP
- Acrónimo Hypertext Preprocessor (Procesador de Hipertextos).
- Lenguaje opensource ampliamente utilizado para proposito general (realmente para web).
- Basado en C, Java y Perl (pero sencillo).
- Permite escribir páginas "generadas" dinámicamente.
- Hace otras cosas (no es ideal para la mayoría).

---
<!-- page_number: true -->

# Que es PHP?

Originalmente intentó ser un sistema de plantillas para crear páginas web. Es decir... imprimir paginas... pero mas fácil.

---
<!-- page_number: true -->

# Que no es PHP?

- Un lenguaje para escribir HTML.
- Un lenguaje para ejecutar en el navegador.
- Un lenguaje para crear aplicaciones de escritorio (no insistas).

---
<!-- page_number: true -->

# Página dinámica en modo tradicional.

```php
<?php
  $hora = date("Y-M-d H:i:s");
  printf('<!DOCTYPE HTML>');
  printf('<html>');
  printf('<head>');
  printf('<title>Ejemplo</title>');
  printf('</head>');
  printf('<body>');
  printf('La hora es: %s', $hora);
  printf('</body>');
  printf('</html>');
```

---
<!-- page_number: true -->
# Mismo ejemplo con PHP embedido.

```php
<?php
  $hora = date("Y-M-d H:i:s");
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Ejemplo</title>
  </head>
  <body>
    La hora es <?= $hora ?>
  </body>
</html>
```

---
<!-- page_number: true -->
# Que se puede hacer con PHP?

- Aplicaciones web para la internet o una intranet.
- Aplicaciones en la línea de comandos.
- Aplicaciones de escritorio (no es la herramienta ideal).
- Crear/leer archivos de datos (xml, json, pdf, doc, xls).
- Conectarse con bases de datos (Mysql, Sqlite, PostgreSQL, MongoDB, etc).
- Enviar correo electrónico.
- Ejecutar pruebas con selenium.
- Y mucho más..

---
<!-- page_number: true -->
# En donde se puede ejecutar?

- Linux / Unix.
- macOS.
- Windows.
- HP-UX, Solaris, OpenBSD, RISC OS, etc.

