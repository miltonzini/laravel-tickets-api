# 🎫 Task Manager API

REST API desarrollada en **Laravel** para la gestión de tareas internas. Permite a los usuarios crear, consultar, actualizar y eliminar tickets de tareas, con autenticación basada en tokens y control de acceso por roles.

---

## 🚀 Tecnologías

- **PHP 8.x** + **Laravel 11**
- **Laravel Sanctum** — autenticación por tokens
- **MySQL** — base de datos
- **Laragon** — entorno de desarrollo local
- **Postman** — testing de endpoints

---

## 📦 Instalación local

```bash
# 1. Clonar el repositorio
git clone https://github.com/miltonzini/laravel-tickets-api.git
cd larave-tickets-api

# 2. Instalar dependencias
composer install

# 3. Configurar el entorno
cp .env.example .env
php artisan key:generate

# 4. Configurar la base de datos en .env
DB_DATABASE=laravel_tickets_api
DB_USERNAME=root
DB_PASSWORD=

# 5. Correr migraciones
php artisan migrate

# 6. (Opcional) Seeders de prueba
php artisan db:seed
```

---

## 🔐 Autenticación

La API usa **tokens Bearer** mediante Laravel Sanctum.

**Login:**
```http
POST /api/v1/login
Content-Type: application/json

{
  "email": "usuario@example.com",
  "password": "password"
}
```

**Respuesta:**
```json
{
  "data": {
    "token": "1|abc123..."
  }
}
```

Incluir el token en todos los requests protegidos:
```http
Authorization: Bearer 1|abc123...
```

---

## 📡 Endpoints principales

| Método | Endpoint | Descripción | Auth |
|--------|----------|-------------|------|
| POST | `/api/v1/login` | Iniciar sesión | ❌ |
| POST | `/api/v1/logout` | Cerrar sesión | ✅ |
| GET | `/api/v1/tickets` | Listar tickets | ✅ |
| POST | `/api/v1/tickets` | Crear ticket | ✅ |
| GET | `/api/v1/tickets/{id}` | Ver ticket | ✅ |
| PATCH | `/api/v1/tickets/{id}` | Actualizar ticket | ✅ |
| DELETE | `/api/v1/tickets/{id}` | Eliminar ticket | ✅ |
| GET | `/api/v1/users` | Listar usuarios | ✅ |

> La API está versionada bajo `/api/v1/` para mantener compatibilidad con futuros cambios.

---

## 🗂 Estructura del proyecto

```
app/
├── Http/
│   └── Controllers/
│       └── Api/
│           └── V1/
│               ├── AuthController.php
│               ├── TicketController.php
│               └── UserController.php
├── Models/
│   ├── Ticket.php
│   └── User.php
routes/
└── api.php
```

---

## 📝 Estado del desarrollo

- [x] Setup del proyecto
- [x] Diseño de URLs y versionado (`/api/v1/`)
- [ ] Autenticación con Sanctum
- [ ] Diseño de response payloads
- [ ] Filtros y sorting
- [ ] CRUD completo de tickets
- [ ] Policies y autorización
- [ ] Documentación con Scribe

---

## 👤 Autor

Desarrollado como proyecto de práctica.