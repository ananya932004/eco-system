<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management Services - Farmer</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv7SSxgX3aLd6x8829kXgYfgupp_uuOpC89A&s");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            justify-content: center;
            align-items: center;
        }
        header {
            background: #2a9d8f;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #264653 3px solid;
        }
        header h1 {
            text-align: center;
            margin: 0;
            padding-bottom: 10px;
        }
        .content {
            padding: 20px;
            font-size: large;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .content label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        .content input, .content textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .button {
            text-align: center;
            margin-top: 20px;
        }
        .button button {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #2a9d8f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button button:hover {
            background-color: #21867a;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #264653;
            color: #fff;
        }

        /* Alert Styles */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 16px;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Waste Management Services - Farmer</h1>
        </div>
    </header>

    <!-- Display success or error message -->
    <div class="container">
        <?php
        session_start(); // Start the session
        if (isset($_SESSION['success_message'])) {
            echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
            unset($_SESSION['success_message']); // Clear the message after displaying
        }
        if (isset($_SESSION['error_message'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
            unset($_SESSION['error_message']); // Clear the message after displaying
        }
        ?>
    </div>

    <form id="farmerManagement" action="farmer_submit.php" method="POST">
        <section class="container">
            <div class="content">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
        </section>

        <section class="container">
            <div class="content">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
        </section>

        <section class="container">
            <div class="content">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="2" placeholder="Enter your address" required></textarea>
            </div>
        </section>

        <section class="container">
            <div class="content">
                <label for="manure_required">Amount of Manure Required (in kg):</label>
                <textarea id="manure_required" name="manure_required" rows="1" placeholder="Enter the required manure amount" required></textarea>
            </div>
        </section>

        <section class="container">
            <div class="content">
                <label for="pickup_time">Preferred Pick-Up Timing:</label>
                <textarea id="pickup_time" name="pickup_time" rows="1" placeholder="Enter preferred pick-up timing" required></textarea>
            </div>
        </section>

        <section class="container">
            <div class="button">
                <button type="submit">SUBMIT</button>
            </div>
        </section>
    </form>

    <footer>
        <p>© 2025 Waste Management Services. All Rights Reserved.</p>
    </footer>
</body>
</html>