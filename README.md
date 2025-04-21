# StudentHive Console Admin Panel

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

> A Laravel-based admin console for managing the Portfolio. It provides a consistent, responsive UI built with reusable Blade templates and a shared CSS utility library for CRUD operations on Projects, Skills, Experiences, Users, and Educations.

---

## 📂 Repository

[View the full source on GitHub](https://github.com/dignapatel0/Laravel_Portfolio)

---

## 🚀 Features

- **Reusable Layout**: Single `console.blade.php` layout with header and content regions.  
- **Shared CSS Utilities** (`public/css/console.css`):  
  - Containers: `.page-container`, `.form-container`, `.table-container`  
  - Forms: `.form-group`, `.form-error`, `.form-actions`  
  - Buttons: `.btn`, `.btn-primary`, `.btn-secondary`, `.btn-green`  
  - Tables & Grids: `.list-table`, `.dashboard-grid`, `.dashboard-card`  
- **Resource Management**:  
  - **List Views** with responsive tables for Projects, Skills, Experiences, Users, and Educations.  
  - **Add/Edit Forms** with validation feedback.  
  - **Image Upload** screens for Projects & Skills, with live preview.  
- **Dashboard**: Icon-based cards linking to each management section.

---

## 🎬 Screenshots

### Login Page  
![Login Page](./_readme/login.png)

### Dashboard Overview  
![Dashboard](./_readme/dashboard.png)

### Manage Projects  
![Projects List](./screenshots/projects-list.png)

### Add Project Form  
![Add Project](./screenshots/add-project.png)

### Edit Experience Form  
![Edit Experience](./screenshots/edit-experience.png)

### Skill Image Upload  
![Skill Image](./screenshots/skill-image.png)

---

## 🏁 Getting Started

1. **Clone the repository**  
   ```bash
   git clone https://github.com/dignapatel0/Laravel_Portfolio.git
   cd Laravel_Portfolio

2. **Install PHP dependencies**

    ```bash
    composer install

3. **Environment setup**
    - Copy .env.example to .env and configure database, mail, and storage.
    - Generate application key:

    ```bash
    php artisan key:generate

4. **Database & Storage**
    ```bash
    php artisan migrate
    php artisan storage:link

5. **Serve the application**
    ```bash
    php artisan serve

- Visit http://localhost:8000/console/login to access the admin panel.
