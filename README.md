# Laravel Import Export Project

## 📌 Description

This is a Laravel project that allows users to import and export data using CSV and Excel files.
It is a basic version (without queue jobs) and is designed for handling small to medium datasets.

---

## 🚀 Features

* Import CSV, XLSX, XLS files
* Export data to CSV and Excel
* Simple and clean UI
* Validation for file uploads
* Fast data processing (basic version)

---

## 🛠️ Tech Stack

* Laravel 12
* PHP
* MySQL
* Bootstrap (UI)

---

## 📂 Project Setup

### Step 1: Clone the repository

```bash
git clone https://github.com/your-username/basic-laravel-import-export.git
```

### Step 2: Go to project folder

```bash
cd basic-laravel-import-export
```

### Step 3: Install dependencies

```bash
composer install
```

### Step 4: Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

### Step 5: Configure database

Edit `.env` file:

```env
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

### Step 6: Run migrations

```bash
php artisan migrate
```

### Step 7: Start server

```bash
php artisan serve

---

## 📊 Usage

1. Upload CSV/Excel file
2. Click import button
3. Data will be stored in database
4. Export anytime in CSV/Excel format

---

## 🔮 Future Improvements

* Add Queue Jobs for large data
* Progress bar for import/export
* Error handling improvements

---

## 👨‍💻 Author

**Arpit Kumar**
📧 Email: [arpitkumarkts6400@gmail.com](mailto:arpitkumarkts6400@gmail.com)

---

## ⭐ Support

If you like this project, please give it a ⭐ on GitHub!

