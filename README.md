crear una tabla de nombre 'ambiente' en POSTGRESQL

crear una table de nombre'ambiente' 
  'id' int NOT NULL,
  'nombre' varchar
  'latitud' int 
  'longitud' int 
  'descripcion' varchar
  PRIMARY KEY ('id')




Configuracion 
###Base de datos

editar el archivo 'config/db.php'


return [
    'class' => 'yii\db\Connection',
    'dsn' => >'pgsql:host=localhost;port=5432;dbname=prueba',
    'username' => 'postgres',
    'password' => '    ',
    'charset' => 'utf8',
];



Introducir las siguientes URL para las pruebas en POSTMAN :

*  CREATE
POST    http://localhost:8080/index.php?r=ambiente%2Fcreate

  insertar 'KEY' y 'VALUE' en el body:
    'id' 
    'nombre' 
    'latitud'
    'longitud' 
    'descripcion'

*  VIEW
GET        http://localhost:8080/index.php?r=ambiente%2Fview&id=1

*  GET-ALL  
GET        http://localhost:8080/index.php?r=ambiente%2Fget-all

*  DELETE
DELETE     http://localhost:8080/index.php?r=ambiente%2Fdelete&id=1

*  UPDATE
POST       http://localhost:8080/index.php?r=ambiente%2Fupdate&id=1

    En postman update con PUT la respuesta marca: '200OK' respuesta exitosa, pero no reaiza cambios en a base de datos.

    En cambio con un POST la respuesta es 200OK y realiza cambios en la base de datos
