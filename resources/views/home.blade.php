<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Hello!</title>

    <style>
        body {
            background-image: linear-gradient(to right, #8360c3, #2ebf91); 
            padding-top: 2em;           
            font-family: Arial, Helvetica, sans-serif;
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
        article {
            padding: 0 5em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .article {
            display: grid;
            grid-template-columns: 10em 10em 10em;
            column-gap: 5em;
        }
        .article a {
            background-color: #fff;
            opacity: .5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            text-decoration: none;
            padding: 2em 0;
            border-radius: 20px;
        }
        .article a:hover {
            color: #fff;
            background-color: #2ebf91;
            opacity: 1;
        }
    </style>
</head>
<body>
    <h1>Hi, I'm Rosa Salsa Saida.</h1>
    <article>
        <div class=article>
            <p><a href="profile">Profile</a></p>
            <p><a href="mycv">CV</a></p>
            <p><a href="portfolio">Portfolio</a></p>
        </div>
    </article>
</body>
</html>