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

| | | |
| :---: | :---: | :---: |
| **Login Page** | **Menu Page** | **Drink Customization** |
| <a href="https://github.com/user-attachments/assets/fc2f0d57-4f70-43fa-82ca-3b30685d8fd7"><img src="https://github.com/user-attachments/assets/fc2f0d57-4f70-43fa-82ca-3b30685d8fd7" width="300" alt="Login Page"></a> | <div><a href="https://github.com/user-attachments/assets/c9900145-3553-4d67-bf12-69a9882b0c0e"><img src="https://github.com/user-attachments/assets/c9900145-3553-4d67-bf12-69a9882b0c0e" width="145" alt="Menu - Classic Series" style="margin-right: 5px;"></a><a href="https://github.com/user-attachments/assets/03c71508-6c40-46a0-99eb-97ab7dae42c4"><img src="https://github.com/user-attachments/assets/03c71508-6c40-46a0-99eb-97ab7dae42c4" width="145" alt="Menu - Full Page" style="margin-left: 5px;"></a></div> | <a href="https://github.com/user-attachments/assets/b15fe278-f013-4dc9-ba5e-37825b4526a4"><img src="https://github.com/user-attachments/assets/b15fe278-f013-4dc9-ba5e-37825b4526a4" width="300" alt="Drink Customization"></a> |
| **Shopping Cart** | **Checkout Page** | **Order Success** |
| <a href="https://github.com/user-attachments/assets/da949688-4dc8-4640-9733-ecadf7ec56a3"><img src="https://github.com/user-attachments/assets/da949688-4dc8-4640-9733-ecadf7ec56a3" width="300" alt="Shopping Cart"></a> | <a href="https://github.com/user-attachments/assets/683ecf05-8517-4472-8a3a-f222d2d684a2"><img src="https://github.com/user-attachments/assets/683ecf05-8517-4472-8a3a-f222d2d684a2" width="300" alt="Checkout Page"></a> | <a href="https://github.com/user-attachments/assets/56ec18aa-c819-43aa-85fe-1757eed69cf4"><img src="https://github.com/user-attachments/assets/56ec18aa-c819-43aa-85fe-1757eed69cf4" width="300" alt="Order Success"></a> |

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
- [WAMP Server](https://www.wampserver.com/en/) (or similar stack like XAMPP/MAMP)

### Steps
1.  **Clone the repository** into your web server's root directory (e.g., `wamp/www/`):
    ```bash
    git clone https://github.com/kable23/TehXpress
    ```

2.  **Start WAMP Server** and ensure both the **Apache** and **MySQL** services are running (the WAMP icon should be green in your system tray).

3.  **Create the Database:**
    - Open phpMyAdmin by going to `http://localhost/phpmyadmin` in your browser.
    - Create a new database named `user`.
    - Import the SQL file (provided in the repository) to create the necessary tables.

4.  **Configure Database Connection (if needed):**
    - The default WAMP settings are usually:
    ```php
    $host = "localhost";
    $user = "root";      // Default WAMP MySQL username
    $pass = "";          // Default WAMP MySQL password (empty)
    $dbname = "user";    // Your database name
    ```

5.  **Run the Application:**
    - Open your browser and go to `http://localhost/TehXpress/`.


---
**Developed as part of the UECS2194 course.**
