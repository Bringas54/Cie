<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
<div id="error"></div>
    <div class="container" id="container">
        
        <div class="form-container sign-in">
            <form  id="formLogin" method="POST" action="PHP/Val.php">
                <img class="logo" src="Sin título.png" alt="Logo">
                <h1>Iniciar sesión</h1>
                <input type="email" placeholder="email" id="email">
                <input type="password" placeholder="password" id="password">
                <input type="submit" id="login"></input>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>CIE</h1>
                    <P><strong>Centro de Innovación y Educacion</strong></P>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="SCRIPT/login.js"></script>
    
</body>

</html>