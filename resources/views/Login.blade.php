<!DOCTYPE html>
<html lang ="en">
    <head>
        <title></title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <style>
            *{
                box-sizing: border-box;
            }

            .header{
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                text-align: center;
            }

            .loginSection{
                text-align: center;
                width: 50%;
                border-style: solid;
            }
        </style>

    </head>
    <body>

        <div class = "header">
            <h1>Pro Pay Login</h1>
        </div>

        <div class = "loginSection">
            <p>Enter credentials:</p>
            <?php echo Form::label('email', 'E-Mail Address'); ?>
        </div>

    </body>
</html>