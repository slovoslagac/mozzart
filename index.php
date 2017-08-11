<?php
require(join(DIRECTORY_SEPARATOR, array( 'includes', 'init.php')));

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kladionica</title>
    <?php include  LAYOUT_PATH . DS . 'head.php';?>
</head>
<body>
<!--header-->
<nav class="navbar navbar-inverse">
    <div class="container container-fluid header-bottom">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-header center-block">
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt=" "/></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Tabele</a></li>
                <li><a href="#">Rezultati</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="center-block">
        <h3>Trenutna ponuda za klađenje</h3>
        <div class="clearfix"></div>
        <br>
        <table class="table table-striped header-fixed">
            <thead>
            <tr>
                <th colspan="5" class="text-center">Engleska 1</th>
                <th colspan="3" class="text-center">Konačan ishod</th>
                <th colspan="2" class="text-center">Ukupno golova</th>
                <th colspan="2" class="text-center">Oba tima daju gol</th>
            </tr>
            <tr>
                <th>dan</th>
                <th>čas</th>
                <th>šifra</th>
                <th>domaćin</th>
                <th>gost</th>
                <th>1</th>
                <th>X</th>
                <th>2</th>
                <th>0-2</th>
                <th>3+</th>
                <th>GG</th>
                <th>NG</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>pet</td>
                <td>20:45</td>
                <td>2002</td>
                <td>Arsenal</td>
                <td>Lester</td>
                <td>1,55</td>
                <td>4,20</td>
                <td>6,00</td>
                <td>2,41</td>
                <td>1,50</td>
                <td>1,58</td>
                <td>2,23</td>

            </tr>
            <tr>
                <td>pet</td>
                <td>20:45</td>
                <td>2002</td>
                <td>Arsenal</td>
                <td>Lester</td>
                <td>1,55</td>
                <td>4,20</td>
                <td>6,00</td>
                <td>2,41</td>
                <td>1,50</td>
                <td>1,58</td>
                <td>2,23</td>

            </tr>
            <tr>
                <td>pet</td>
                <td>20:45</td>
                <td>2002</td>
                <td>Arsenal</td>
                <td>Lester</td>
                <td>1,55</td>
                <td>4,20</td>
                <td>6,00</td>
                <td>2,41</td>
                <td>1,50</td>
                <td>1,58</td>
                <td>2,23</td>

            </tr>
            </tbody>
        </table>
    </div>
</div>

<!--footer-->

<div class="navbar navbar-fixed-bottom navbar-footer">
    <div class="container">
        <div class="foter-bottom center-block">
            <p class="footer-grid text-center">Mozzart @ 2017</a></p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</body>
</html>