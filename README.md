<!-- <p align="center">
  <img src="assets/display.png" alt="" width="80%">
</p> -->

# PrintMed
This is a

The system uses:
- fcx

## Features
**For Physicians**
- fd

**For Patients**
- fd
  
**For Admins**
- fd


## Prerequisites

- PHP ≥ 8.1
- Composer
- Node.js
- MySQL, MySQL Workbench


## Backend Setup (*printmed-api*)

1. **Open terminal and go to `printmed-api` directory**
2. **Install dependencies**
```bash
composer install
```
3. **Configure environment**
```bash
cp .env.example .env
```
Edit `.env` for your database configuration:
```bash
DB_DATABASE=printmed
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Create a variable in `.env` for CipherSweet
```bash
CIPHERSWEET_KEY=
```
Generate a CipherSweet key
```bash
php artisan ciphersweet:generate-key
```
4. **Enable `gd` PHP Extension**

Locate `php.ini` in File Explorer and enable `extension=gd`
```bash
extension=gd
```
5. **Run migrations and seed database**

The *users* table in database is pre-populated, particularly of an admin account. Open `database\seeders\UserSeeder.php` to view or edit initial login credentials.
```bash
php artisan migrate
php artisan db:seed
```

6. **Run the server**
```bash
php artisan serve
```
## Frontend Setup (*printmed-frontend*)
1. **Open terminal and go to `printmed-frontend/printmed` directory**
2. **Install dependencies**
```bash
npm install
```
2. Run the frontend
```bash
npm run dev
```
Visit http://localhost:5173 to use the app.


## Email Functionalities
This project includes features that require email service (e.g., OTP verification, account notifications, emailing files).

For development and testing, **`Mailtrap`** is used, which captures outgoing emails that can be viewed and debugged without sending real emails.

To configure:

**1.** Create a Mailtrap account and **get SMTP credentials**.

**2.** Update your `.env` with the Mailtrap credentials:
```bash
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
```
Laravel’s built-in Mailables and Notifications system will use this configuration automatically for sending emails.

To integrate production-ready email APIs, you can use providers like SendGrid and Mailgun.
