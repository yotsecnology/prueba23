<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#myPage">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php
            if (isset($_REQUEST['c'])) {
                switch ($_REQUEST['c']) {
                    case 'principal':
                        ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#inicio"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                            <li><a href="?c=busetas"><span class="glyphicon glyphicon-bed"></span>Busetas</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-briefcase"></span>Paquetes</a></li>
                            <li><a class="" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Ingreso</a></li>
                        </ul>
                        <?php
                        break;
                    case 'busetas'
                        ?> 
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="?c=principal"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                            <li><a href="#inicio"><span class="glyphicon glyphicon-bed"></span>Busetas</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-briefcase"></span>Paquetes</a></li>
                            <li><a class="" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Ingreso</a></li>
                        </ul>

            <?php
            break;
        default: ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="?c=principal"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
              <li><a href="?c=busetas"><span class="glyphicon glyphicon-bed"></span>Busetas</a></li>
              <li><a href=""><span class="glyphicon glyphicon-briefcase"></span>Paquetes</a></li>
              <li><a class="" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Ingreso</a></li>
            </ul> <?php
            break;
                }           
                        }else{ ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#inicio"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                            <li><a href="?c=busetas"><span class="glyphicon glyphicon-bed"></span>Busetas</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-briefcase"></span>Paquetes</a></li>
                            <li><a class="" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Ingreso</a></li>
                        </ul>
    <?php } ?>
        </div>
    </div>
</nav>

