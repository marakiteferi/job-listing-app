# JobSpark

JobSpark is a web application built as a group project for a Web Development course. It allows users to create, view, update, and delete job listings, complete with company logos and search functionality.

---

## Features

* Post, edit, and delete job listings
* Upload and display company logos
* Search listings by tags or keywords
* User registration and login
* Responsive design with Tailwind CSS

---

## Prerequisites

* PHP 8.1+
* Composer
* MySQL (or other supported database)
* Node.js & npm

---

## Quick Start

1. **Clone the repo**

   ```bash
   git clone https://github.com/your-username/jobspark.git
   cd jobspark
   ```

2. **Install dependencies**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Set up environment**

   * Copy `.env.example` to `.env`
   * Run `php artisan key:generate`
   * Fill in database credentials in `.env`

4. **Migrate & seed**

   ```bash
   php artisan migrate --seed
   ```

5. **Link storage**

   ```bash
   php artisan storage:link
   ```

6. **Serve**

   ```bash
   php artisan serve
   ```

Visit `http://127.0.0.1:8000` to see the app in action.

---

## License

MIT License
