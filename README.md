# Image Upload Project

## Overview
This project is a simple web application for registering users with their images. It allows users to input their username and mobile number, and upload an image. The application then displays all registered users along with their uploaded images.

## Functionality
- **User Registration**: Users can register by providing their username, mobile number, and an image.
- **Image Upload**: The application handles image uploads and stores them in a designated folder on the server.
- **Data Storage**: User data along with the image path is stored in a MySQL database.
- **Display Users**: The application displays all registered users and their images in a tabular format.

## Technology Stack
- **Frontend**: HTML, Tailwind CSS
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache

## Pages

### Index Page (`index.php`)
The main page of the application where users can register. It includes a form for username, mobile number, and image upload.

![Index Page](images/registration.png)

### Display Page (`display.php`)
This page displays all registered users and their images in a table format.

![Display Page](images/registration.png)

### Operations (`operations.php`)
A PHP script that includes functions for handling form input fields and fetching images from the database.

### Connection (`connect.php`)
This script establishes a connection to the MySQL database.

## Setup and Installation
1. **Clone the Repository**: Clone this repository to your local machine or server.
3. **Configuration**: Update the database connection settings in `connect.php` as per your database credentials.
4. **Run the Application**: Place the project in your server's document root (e.g., `htdocs` for XAMPP) and access it via a web browser.

## Security Notes
- The application does not implement advanced security measures and is intended for educational/demonstration purposes.
- Ensure to protect against SQL injection, validate and sanitize all user inputs, and manage file uploads securely in a production environment.