<!-- Shared header containing the menu bar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Memorable Photography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap stylesheets and includes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Memorable Photography</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <?php
                include('menu.php');
                ?>

            </ul>

        </div>
    </div>
</nav>
</div>

<!-- Top spacer -->

<div class="row" >
    <br>

</div>

<!-- Custom global stylesheets -->
<style>
    .btn-group-xs > .btn, .btn-xs {
        padding: .45rem .6rem;
        font-size: 1.25rem;
        line-height: 1.2;
        border-radius: .2rem;
    }
    body{
        background-image: url("images/bg.png");
        overflow-x: hidden;
    }

    .container{
        border-radius: 25px;
        padding: 20px;
        background: rgba(240, 240, 240, 0.6);
    }

    .title{
        border-radius: 25px 25px 25px 25px;
        background: rgba(30,144,255, 0.1);
    }


    textarea {
        overflow-y: scroll;
        resize: none;
    }

</style>

