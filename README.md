## Ejemplo de Refactorizaciòn

## Requerimientos
- composer v2.2
- php v8.1.x
- Mysql v8


## Instalacion

- Clonar el proyecto

```bash
git clone git@github.com:jgarciae/refactor.git item-refactor
```

- ingresar al proyecto
```bash
cd item-refactor
```

- instalar dependencias
```bash
composer install
```

- Copiar Archivo de configuracion
```bash
cp .env.example .env
```

- Configurar conexion con base de datos en archivo .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tu-base-de-datos
DB_USERNAME=tu-usuario
DB_PASSWORD=tu-contraseña
```

- Iniciarlizar servicio
```bash
php artisan serve
```

- Abrir servicio
```bash
http://127.0.0.1:8000
```

- Coleccion de Postman
```bash
/storage/postman-collection
```