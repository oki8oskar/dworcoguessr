<!DOCTYPE html>
<html>
    <head>
        <title>Dworcoguessr</title>
    </head>
    <body>
        <div id="header">
            <img src="images/logo.svg">
            <h2>Dworcoguessr</h2>
        </div>
        <div id="main-content">
                <h3> Co to za dworzec? </h3>              
                <form method='POST' action='classic.php'>
                    <input name='name'>
                    <button type='submit'>Zatwierdź</button>
                </form>
                <?php
                    // Selectiong image from db

                    $con = mysqli_connect('localhost','root','','dworcoguesser');
                    $q = "SELECT * FROM dworce";
                    $query = mysqli_query($q, $con);
                    $result = mysqli_fetch_assoc($query);

                    session_start();
                    $_SESSION['active_station'] = $result['name'];

                    echo "<img src='./images/".$image.".jpg'>"
                ?>
        </div>

        <style>
            body{
                background-image: url("./images/bkg.jpg");
                background-color: #cccccc; 
                background-repeat: no-repeat; 
                background-size: cover; 
            }
            #header > img{
                float: left;
            }
            #header{
                font-size: 29px;
                padding: 0px;
                margin: 0px;
                width: 100%;
                background-color: #0a7;
                border: 3px double #000;
            }
            #main-content{
                margin-top: 5%;
                text-align: center;
                background-color: #0a7;
                width: 50%;
                margin-left: 25%;
                height: 100px;
                padding: 20px;
                border: 3px double #000;
            }
        </style>
    </body>
</html>1