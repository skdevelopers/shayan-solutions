# Shayan Solutions Product Management

Welcome to Shayan Solutions Product Management project! This Laravel-based application allows you to manage products, including adding, listing, and viewing product details.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Viewing All Products](#viewing-all-products)
  - [Viewing Product Details](#viewing-product-details)
  - [Adding a New Product](#adding-a-new-product)
- [Contributing](#contributing)
- [License](#license)

## Features

- List all products with their names and prices in a paginated format.
- View detailed information about a specific product, including its description, creation date, and update date.
- Add new products using a form with name, price, and description fields.

## Getting Started

### Prerequisites

- PHP (>= 7.4)
- Composer
- Laravel CLI
- MySQL or another supported database system

### Installation

1. Clone this repository to your local machine:

   ```sh
   git clone https://github.com/skdevelopers/shayan-solutions.git

Navigate to the project directory:
cd shayan-solutions

composer install

Copy the .env.example file to .env and configure your database settings.
php artisan key:generate if needed 

php artisan migrate

php artisan db:seed --class=ProductSeeder
php artisan serve

Now you can access the application at http://localhost:8000

Usage
Viewing All Products
Visit the homepage at the root URL (http://localhost:8000/) to see a paginated list of all products. You can navigate through the pages to explore the product catalog.

Viewing Product Details
Click on a product name in the product list to view its detailed information, including description, creation date, and update date.

Adding a New Product
Click on the "Create Product" link in the navigation menu to access the "Add Product" form.
Fill in the product details, including name, price, and description.
Click the "Add Product" button to add the new product to the catalog.
Contributing
Contributions are welcome! If you find any issues or want to add new features, feel free to create a pull request or submit an issue.

License
This project is licensed under the MIT License.
