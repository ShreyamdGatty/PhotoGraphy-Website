<?php
$page="about"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captured Moments - Explore the World Through Our Lens</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 0;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-top: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .photo {
            margin-bottom: 20px;
        }
        .photo img {
            max-width: 100%;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #222;
            color: #ccc;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
            
        
    </style>
</head>
<body>

    <header>
        <h1>Captured Moments</h1>
        <p>Explore the World Through Our Lens</p>
    </header>
    <div class="container">
        <div class="photo">
            <img src="about1.jpg" alt="Landscape Photography">
            <h2>Embracing the Serenity of Nature</h2>
            <p>Let the whispers of the wind and the dance of light guide your soul through breathtaking landscapes.</p>
        </div>
        <div class="photo">
            <img src="about2.jpg" alt="Portrait Photography">
            <h2>Celebrating the Essence of Humanity</h2>
            <p>Each portrait tells a story, capturing the raw emotion and unique essence of every individual.</p>
        </div>
        <div class="photo">
            <img src="about3.jpg" alt="Street Photography">
            <h2>Discovering Beauty in the Ordinary</h2>
            <p>Every corner holds a narrative waiting to be unveiled. Let's wander the streets and capture life's unscripted moments.</p>
        </div>
    </div>
    <footer>
<!-- Your page content goes here -->

<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

        <p>&copy; 2024 Captured Moments. All rights reserved.</p>
    </footer>
</body>
</html>
