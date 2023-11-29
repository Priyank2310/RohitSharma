@extends('layout.app')
@section('appContents')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./images/achievement.avif');
            background-size: cover;
            color: #fff;
            line-height: 1.6;
            background-attachment: fixed;
        }

        h1, h2 {
            color: #009688;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            position: relative;
            z-index: 2; /* Ensure the container is above the background overlay */
        }

        .achievement {
            margin-bottom: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            position: relative;
            z-index: 1;
            mix-blend-mode: multiply; /* Blend mode to interact with background */
        }

        .achievement:hover {
            transform: scale(1.05);
        }

        .date {
            color: #777;
        }

        /* Add some spacing between paragraphs */
        .achievement p {
            margin-bottom: 10px;
        }

        /* Style headings inside achievements */
        .achievement h2 {
            color: #009688;
            margin-bottom: 15px;
        }

        /* Style for the background image */
        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1; /* Place it behind other elements */
        }

        /* Additional styling for a centered layout */
        .centered {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

    </style>
    <title>Rohit Sharma - Cricket Achievements</title>
</head>
<body>
<br>
    <div class="background-overlay"></div>

    <div class="container centered">


        <div class="achievement">
            <h2>World Records</h2>
            <p>Nov 13, 2014 - Scored the highest ever individual score in a one-day international match (264 against Sri Lanka).</p>
            <p>Jan 2020 - Named ODI Player of the Year by ICC.</p>
            <p>2019 World Cup - Scored five centuries, a record for a single edition.</p>
        </div>

        <div class="achievement">
            <h2>Test Cricket</h2>
            <p>Oct 5, 2019 - First batsman to score two centuries in a Test match on his opening appearance.</p>
            <p>Oct 11, 2023 - Surpassed Chris Gayle's record for the most international sixes (553).</p>
        </div>

        <div class="achievement">
            <h2>ODI Milestones</h2>
            <p>Oct 14, 2023 - Became the first Indian to hit 300 sixes in the 50-overs format.</p>
            <p>Oct 22, 2023 - Smashed 50 ODI sixes in a single calendar year.</p>
        </div>

        <div class="achievement">
            <h2>National and Sporting Honours</h2>
            <p>2015 - Arjuna Award</p>
            <p>2020 - Major Dhyan Chand Khel Ratna</p>
            <p>Wisden Cricketers' Almanack: Selected as one of the five Wisden Cricketers of the Year in 2022.</p>
        </div>

    </div>

</body>
</html>

@endsection
