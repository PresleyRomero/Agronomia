<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <!-- <link rel="stylesheet" type="text/css" href="view/frontend/css/zpage-login.css"> -->
        <style type="text/css">
            h1{
                text-align: center;
            }

            table{
                background: green;
                margin: auto;
                border: 2px dotted #F00
            }

        </style>
    </head>
    <body>
        <!--Este es mi cuerpo del index-->      
    
        <h1>INTRODUCE TUS DATOS</h1>

            <form class="formlogin" action="../controller/CLogin.php" method="post">
                <table>
                    <tr>
                        <td>USUARIO:</td>
                        <td><input type="text" name="txtuser"></td>
                    </tr>
                    <tr>
                        <td>CONTRASEÑA:</td>
                        <td><input type="password" name="txtpass"></td>
                    </tr>
                    <tr><td><input type="submit" name="btnentrar" value="ENTRAR"></td></tr> 
                </table>
                

            </form>

            <!--require_once("view/login.php");
            //require_once("controller/Clogin.php");-->


    </body>
</html>
