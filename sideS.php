<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSO-Assist Sidebar</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        /* Header Styles */
        header {
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 15px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-links {
            display: flex;
            margin-bottom: auto;
            padding-top: 5px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin: 0 15px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #f4f4f9;
        }

        /* Sidebar Styles */
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2em;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: orange;
            background-color: black;
        }

        /* Button to open sidebar */
        .btn-menu {
            font-size: 24px;
            cursor: pointer;
            color: black;
            background-color: transparent;
            border: none;
            padding: 10px;
        }
        
        .btn-menu:hover {
            background-color: #f4f4f9;
            border-radius: 5px;
        }

        /* Hero Section */
        .hero {
            min-height: 90vh;
            background: url('hero-bg.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
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

        @media (max-width: 768px) {
            .hero-content h2 {
                font-size: 2em;
                color: black;
            }

            .hero-content .btn {
                padding: 10px 20px;
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            .hero-content h2 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <header>
        <button class="btn-menu" onclick="openSidebar()">&#9776;</button> <!-- Sidebar Menu Icon -->
        <nav class="nav-links">
            <a href="login.php" class="btn-login">Login</a>
        </nav>
    </header>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" style="font-size: 24px; padding: 20px;" onclick="closeSidebar()">&#10005;</a> <!-- Close Button -->
        <a href="profile.php">Profile</a>
        <a href="settings.php">Settings</a>
        <a href="help.php">Help</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="hero">
        <div class="hero-content">
            <h2>WELCOME</h2>
            <a href="home.php" class="btn">START</a>
        </div>
    </div>

    <script>
        // Function to open the sidebar
        function openSidebar() {
            document.getElementById('sidebar').style.width = '250px'; // Open sidebar
        }

        // Function to close the sidebar
        function closeSidebar() {
            document.getElementById('sidebar').style.width = '0'; // Close sidebar
        }

        // Close sidebar if clicked outside
        window.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const btnMenu = document.querySelector('.btn-menu');
            if (!sidebar.contains(event.target) && !btnMenu.contains(event.target)) {
                closeSidebar();
            }
        });
    </script>
</body>
</html>