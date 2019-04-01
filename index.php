<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEGACENTER S.A</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/sweetalert.js"></script>
</head>
<body>

    <div class="main" >

        <div class="header" style="height: 10px">


            <img src="images/logo.png" style="width: 170px; height: 120px;margin-top: 20px">
            <img src="images/techdaylogo2.png" alt="">
        </div>

        <div class="container" style="width: 1350px;">

            <form id="booking-form" class="booking-form" method="POST">
                <div class="form-group">
                    <div class="form-destination">
                        <label for="destination">NOMBRE</label>
                        <input   type="text" id="nombrePersona" name="destination" placeholder="NOMBRE COMPLETO" style="text-transform: uppercase;"    />
                    </div>
                    <div class="form-date-from form-icon">
                        <label >EMPRESA</label>
                        <input type="text"   id="empresa" placeholder="EMPRESA" style="text-transform: uppercase" />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-date-to form-icon">
                        <label >TELEFONO 1</label>
                        <input type="text" class="date_to" id="telefono1" placeholder="TELEFONO 1" style="text-transform: uppercase" />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-date-to form-icon">
                        <label >TELEFONO 2</label>
                        <input type="text" class="date_to" id="telefono2" placeholder="TELEFONO 2" style="text-transform: uppercase"/>
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>

                    <div class="form-date-to form-icon">
                        <label >CORREO</label>
                        <input type="text" class="date_to" id="correo" placeholder="CORREO"/>
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>

                    <div class="form-date-to form-icon">
                        <label >REGISTRO</label>
                        <input type="text" class="date_to" id="registro" placeholder="REGISTRO"/>
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>


                    <div class="form-submit">
                        <input type="submit" id="submit" class="submit" value="GUARDAR" onclick="guardar()"  />
                    </div>
                </div>

                <div class="form-date-to form-icon">
                    <label >COMENTARIOS</label>
                    <textarea rows="5" cols="170" class="date-to" id="comentarios" placeholder="COMENTARIOS" style="text-transform: uppercase"></textarea>
                    <br>
                    <br>
                    <a href="php/ExcelClientes.php" class="submit" type="submit" style="background: #449D44;color: #ffffff;">EXCEL</a>


                    <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                </div>

            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/controller.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>