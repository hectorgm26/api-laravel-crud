# API REST CRUD en Laravel

Proyecto de **API REST** simple usando **Laravel** para practicar las operaciones CRUD, autenticación JWT y la gestión de roles, permisos, categorías, posts, tags, y tareas. Repositorio público para aprendizaje y pruebas personales con estructura profesional y recursos protegidos.

## Tabla de Contenidos

- [Descripción](#descripción)
- [Características](#características)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Instalación y Uso](#instalación-y-uso)
- [Rutas y Recursos](#rutas-y-recursos)
- [Contribución](#contribución)
- [Licencia](#licencia)

## Descripción

Este proyecto crea una **API** en Laravel, exponiendo endpoints para gestionar usuarios, posts, categorías, tags, tareas y permisos. Incluye autenticación por JWT, control de acceso por roles y recursos tipo `Resource` para serialización personalizada. Ideal para aprender y practicar desarrollo backend con PHP y Laravel.

## Características

- ✅ CRUD completo para: usuarios, posts, tareas, categorías y tags
- 🔐 Sistema de autenticación por JWT
- 👥 Gestión de roles y permisos
- 📄 Serialización de respuestas vía recursos API
- ✔️ Validación mediante Form Requests
- 🔒 Políticas para control de acceso
- 🗄️ Migraciones, seeders y factories para pruebas y datos de ejemplo

## Estructura del Proyecto

El proyecto está organizado en carpetas estándar de Laravel, con controladores, modelos, requests y recursos separados por dominio para facilitar el mantenimiento y la escalabilidad. Algunas partes clave:

```
├── app/
│   ├── Http/
│   │   ├── Controllers/Api/     ← Controladores de la API (Post, Task, Auth, Role, etc.)
│   │   ├── Requests/           ← Validaciones de entrada
│   │   └── Resources/          ← Serializadores JSON estructurados
│   ├── Models/                 ← Modelos Eloquent y alcances personalizados
│   ├── Policies/               ← Políticas de autorización
├── database/
│   ├── factories/              ← Factories para pruebas
│   ├── migrations/             ← Migraciones de base de datos (incluye tablas pivote)
│   ├── seeders/                ← Seeders para roles y permisos
├── routes/
│   ├── api.php                 ← Definición de rutas del API
```

## Instalación y Uso

### 1. Clona este repositorio:

```bash
git clone https://github.com/hectorgm26/api-laravel-crud.git
cd api-laravel-crud
```

### 2. Instala las dependencias:

```bash
composer install
```

### 3. Copia el archivo de entorno e inicializa la base de datos:

```bash
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

### 4. Configura JWT:

```bash
php artisan jwt:secret
```

### 5. Arranca el servidor local:

```bash
php artisan serve
```

### 6. La API estará disponible en `http://localhost:8000/api`

> **Importante:** Configura tus variables de entorno, la conexión de base de datos y JWT según tus necesidades.

## Rutas y Recursos

### Autenticación
- **POST** `/api/auth/register` - Registro de usuarios
- **POST** `/api/auth/login` - Inicio de sesión
- **POST** `/api/auth/logout` - Cerrar sesión
- **GET** `/api/auth/me` - Información del usuario autenticado

### Recursos Principales
- **`/api/users`** - CRUD de usuarios (con control de roles)
- **`/api/posts`** - CRUD para posts
- **`/api/tasks`** - CRUD de tareas
- **`/api/categories`** - CRUD de categorías
- **`/api/tags`** - CRUD de tags

### Gestión de Permisos
- **`/api/roles`** - Gestión de roles
- **`/api/permissions`** - Gestión granular de permisos

### Características Avanzadas
- **Filtros y búsquedas** personalizadas
- **Paginación** automática
- **Validación** robusta de datos
- **Políticas de autorización** por recurso

Consulta `routes/api.php` para el listado completo y prueba los endpoints con herramientas como Postman o Insomnia.

## Tecnologías Utilizadas

- **Laravel 12** - Framework PHP
- **JWT** - JSON Web Tokens para autenticación
- **Spatie Laravel Permission** - Gestión de roles y permisos
- **MySQL/PostgreSQL** - Base de datos relacional
- **Eloquent ORM** - Mapeado objeto-relacional

## Contribución

Las contribuciones son bienvenidas. Por favor, sigue las mejores prácticas de Laravel y revisa el Code of Conduct antes de enviar un pull request.

### Cómo contribuir:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## Licencia

Distribuido bajo la licencia MIT. Ver `LICENSE` para más información.

---

⭐ Si este proyecto te fue útil, considera darle una estrella en GitHub.

**Desarrollado con ❤️ para Héctor González**
