<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navigation Bar Styling */
        header {
            background-color: #333;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: #ff6347;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
        }

        /* Footer Styling */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        #about-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 90vh;
            background-color: #f4f4f4;
            padding-top: 200px;
        }

        .about-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgb(176, 174, 174);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        .about-image img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .about-info h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .job-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #ff6347;
        }

        .location {
            font-size: 16px;
            color: #777;
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .about-container {
                flex-direction: row;
                max-width: 800px;
            }

            .about-image img {
                margin-right: 30px;
            }

            .about-info {
                text-align: left;
            }
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>

    <section id="about-section">
        <div class="about-container">
            <div class="about-image">
                <img src="assets/github-foto.jpeg" alt="Profile Picture">
            </div>
            <div class="about-info">
                <h1>Ramadhan Nur Khadafi</h1>
                <p class="job-title">Laravel & Filament Developer</p>
                <p class="location">Samarinda, Indonesia</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Test Laravel. All rights reserved.</p>
    </footer>
</body>
</html>
