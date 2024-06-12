RSS Feed Table Viewer

This project is a Laravel application that fetches an RSS feed from a specified URL, parses the JSON response, and displays the feed data in an HTML table with sorting, searching, and pagination features using DataTables.

Table of Contents

Features
Requirements
Installation
Usage
Project Structure
License
Features

Fetches RSS feed data from a specified URL.
Displays feed data in an HTML table.
Enables sorting, searching, and pagination with DataTables.
Requirements

PHP 7.4 or higher
Composer
Laravel 8 or higher
Node.js and npm (for Laravel Mix)
Internet connection (to fetch RSS feed and include external libraries)
Installation

Clone the repository:

bash
Copy code
git clone https://github.com/your-username/rss-feed-table-viewer.git
cd rss-feed-table-viewer
Install dependencies:

bash
Copy code
composer install
npm install
Set up environment variables:

Copy the .env.example file to .env and update your environment variables as needed.

bash
Copy code
cp .env.example .env
php artisan key:generate
Run migrations (if any):

bash
Copy code
php artisan migrate
Build assets:

bash
Copy code
npm run dev
Usage

Start the Laravel development server:

bash
Copy code
php artisan serve
Access the application:

Open your web browser and navigate to http://localhost:8000/rss.

Project Structure

app/Http/Controllers/RssController.php: Controller responsible for fetching RSS feed data and passing it to the view.
resources/views/rss.blade.php: Blade template that displays the RSS feed data in a table with DataTables integration.
routes/web.php: Route definitions for the application.
