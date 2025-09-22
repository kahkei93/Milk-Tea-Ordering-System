# Milk-Tea-Ordering-System (TehXpress) 🧋

A full-stack, responsive web application for a modern milk tea shop. This system allows customers to browse the menu, customize their drinks (size, sugar, ice, toppings), manage a shopping cart, and complete the checkout process with a simulated payment. Built as a university assignment for UECS2194.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## ✨ Features

-   **User Authentication & Sessions:** Secure login and registration system.
-   **Interactive Menu:** Browse drinks with images and descriptions.
-   **Drink Customization:** Choose size, sugar level, ice level, and multiple toppings.
-   **Real-time Shopping Cart:** Add/remove items, adjust quantities. Uses `localStorage` for persistence.
-   **Dynamic Price Calculation:** Total price updates instantly based on selections.
-   **Checkout & Order Processing:** Simulated payment flow with order confirmation.
-   **Contact Form:** Functional form with validation that stores messages in the database.
-   **Responsive UI:** Works well on both desktop and mobile devices.

## 🖼️ Screenshots

| Login Page | Menu Page | Drink Customization |
| :---: | :---: | :---: |
| <img width="492" height="577" alt="login image" src="https://github.com/user-attachments/assets/fc2f0d57-4f70-43fa-82ca-3b30685d8fd7" />
 | <img width="1875" height="907" alt="menu image" src="https://github.com/user-attachments/assets/c9900145-3553-4d67-bf12-69a9882b0c0e" />
 |
| **Shopping Cart** | **Checkout Page** | **Order Success** |
| ![Cart](screenshots/cart.png) | ![Checkout](screenshots/checkout.png) | ![Success](screenshots/success.png) |

> **Note:** *You need to add these screenshots later. I will show you how.*

## 🗄️ Database Schema

The application uses a MySQL database with the following core tables:

### `users` Table
| Column | Type | Description |
| :--- | :--- | :--- |
| `id` | INT | Primary Key |
| `name` | VARCHAR | User's full name |
| `email` | VARCHAR | Unique user email |
| `password_hash` | VARCHAR | Hashed password |
| `address` | TEXT | User's address |
| `phone` | VARCHAR | User's phone number |
| `created_at` | TIMESTAMP | Account creation time |

### `orders` Table
| Column | Type | Description |
| :--- | :--- | :--- |
| `id` | INT | Primary Key |
| `user_id` | INT | Foreign Key to `users.id` |
| `customer_name` | VARCHAR | Name on the order |
| `order_items` | TEXT | JSON-like string of items in the order |
| `total_amount` | DECIMAL | Total cost of the order |
| `created_at` | TIMESTAMP | Order creation time |

## 🛠️ Tech Stack

-   **Frontend:** HTML5, CSS3, Vanilla JavaScript
-   **Backend:** PHP
-   **Database:** MySQL
-   **Server:** XAMPP (Local Development Environment)
-   **Client-Side Storage:** localStorage (for cart functionality)

## 🚀 Installation & Setup

To run this project locally, follow these steps:

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (or similar stack like WAMP/MAMP)

### Steps
1.  **Clone the repository** into your web server's root directory (e.g., `xampp/htdocs/`):
    ```bash
    git clone https://github.com/YOUR_USERNAME/Milk-Tea-Ordering-System.git
    ```
2.  **Start XAMPP** and run the **Apache** and **MySQL** modules.
3.  **Create the Database:**
    - Open phpMyAdmin (usually at `http://localhost/phpmyadmin`).
    - Create a new database named `user`.
    - Import the SQL file (if provided in the repository) to create the necessary tables.
4.  **Configure Database Connection (if needed):**
    - Check the PHP files (e.g., `loginForm.php`) and ensure the database connection settings (`$host`, `$user`, `$pass`, `$dbname`) match your local XAMPP configuration.
5.  **Run the Application:**
    - Open your browser and go to `http://localhost/Milk-Tea-Ordering-System/`.

## 📖 Detailed Report
For an in-depth explanation of the code, functionality, and implementation challenges, please refer to the full project report: [**UECS2194_Assignment_P8_G2.pdf**](./UECS2194_Assignment_P8_G2.pdf)

## 👥 Contributors
- [Lee Cheal Xin](https://github.com/yourusername) - Menu, Item Details, T&C Page
- [Brenda Wang Ying Tong](https://github.com/yourusername) - Login, Logout, Register, FAQ
- [Lau Kah Kei](https://github.com/yourusername) - Contact Us, Cart & Checkout
- [Sit Qiao Sheng](https://github.com/yourusername) - Global Components, About Page

---
**Developed as part of the UECS2194 course.**
