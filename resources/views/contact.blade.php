@extends('layout.app')
@section('appContents')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Rohit Sharma</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #3498db, #2ecc71);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        header {
            padding: 2em;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(141, 30, 104, 0.1);
            background-color: #fff;
        }

        header::before {
            content: '';
            background-image: url('instagram-doodle.svg');
            background-size: contain;
            position: absolute;
            top: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
        }

        section {
            max-width: 600px;
            width: 100%;
            margin: 2em;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #fff; /* White background for content */
            transition: transform 0.3s ease;
        }

        section:hover {
            transform: scale(1.05);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }


        p {
            line-height: 1.6;
            color: #555;
        }

        .contact-info {
            margin-top: 1.5em;
        }

        .contact-info p {
            margin-bottom: 0.5em;
        }

        .social-links {
            margin-top: 1.5em;
            text-align: center;
        }

        .social-links a {
            color: #333;
            text-decoration: none;
            margin: 0 15px;
            font-size: 24px;
            border: 2px solid #3498db;
            border-radius: 50%;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: #3498db;
            color: #fff;
            transform: scale(1.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            width: 100%;
            position: fixed;
            bottom: 0;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <header>
        <h1>Contact</h1>
    </header>
    <section>

        <p>Rohit Sharma is a renowned cricketer known for his outstanding performances. If you need to contact him, you can use the following information:</p>

        <div class="contact-info">
            <p><strong>Email:</strong> rohit.sharma45@gmail.com</p>
            <p><strong>Phone:</strong> +91 990890025</p>
            <p><strong>Facebook:</strong> <a href="https://www.facebook.com/rohitsharma" target="_blank">rohit.sharma</a></p>
            <p><strong>Twitter:</strong> <a href="https://twitter.com/imro45" target="_blank">@imro45</a></p>
            <p><strong>Instagram:</strong> <a href="https://www.instagram.com/rohitsharma45/" target="_blank">@rohitsharma45</a></p>

        </div>

        <div class="social-links">
            <p><strong>Connect with Rohit Sharma on Social Media:</strong></p>
            <br>
            <a href="https://www.facebook.com/rohitsharma" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com/imro45" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/rohitsharma45" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </section>

</body>

</html>

@endsection
