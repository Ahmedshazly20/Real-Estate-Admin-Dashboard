# 🏠 Real Estate Admin Dashboard

A simple and responsive **Real Estate Admin Dashboard** built with **Laravel**, **Blade Templates**, and **Tailwind CSS**.

This project was developed as a technical assessment to demonstrate Laravel fundamentals, reusable Blade components, and responsive UI development.

---

## Project Overview

This dashboard simulates a real estate management system that allows administrators to monitor business metrics and manage property listings.

The project was built without a database and uses static data stored inside Laravel controllers.

---

## Features

### Dashboard Page

- Statistics cards
  - Total Properties
  - Total Clients
  - New Orders
  - Total Sales

- Latest Properties table

- Fully responsive design

### Properties Listing Page

Each property includes:

- Property image
- Property name
- Property type
- Property price
- Property status

Additional features:

- Search by property name
- Filter by property status
- View Details button

### Property Details Page

- Property information
- Image gallery
- Back button
- Disabled Edit button

---

## Tech Stack

- Laravel
- Blade Templates
- Tailwind CSS
- JavaScript
- PHP

---

## Project Structure

```text
app/
└── Http/
    └── Controllers/
        ├── DashboardController.php
        └── PropertyController.php

resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── components/
    │   ├── navbar.blade.php
    │   ├── sidebar.blade.php
    │   └── footer.blade.php
    └── pages/
        ├── dashboard.blade.php
        ├── properties.blade.php
        └── property-details.blade.php

routes/
└── web.php
```

## Implemented Concepts

- Laravel Routing
- Blade Templates
- Blade Includes
- Reusable Layouts
- Responsive Design
- Tailwind CSS
- JavaScript Search
- JavaScript Filtering
- Static Data Management
- Active Navigation State

---

## Installation

```bash
composer install
npm install
php artisan serve
npm run dev
```

Open:

```text
http://127.0.0.1:8000
```

---

## 🎥 Demo Video

Add your video link here after uploading:

```text
https://youtu.be/T-b66lqzzfo
```

---

## 📝 Notes

- No database was used.
- Static data is stored inside Laravel controllers.
- No external admin templates were used.
- The UI was built from scratch using Tailwind CSS.
- Blade Includes were used to create reusable components.

---

## 👨‍💻 Author

Ahmed Shazly
