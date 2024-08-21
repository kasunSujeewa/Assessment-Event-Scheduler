
# Laravel 11 Livewire Project

This project is a Laravel 11 application using Livewire for dynamic, reactive components.

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js & NPM
- MySQL or any supported database
- Mailtrap account for email testing

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/kasunSujeewa/Assessment-Event-Scheduler.git
   cd Assessment-Event-Scheduler
   ```

2. **Install dependencies:**

   ```bash
   composer install
   npm install
   ```

3. **Copy the `.env` file:**

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

5. **Configure the `.env` file:**

   Update your `.env` file with the correct database and email service settings.

   **Database:**
   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

   **Mailtrap (Email Service):**
   ```dotenv
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=your_mailtrap_username
   MAIL_PASSWORD=your_mailtrap_password
   MAIL_ENCRYPTION=tls
   ```

6. **Run database migrations and seeders:**

   ```bash
   php artisan migrate
   ```
   ```bash
   php artisan db:seed
   ```

   This will run the database migrations and seed the database with initial data.

## Usage

1. **Start the development server:**

   ```bash
   php artisan serve
   ```

2. **Compile assets:**

   For development:

   ```bash
   npm run dev
   ```

   For production:

   ```bash
   npm run build
   ```

3. **Access the application:**

   Navigate to `http://localhost:8000` in your browser.

