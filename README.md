<h2 align="center">Learn CRUD PHP</h2>

![php](./images/crud2.jpg)
A continuación crearemos un proyecto completo de CRUD con PHP y MYSQL, luego gestionaremos el acceso con sesiones desde la tabla usuario.
Realizando CRUD (Create, Read, Update and Delete)

## Creación de la base de datos

```
CREATE DATABASE php_mysql_crud;

use php_mysql_crud;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;

```
![php](./images/crud3.PNG)

## Conexión a la base de datos

```
<?php
// Conexion con la base de datos
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_crud'
)or die(mysqli_error($mysqli));


```
![php](./images/crud.jpg)
