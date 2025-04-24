# second_source

# Laravel RESTful API - Blog, User Registration & Task Management

This project is a Laravel RESTful API that includes:

- 📝 CRUD for Blog Posts
- 👤 User Registration with validation and hashed passwords
- ✅ Task Management (create, mark complete, get pending)

---

## ⚙️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/roman966/second_source.git
cd second_source
```
### 2.Run these command

```bash
composer install

cp .env.example .env

```
### 3.DB SETUP

```
DB_DATABASE=second_source
DB_USERNAME=your_mysql_user
DB_PASSWORD=your_mysql_password
```

### 4.Run these command

```
php artisan key:generate

php artisan migrate

php artisan serve
```
### 5.API ENDPOINTS

```
📝 Blog Posts
➕ Create a Post
Endpoint: POST /api/posts

Request Body:
{
  "title": "My First Post",
  "content": "This is my content."
}
Response:
{
  "id": 1,
  "title": "My First Post",
  "content": "This is my content.",
  "created_at": "2024-12-18T10:00:00Z"
}

📄 Get All Posts
Endpoint: GET /api/posts

Response:
[
  {
    "id": 1,
    "title": "My First Post",
    "content": "This is my content.",
    "created_at": "2024-12-18T10:00:00Z"
  }
]
🔍 Get a Single Post
Endpoint: GET /api/posts/{id}
Response:
{
  "id": 1,
  "title": "My First Post",
  "content": "This is my content.",
  "created_at": "2024-12-18T10:00:00Z"
}
👤 User Registration
🧾 Register User
Endpoint: POST /api/register

Request Body:
{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "password": "password123"
}
Validation Rules:

Name: required, min 3 characters

Email: required, must be unique

Password: required, min 8 characters

Response:
{
  "id": 1,
  "name": "Jane Doe",
  "email": "jane@example.com",
  "created_at": "2024-12-18T10:00:00Z"
}
✅ Task Management
➕ Add a Task
Endpoint: POST /api/tasks

Request Body:
{
  "title": "Finish Laravel test"
}
Response:
{
  "id": 1,
  "title": "Finish Laravel test",
  "is_completed": false,
  "created_at": "2024-12-18T10:00:00Z"
}
✅ Mark Task as Completed
Endpoint: PATCH /api/tasks/{id}

Request Body:
{
  "is_completed": true
}
Response:
{
  "id": 1,
  "title": "Finish Laravel test",
  "is_completed": true,
  "created_at": "2024-12-18T10:00:00Z"
}
📋 Get Pending Tasks
Endpoint: GET /api/tasks/pending

Response:
[
  {
    "id": 2,
    "title": "Build API",
    "is_completed": false,
    "created_at": "2024-12-18T10:05:00Z"
  }
]
```
