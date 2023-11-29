@extends('layout.app')

@section('appContents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica', sans-serif;
            font-size: 16px;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            background: linear-gradient(180deg, #f4f4f4, #dcdcdc);
        }

        .content {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }


.contents b:hover {
    color: #4285f4;
    cursor: pointer;
}


        h2 {
            color: blue;
            text-transform: uppercase;
            font-size: 2em;
          }


        .rohit-sharma-info {
            margin-bottom: 20px;
        }

        .rohit-sharma-info p {
            line-height: 1.6;
        }

        .image-slideshow {
            max-width: 70%;
            position: relative;
            margin: auto;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .image {
            display: none;
            width: 100%;
            opacity: 0.8;
            transition: opacity 1s ease-in-out;
        }

        .image.active {
            display: block;
            opacity: 1;
        }

        .image img {
            width: 100%;
            border-radius: 8px;
        }

        .fade {
            animation: fade 2s infinite;
        }

        @keyframes fade {
            0%,
            100% {
                opacity: 0.8;
            }

            50% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <div class="content">
        <h2><b>Introduction</b></h2><br>

        <div class="image-slideshow">
            <div class="image fade active">
                <img src="./images/1.jpg" alt="Mountain Top">
            </div>
            <div class="image fade">
                <img src="./images/2.jpg" alt="Palm Trees">
            </div>
            <div class="image fade">
                <img src="./images/3.jpg" alt="Neon Sign">
            </div>
            <div class="image fade">
                <img src="./images/4.jpg" alt="Mountain Top">
            </div>
            <div class="image fade">
                <img src="./images/5.jpg" alt="Mountain Top">
            </div>
            <div class="image fade">
                <img src="./images/6.jpg" alt="Mountain Top">
            </div>
        </div>
<br>
<div class="contents"><b>
    <p>
        🏏 Meet the "Hitman" of Indian cricket, the dynamic Rohit Sharma! Born on April 30, 1987, in Bansod, Nagpur,
        Sharma is more than just a cricketer; he's a cricketing maestro with a touch of elegance and a dash of charisma.
    </p><br>
    <p>
        🚀 Bursting onto the scene in June 2007, Rohit quickly became the maestro of the cricketing symphony. His
        bat? A magic wand, conjuring runs with every stroke. Limited-overs cricket found its wizard in him.
    </p><br>
    <p>
        🏆 Amidst the cricketing brilliance, Rohit Sharma donned the captain's hat, steering India to glory. The 2018
        Asia Cup and the 2021 ICC Cricket World Cup bear witness to his leadership alchemy.
    </p><br>
    <p>
        💖 Off the pitch, Rohit isn't just a cricketer; he's a philanthropist. His heart swings for charitable
        endeavors, a testament to his commitment to society. The "Hitman" isn't just hitting boundaries; he's
        hitting life's challenges out of the park.
    </p><b><br>
</div>

        <script>
            let index = 0;
            displayImages();

            function displayImages() {
                let i;
                const images = document.getElementsByClassName("image");
                for (i = 0; i < images.length; i++) {
                    images[i].classList.remove("active");
                }
                index++;
                if (index > images.length) {
                    index = 1;
                }
                images[index - 1].classList.add("active");
                setTimeout(displayImages, 2000);
            }
        </script>
    </div>
</body>

</html>
@endsection
