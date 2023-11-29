@extends('layout.app')
@section('appContents')
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="display-4">The Cricketing Journey</h1>
            <p class="lead">Explore the history and milestones in Rohit Sharma's illustrious cricket career.</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <ul class="timeline">
                    <li class="timeline-item">
                        <div class="timeline-item-content">
                            <h3 class="timeline-title">Early Life and Entry into Cricket</h3>
                            <div class="content-details">
                                <img src="./images/rohit_early_life.jfif" alt="Rohit Sharma Early Life">
                                <p class="timeline-text">Rohit Sharma was born on April 30, 1987, in Bansod, Nagpur, Maharashtra. His interest in cricket began at a young age, and he joined a cricket camp when he was just 11 years old. His talent was quickly recognized, and he soon became a part of Mumbai's cricketing circles.</p>
                                <p class="timeline-text">Rohit's prowess with the bat caught the attention of coaches and selectors, leading to his selection in the Mumbai under-17 team. His performances at the junior level paved the way for his entry into higher levels of Indian cricket.</p>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-item">
                        <div class="timeline-item-content">
                            <h3 class="timeline-title">International Debut and Rise to Stardom</h3>
                            <div class="content-details">
                                <img src="./images/international_debut.jpg" alt="Rohit Sharma International Debut">
                                <p class="timeline-text">Rohit made his international debut for India in a T20 match against England in 2007. However, it was in the ODI format that he truly made his mark. His first ODI century came against Zimbabwe in 2010, and he continued to build a reputation as a reliable middle-order batsman.</p>
                                <p class="timeline-text">The turning point in Rohit's career came when he was promoted to open the innings in ODIs. This move proved to be a masterstroke, as he went on to become one of the most prolific opening batsmen in limited-overs cricket.</p>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-item">
                        <div class="timeline-item-content">
                            <h3 class="timeline-title">Domestic and IPL Success</h3>
                            <div class="content-details">
                                <img src="./images/ipl_success.png" alt="Rohit Sharma IPL Success">
                                <p class="timeline-text">Rohit Sharma made his debut for the Mumbai senior team in the 2006-07 season and made an immediate impact. His consistent performances in domestic cricket earned him a spot in the Indian Premier League (IPL). In the IPL, Rohit has been a standout performer, captaining the Mumbai Indians to multiple championships and establishing himself as a premier batsman in the tournament.</p>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-item">
                        <div class="timeline-item-content">
                            <h3 class="timeline-title">Leadership and Achievements</h3>
                            <div class="content-details">
                                <img src="./images/leadership.jpg" alt="Rohit Sharma Leadership">
                                <p class="timeline-text">Rohit Sharma's leadership skills came to the fore when he was appointed the captain of the Indian cricket team in limited-overs formats. Under his captaincy, India achieved notable successes, including victories in major tournaments.</p>
                                <p class="timeline-text">While this history provides a glimpse into Rohit Sharma's cricketing journey, it is just a snapshot of the numerous records, centuries, and memorable moments that define his illustrious career.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        /* Add your CSS styles here */

        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif; /* Use a modern and clean font */
            margin: 0;
            padding: 0;
        }

        .jumbotron {
            background-color: #007bff;
            color: #fff;
            padding: 2rem;
            border-radius: 0;
            margin-bottom: 20px;
        }

        h1, h2, h3, p {
            color: #343a40;
        }

        .timeline-item {
            position: relative;
            border: 2px solid #343a40;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #fff;
            transition: transform 0.3s ease-in-out;
        }

        .timeline-item:hover {
            transform: scale(1.02);
        }

        .timeline-item-content {
            padding: 20px;
        }

        .timeline-title {
            font-weight: bold;
            font-style: italic;
            color: #007bff; /* Blue color */
            margin-bottom: 10px;
        }

        .timeline-text {
            font-style: italic;
            color: #343a40; /* Dark gray color */
            line-height: 1.6;
        }

        .content-details {
            display: flex;
            align-items: center;
        }

        .content-details img {
            width: 50%;
            max-width: 300px;
            margin-right: 20px;
            border-radius: 5px;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
@endsection
