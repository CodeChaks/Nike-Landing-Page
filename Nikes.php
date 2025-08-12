<?php
// Nike Landing Page
$title = "Nike Landing Page";
$description = "Experience unmatched comfort and performance with Nike's latest collection. Designed for athletes, made for everyone. Take your game to the next level with cutting-edge technology and timeless style.";
$imageURL = "shoe.jpg"; // local image
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0a0f2c; /* Dark navy blue */
            /* Starry crystal-like background */
            background-image: radial-gradient(rgba(255,255,255,0.8) 1px, transparent 1px),
                              radial-gradient(rgba(255,255,255,0.6) 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: 0 0, 25px 25px;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            background: rgba(10, 15, 44, 0.85); /* Semi-transparent navy to see stars */
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
            border-radius: 10px;
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }
        .text-section {
            flex: 1;
            padding: 40px;
        }
        .text-section h1 {
            font-size: 2rem;
            color: #fff;
        }
        .text-section p {
            font-size: 1rem;
            color: #cfd8ff;
            line-height: 1.5;
            margin-top: 15px;
        }
        .text-section a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #ffffff;
            color: #0a0f2c;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .image-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(255,255,255,0.4);
            transition: transform 0.3s ease;
        }
        .image-section img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <!-- Left Side (Description) -->
            <div class="text-section">
                <h1>NIKE — Just Do It</h1>
                <p><?php echo $description; ?></p>
                <a href="#">Shop Now</a>
            </div>
            <!-- Right Side (Image) -->
            <div class="image-section">
                <img src="<?php echo $imageURL; ?>" alt="Jordan Shoe">
            </div>
        </div>
    </div>
</body>
</html>
