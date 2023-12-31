-- Drop the grocery database if it already exists, to ensure a clean start.
DROP DATABASE IF EXISTS grocery;

-- Create the grocery database if it does not already exist.
CREATE DATABASE IF NOT EXISTS grocery;

-- Switch to using the grocery database.
USE grocery;

-- Create the grocery_products table to store information about grocery products.
CREATE TABLE grocery_products (
    product_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each product (primary key).
    product_name CHAR(100) NOT NULL, -- Name of the product (max 100 characters), must be specified.
    price FLOAT(4, 2) NOT NULL, -- Price of the product (4 digits with 2 decimal places), must be specified.
    quantity INT NOT NULL, -- Quantity of the product, must be specified.
    category CHAR(50) NOT NULL -- Category of the product (max 50 characters), must be specified.
) ENGINE=InnoDB;

-- Create the users table to store information about users.
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each user (auto-incremented).
    full_name VARCHAR(50), -- Full name of the user (max 50 characters).
    username VARCHAR(20), -- Username of the user (max 20 characters).
    password VARCHAR(250) -- Password of the user (max 250 characters).
) ENGINE=InnoDB;

-- Insert grocery products into the grocery_products table.
INSERT INTO grocery_products (product_name, price, quantity, category) VALUES
    ('Apples', 1.99, 10, 'Fruits'),
    ('Bananas', 0.99, 15, 'Fruits'),
    ('Oranges', 2.49, 8, 'Fruits'),
    ('Milk', 2.29, 5, 'Dairy'),
    ('Eggs', 3.99, 12, 'Dairy'),
    ('Bread', 1.79, 20, 'Bakery'),
    ('Potatoes', 0.89, 25, 'Vegetables'),
    ('Onions', 0.69, 18, 'Vegetables'),
    ('Carrots', 1.29, 15, 'Vegetables'),
    ('Chicken Breast', 5.99, 6, 'Meat'),
    ('Ground Beef', 4.49, 8, 'Meat'),
    ('Rice', 2.19, 10, 'Grains'),
    ('Pasta', 1.49, 12, 'Grains'),
    ('Tomatoes', 1.79, 8, 'Vegetables'),
    ('Cucumbers', 0.99, 10, 'Vegetables'),
    ('Cheese', 3.49, 5, 'Dairy'),
    ('Butter', 2.79, 5, 'Dairy'),
    ('Yogurt', 1.99, 10, 'Dairy'),
    ('Cereal', 3.29, 8, 'Breakfast'),
    ('Juice', 2.49, 12, 'Beverages');

-- Insert mangement user
INSERT INTO users (full_name, username, password) VALUES
    ('Management User', 'manager', 'password123');
