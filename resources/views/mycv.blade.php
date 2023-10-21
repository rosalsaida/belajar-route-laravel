<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosa's CV</title>

    <style>
        body {
            background-image: linear-gradient(to right, #8360c3, #2ebf91); 
            padding-top: 2em;           
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
        }
        h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(to right, #c6ffdd, #fbd786, #f7797d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 3rem;
        }
        footer {
            padding-top: 35vmax;
            float: right;
        }
        .previous, .next {
            color: #000;
            text-decoration: none;
            background-color: #fff;
            border-radius: 20px;
            padding: .5em 1em;
        }
        .previous:hover, .next:hover {
            background-color: #F9B572;
        }
    </style>
</head>
<body>
    <h1>CURRICULUM VITAE</h1>
    <img src="/laravel/resources/views/cvrosa.jpg" alt="Photo CV">
    <footer>
        <div class="previous_next">
            <a class="previous" href="home"><< Back to Home</a>
            <a class="next" href="portfolio">See Portfolio >></a>
        </div>
    </footer>
</body>
</html>