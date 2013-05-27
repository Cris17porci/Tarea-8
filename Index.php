<!DOCTYPE html>
<html lang = "es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Tarea 8 ISW</title>
</head>

<body>
    <header><h1>Ingrese</h1></header>
 <form action="login.php" method="post" name="form">
                    <div class="formulario">
                        <table>
                            <tr>
                                <td>Usuario: </td>
                                <td><input type= "text" name="rut" placeholder='Rut sin puntos' required  size="15"/> - </td> 
                                <td><input type="number" size="1" name='guion' /></td>
                            </tr>
                            <tr>
                                <td>Pass: </td>
                                <td><input type="password" name="password" placeholder='ingrese password' required  size="15"/></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Entrar" /></td>
                            </tr>
                            
                        </table>
                    </div>
     
                </form>
    

</body>

</html>