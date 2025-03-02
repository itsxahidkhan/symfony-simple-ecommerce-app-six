This project is a simplified e-commerce application built with Symfony 6.4. The app includes features like a product listing page, product details page, and a simple API to interact with the product data.

Features Implemented
Home Page (/home)

A basic landing page for the application.
Product Listing Page (/products)

Displays a list of products from the database with pagination.
The table-based listing shows the title and price of each product.
Allows sorting by title and price.
Optionally includes filtering by category.
Product Detail Page (/products/{id})

Displays the detailed view of a single product by ID.
Shows the product title, description, price, and optional image.
API Endpoints:

GET /api/products: Fetches all products with pagination.
GET /api/products/{id}: Fetches a specific product by ID.
Basic Database Configuration:

Products can be added with fields like title, description, price, and category.
Optionally supports storing product images.
Minimal Styling:

Basic responsive design for mobile compatibility using Bootstrap 4.
Database:

MySQL is used as the database backend.
The database structure includes a products table to store product data.
Unit Tests (Bonus, optional):

Basic unit tests for key components like product retrieval and validation.
Setup and Run Instructions
Prerequisites
Ensure that you have the following installed:

PHP (version 8.0 or above)
Composer
MySQL (version 5.7 or above)