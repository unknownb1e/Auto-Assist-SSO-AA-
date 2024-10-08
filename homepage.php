<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSO-Assist</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        /* Header Styles */
        header {
            background-color: #fff;
            display: flex;
            align-items: right;
            justify-content: space-between;
            padding: 15px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Navigation Links */
        .nav-links {
            display: flex;
            align-items: right;
        }
        
        .nav-links: hover{
            background-color: white;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin: 0 15px;
            padding: 10px 20px;
         
            
        }
        .nav-links a:hover {
            background-color: #fff;
            color: orange;
        }

        /* Sidebar Styles */
        .sidebar {
            height: 100%;
            width: 0; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            overflow-x: hidden;
            z-index: 1000;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2em;
            color: #333;
            display: block;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #f0f0f0;
        }

        /* Button to open sidebar */
        .btn-menu {
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            color: black;
        }

        /* Hero Section */
        .hero {
            min-height: 90vh; /* Use min-height for flexibility */
            background: url('hero-bg.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
            padding: 20px; /* Added padding for mobile */
        }

        .hero:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: black;
        }

        .hero-content h2 {
            font-size: 3em;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .hero-content .btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .hero-content .btn:hover {
            background-color: #45a049;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .hero-content h2 {
                font-size: 2em; /* Smaller heading on mobile */
                color: black;
            }

            .hero-content .btn {
                padding: 10px 20px; /* Smaller button on mobile */
                font-size: 1em; /* Adjust button size */
            }
        }

        @media (max-width: 480px) {
            .hero-content h2 {
                font-size: 1.5em; /* Further decrease heading size */
            }
        }
    </style>
</head>
<?php
include "sideS.php";
?>
<body>
    <header>
        <span class="btn-menu" onclick="openSidebar()">&#9776;</span> <!-- Sidebar Menu Icon -->
        <nav class="nav-links">
            <a href="login.php" class="btn-login">Login</a>
        </nav>
    </header>

    <div class="hero">
        <div class="hero-content">
            <h2>WELCOME</h2>
            <a href="home.php" class="btn">START</a>
        </div>
    </div>

</body>
</html>
