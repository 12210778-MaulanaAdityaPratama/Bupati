<div align="center">
  <img src="https://ui-avatars.com/api/?name=Bupati&background=0D8ABC&color=fff&size=150&rounded=true" alt="Bupati Project Logo" width="150" height="150">

# 🏛️ Bupati Project

**A modern and elegant web application built with the TALL stack (Tailwind, Alpine, Laravel, Livewire/Filament).**

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20.svg?style=for-the-badge&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4.svg?style=for-the-badge&logo=php)](https://php.net)
[![Filament](https://img.shields.io/badge/Filament-3.x-FBBF24.svg?style=for-the-badge&logo=laravel)](https://filamentphp.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.4-38B2AC.svg?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)

---

</div>

## 📖 About The Project

**Bupati** is a comprehensive information system and management dashboard designed to streamline administrative workflows. Powered by the robust **Laravel 11** framework and the elegant **Filament** administration panel, this application offers a seamless user experience, responsive design, and high performance.

### ✨ Key Features

- **Intuitive Dashboard:** A sleek, user-friendly administrative interface powered by Filament.
- **Secure Architecture:** Built on Laravel's battle-tested security paradigms.
- **Modern UI/UX:** Styled completely with Tailwind CSS for a responsive, mobile-first design.
- **High Performance:** Assets compiled lightning-fast using Vite.
- **Media & Document Handling:** Integrated with Puppeteer, Spatie Browsershot, and Intervention Image for advanced media manipulation and reporting.

---

## 📸 Screenshots

<div align="center">
  <table>
    <tr>
      <td align="center">
        <a href="#">
          <img src="public/img/ss/home.png" alt="Landing Page">
        </a>
        <br>
        <em>Landing Page</em>
      </td>
      <td align="center">
        <a href="#">
          <img src="public/img/ss/home2.png" alt="landing page">
        </a>
        <br>
        <em>Landing Page</em>
      </td>
    </tr>
    <tr>
      <td align="center">
        <a href="#">
          <img src="public/img/ss/home3.png" alt="landing page">
        </a>
        <br>
        <em>Landing Page</em>
      </td>
      <td align="center">
        <a href="#">
          <img src="public/img/ss/home4.png" alt="Landing page">
        </a>
        <br>
        <em>Landing page</em>
      </td>
    </tr>
     <tr>
      <td align="center">
        <a href="#">
          <img src="public/img/ss/login.png" alt="login page">
        </a>
        <br>
        <em>Login Page</em>
      </td>
      <td align="center">
        <a href="#">
          <img src="public/img/ss/admin.png" alt="admin page">
        </a>
        <br>
        <em>Admin page</em>
      </td>
    </tr>
  </table>
</div>

---

## 🛠️ Built With (Technologies Used)

This project leverages cutting-edge open-source tools and libraries:

### Backend & Core Framework

- ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white) **[Laravel 11](https://laravel.com)** - The core PHP framework.
- ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white) **[PHP 8.2](https://php.net)** - Server-side programming language.
- ![Filament](https://img.shields.io/badge/Filament-FBBF24?style=flat-square&logo=laravel&logoColor=white) **[Filament v3](https://filamentphp.com)** - A collection of tools for rapidly building beautiful TALL stack interfaces.

### Frontend & Styling

- ![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white) **[Tailwind CSS](https://tailwindcss.com)** - Utility-first CSS framework for rapid UI development.
- ![Vite](https://img.shields.io/badge/Vite-B73BFE?style=flat-square&logo=vite&logoColor=FFD62E) **[Vite 6](https://vitejs.dev)** - Next Generation Frontend Tooling for asset bundling.
- ![AlpineJS](https://img.shields.io/badge/Alpine.js-2D3441?style=flat-square&logo=alpine.js&logoColor=white) **[Alpine.js](https://alpinejs.dev/)** - A rugged, minimal framework for composing JavaScript behavior.

### Utilities & Packages

- **[Puppeteer](https://pptr.dev/) & Spatie Browsershot:** For capturing web pages and generating PDFs/Images.
- **[Intervention Image v3](https://image.intervention.io/):** For image handling and manipulation.
- **[Barryvdh DOMPDF](https://github.com/barryvdh/laravel-dompdf):** HTML to PDF converter for Laravel.

---

## 🚀 Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL / PostgreSQL

### Installation

1. **Clone the repository**

    ```bash
    git clone https://github.com/your_username/bupati.git
    ```

2. **Install PHP Dependencies**

    ```bash
    composer install
    ```

3. **Install NPM Packages**

    ```bash
    npm install
    ```

4. **Environment Setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Configure Database**
   Update your `.env` file with your database credentials, then run:

    ```bash
    php artisan migrate
    ```

6. **Build Assets & Run Server**
    ```bash
    npm run dev
    php artisan serve
    ```

---

<div align="center">
  <p>Made with ❤️ for the Bupati Project.</p>
</div>
