<!DOCTYPE html>

<?php
include_once "classes/DBAdapterCarMarket.php";
$dbAdapterCarMarket = new DBAdapterCarMarket();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styles/guiCarMarket.css">
        <title>.:Car-Market:.</title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <h1>Online-Car-Market</h1>
            <h2> Kaufen</h2>
            <table align="center">
                <tbody>
                            <tr>
                                <td class="dropdown"> <select name="cmb_marke">
                                          <?php
                                          
                                         
                                          echo $dbAdapterCarMarket->getMarkeFromCars();

                                       ?>
                                    </select></td>
                                    
                                    <td class ="dropdown"> <select name="cmb_verkaufspreis">
                                            <?php
                                            echo $dbAdapterCarMarket->getPreisFromCars();
                                            ?>
                                        </select></td>    
                            </tr>
                            
                            <tr>
                                <td class="dropdown"> <select name="cmb_erstzulassung">
                                          <?php                                         
                                          echo $dbAdapterCarMarket->getZulassungFromCars();
                                       ?>
                                    </select></td>
                                    
                                    <td class ="dropdown"> <select name="cmb_ort">
                                            <?php
                                            echo $dbAdapterCarMarket->getPsFromCars();
                                            ?>
                                        </select></td>    
                            </tr>
                        </tbody>
                    </table>
            <div class="wrapper">
                <button class= "button">Suchen</button>
            </div>
        </form>
    </body>
</html>
