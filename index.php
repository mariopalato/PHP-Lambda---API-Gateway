<?php

    for ($i=0; $i < 10; $i++) { 
        echo ($i);
        echo ("<br>");
        
    }
    


    //serverless config credentials --provider aws --key <key> --secret <secret>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo PHP Lambda</title>
</head>
<body>
    <form action = "#" method = "post">
        <ul>
            <li>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="user_name">
            </li>
            <li>
                <label for="name">Correo electronico:</label>
                <input type="email" id="mail" name="user_mail">
            </li>
            <li class="button">
                <button type="submit">Enviar</button>
            </li>
        </ul>
    </form>
</body>
<div>
</html>

