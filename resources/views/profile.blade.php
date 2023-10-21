<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosa's Profile</title>

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
        .container {
            margin: 0 4em;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0,0,0,0.3);
        }
        p {
            color: #fff;
            padding: 1em 2em;
            width: 70%;
            font-size: 1.2rem;
        }
        .my_desc b {
            color: #F9B572;
        }
        footer {
            padding-top: 24vmax;
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
    <h1>PROFILE</h1>
    <div class="container">
        <p class="my_desc">Saya merupakan mahasiswa Informatika di Universitas Singaperbangsa Karawang. Saya memiliki minat besar dalam bidang desain grafis. Saya terampilan menggunakan <b>Adobe Illustrator</b>, <b>Adobe Photoshop</b>, <b>Canva</b>, dan <b>Figma</b>.</p>
    </div>
    <footer>
        <div class="previous_next">
            <a class="previous" href="home"><< Back to Home</a>
            <a class="next" href="mycv">See CV >></a>
        </div>
    </footer>
</body>
</html>