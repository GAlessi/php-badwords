<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <style media="screen">
            .container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100vh;
            }

            h2{
                margin-bottom: 50px;
            }


        </style>

        <?php
            $sentence = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $badword = $_GET['badword'];
            $censuredSentence = str_replace($badword, "***", $sentence);
        ?>


        <h1>Paragrafo originale</h1>
        <p>
            <?php echo "$sentence"; ?>
        </p>
        <h2>Lunghezza paragrafo originale:
            <?php echo strlen("$sentence"); ?>
        </h2>

        <h1>Paragrafo censurato</h1>
        <p>
            <?php echo "$censuredSentence"; ?>
        </p>
        <h2>Lunghezza paragrafo originale:
            <?php echo strlen($censuredSentence); ?>
        </h2>

    </body>
</html>
