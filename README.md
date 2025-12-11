# 🛍️ Banglar Rong - Traditional Clothing E-commerce Platform

<div align="center">

![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

**A complete full-stack e-commerce solution for traditional Bangladeshi clothing**

</div>

## 📋 Project Overview

Banglar Rong is a fully-featured e-commerce platform developed for traditional Bangladeshi clothing such as sarees, panjabis, and ethnic wear. This project demonstrates comprehensive full-stack web development skills with a focus on traditional garment e-commerce.

### 🎯 Key Features
- ✅ **User Authentication System** with email OTP verification
- ✅ **Complete Shopping Cart** with session management
- ✅ **Product Catalog** with categories and brand filtering
- ✅ **Order Processing System** with payment integration
- ✅ **Admin Dashboard** for product and order management
- ✅ **Responsive Design** using Bootstrap 5
- ✅ **Secure Database Architecture** with MySQL
- ✅ **Email Integration** using PHPMailer

## 🏗️ Technology Stack

| Component | Technology | Purpose |
|-----------|------------|---------|
| **Backend** | PHP 7.4+ | Server-side logic & processing |
| **Database** | MySQL 5.7+ | Data storage & management |
| **Frontend** | Bootstrap 5 | Responsive UI framework |
| **Styling** | CSS3 | Custom styling & animations |
| **Scripting** | JavaScript & jQuery | Client-side interactivity |
| **Email Service** | PHPMailer | Transactional emails & OTP |
| **Version Control** | Git | Code management |

## 📁 Project Structure
banglar-rong/

├── 📄 index.php                    # Shows main entry point

├── 📄 navbar.php                   # Shows component-based design

├── 📁 includes/                    # Shows configuration management

│   └── connect.php                 # Shows security awareness

├── 📁 functions/                   # Shows reusable code

├── 📁 session/                     # Shows state management

├── 📁 admin_area/                  # Shows admin/role separation

├── 📁 database/                    # Shows database knowledge

└── 📁 vendor/                      # Shows dependency management


## 🚀 Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache web server
- Composer (for dependency management)

### Step 1: Clone Repository

bash

git clone https://github.com/yourusername/Banglar_Rong_EcommerceProject.git

cd banglar-rong

### Step 2: Install Dependencies
bash
composer install

### Step 3: Database Configuration

Create MySQL database:

sql
CREATE DATABASE banglar_rong;
Import database schema:

bash
mysql -u your_username -p banglar_rong < database/mydb.sql

### Step 4: Update Configuration
Edit includes/connect.php with your database credentials:

php
<?php
$con = mysqli_connect("localhost", "your_username", "your_password", "banglar_rong");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
### Step 5: Run Application
Place project in web server directory


### 🎮 Features in Detail

## 👥 User Management

Registration System: New user signup with email verification

Login/Logout: Secure authentication with session management

Profile Management: Update personal information and address

Password Reset: Secure password recovery via email

## 🛒 Shopping Experience

Product Browsing: View products by categories and brands

Product Details: Detailed view with multiple images

Shopping Cart: Add/remove products with quantity adjustment

Wishlist: Save products for later purchase

## 💳 Checkout Process

Multiple Payment Methods: bKash, Cash on Delivery

Address Management: Save and select delivery addresses

Order Confirmation: Email notification for successful orders

Order Tracking: View order status and history

## 👨‍💼 Admin Dashboard

Product Management: Add, edit, delete products

Category & Brand Management: Organize product catalog

Order Processing: Update order status and manage deliveries

User Management: View and manage customer accounts

Sales Reports: Generate sales analytics and reports

## 🔐 Security Implementation

Authentication Security
Password Hashing: Bcrypt algorithm with cost factor 4

Email Verification: OTP-based account activation

Session Management: Secure session handling with timeout

Login Protection: Attempt limiting and brute force prevention

## 📱 Responsive Design

The platform is built with a mobile-first approach using Bootstrap 5:

Cross-Device Compatibility: Fully responsive on all screen sizes

Touch-Friendly Interface: Optimized for mobile and tablet use

Accessibility Features: Proper contrast and keyboard navigation


### 👤 Author
Naznin Jahan Noor

Email: nazninjahannoor@gmail.com

