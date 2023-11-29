@extends('layout.app')
@section('appContents')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Rohit Sharma</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        h1,
        h2,
        h3 {
            color: greenyellow;
            text-align: center;
        }

        p {
            line-height: 1.6;
            color: #666;
            margin-bottom: 15px;
        }

        ul {
            margin-bottom: 15px;
        }

        li {
            line-height: 1.6;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .gallery {
            margin-top: 20px;
        }

        .gallery img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <header>
        <h1>About</h1>
    </header>

    <section>
        <h2>Rohit Sharma - The Hitman</h2>
        <p>Rohit Sharma, born on April 30, 1987, in Bansod, Nagpur, India, is a cricketing maestro celebrated for his
            aggressive batting style and remarkable ability to score big runs.</p>

        <p>With numerous accolades to his name, including the highest individual score in ODIs (264 runs against Sri
            Lanka in 2014), Rohit has become a cornerstone for the Indian cricket team. He also leads the Mumbai
            Indians with distinction in the Indian Premier League (IPL).</p>

        <h3>Cricketing Achievements:</h3>
        <ul>
            <li>Holder of the highest individual score in ODIs.</li>
            <li>Captained the Indian team to victory in the 2018 Asia Cup.</li>
            <li>Consistent century-maker in both Tests and ODIs.</li>
        </ul>

        <h3>Off the Field:</h3>
        <p>Beyond the cricket pitch, Rohit Sharma is recognized for his philanthropic work and commitment to various
            charitable activities. He strives to make a positive impact on the lives of those in need.</p>

        <h3>Personal Life:</h3>
        <p>Rohit Sharma is happily married to Ritika Sajdeh, and the couple is blessed with a daughter named Samaira.
            His family has been a constant pillar of support throughout his cricketing journey.</p>
    </section>

    <div class="gallery">
        <img src="./images/rohit_sharma.jpg" alt="Rohit Sharma">

    </div>

</body>

</html>

@endsection
