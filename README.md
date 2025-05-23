<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 📚 User Bank Management System

**User Bank Management System** is a simple Laravel 11 project designed to manage users and their associated bank accounts.  
This project implements CRUD operations for both **users** and **bank accounts**, using **UUID** for better security and modern database practices.

---

## ✨ Features

- Full CRUD for Users (Create, Read, Update, Delete)
- Full CRUD for Bank Accounts
- Search functionality for Users (search by Name and Email)
- Relationship between Users and their Bank Accounts
- UUIDs used as primary keys (instead of auto-increment IDs)
- Laravel 11 features and standards
- Clean and responsive Bootstrap 5.3 UI
- Route Model Binding for clean controllers
- Strong validation (server-side + client-side)

---

## 🚀 Installation Guide

Follow these steps to set up the project locally:

1. Clone this repository:
   ```bash
   git clone https://github.com/haerulyudaaditiya/user-bank-management.git
   cd user-bank-management
   ```

2. Install PHP dependencies via Composer:
   ```bash
   composer install
   ```

3. Copy `.env` file and configure your environment:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Configure your database inside `.env` file.

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Serve the application:
   ```bash
   php artisan serve
   ```
   
---

## 📚 Tech Stack

- Laravel 11
- PHP 8.2
- MySQL or MariaDB
- Bootstrap 5.3
- UUID primary keys

---

## 🤝 Contributing

Pull requests are welcome.  
For major changes, please open an issue first to discuss what you would like to change.

---

## 🛡️ License

This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).