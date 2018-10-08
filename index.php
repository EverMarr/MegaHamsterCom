<?php

namespace Gavran\MegaHamsterCom;
use Gavran\MegaHamsterCom\HamsterDomains as HamsterDomains;

require ('vendor/autoload.php');

ini_set('max_execution_time', 60);

//echo "Hello Hamster!";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mega-Hamster</title>
    </head>
    <body>
        <h1>
            <?php echo 'Hello Web Hamster!!'?>
        </h1>
        <hr/>
        <p>
            <?php
            $myTheRoom = new HamsterDomains\TheRoom("The Room", 80, 50, 50, 49);
            $myTheRoom->outputProductInfo();
            ?>
        </p>
        <hr/>
        <p>
            <?php
            $myThePit = new HamsterDomains\ThePit("The Pit", 20, 69);
            $myThePit->outputProductInfo();
            $resultArray = $myThePit->getSpecialEquipment();
            echo $resultArray[0];
            echo '<br/>';
            echo $resultArray[1];
            ?>
        </p>
        <hr/>
        <p>
            <?php
            $area = $myTheRoom->calculateArea();
            echo $area.' square cm.';
            ?>
        </p>
        <hr/>
    </body>
</html>
