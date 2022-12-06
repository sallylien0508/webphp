<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&family=Unica+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    body{
        padding: 0px;
        margin: 0px;
    }
    section{
        width: 100vw;
        height: 100vh;
        /* background: khaki; */
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .big_img{
        background-image: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, .8)), url(https://i.pinimg.com/originals/99/6a/7e/996a7e4520578bdd8b163dbbed83cbb6.jpg);
    }
    nav{
        width: 29vw;
        height: 100%;
        /* background: lightblue; */
        background: rgb(100, 85, 66);
        font-family: 'Unica One', cursive;
        text-transform: uppercase;
        display: grid;
        place-items: center;
        font-size: 50px;
        letter-spacing: 7px;
        text-indent: 7px;
        color: white;
        position: relative;
    }
    .main{
        width: 70vw;
        height: 100%;
        /* background: lightcoral; */
        display: grid;
        place-items: center;
    }
    nav p::before{
        font-family: 'Font Awesome 5 Free';
        content: "\f183";
        /* position: absolute;  */
        display: block;
        text-align: center;
        padding-bottom: .5em;
    }
    nav p{
        margin-bottom: .5em;
    }
    iframe{
        width: 100%;
        height: 100%;
        /* background: darkkhaki; */
        margin-left: 0;
    }
    </style>
</head>
<body>
    <section class="big_img">
        <nav>
            <p>contributor</p>
        </nav>
        <div class="main">
            <?php
            $current_page = 'contributor_icon';
            if (array_key_exists('page', $_POST)){
                $current_page = $_POST['page'];
            }
            switch($current_page){
                case 'list':
                    include 'contributor_list.html';
                    break;
                default:
                    include 'contributor_icon.html';
            }
            ?>
        </div>
    </section>
</body>
</html>