<?php
require_once "ads.php";
$visoSkelbimu = count($skelbimai);
$apmoketiSkelbimai = 0;
$sumoketaSuma = 0;
$nesumoketaSuma = 0;
foreach ($skelbimai as $skelbimas) {
    if ($skelbimas['onPay'] != 0) {
        $apmoketiSkelbimai++;
        $sumoketaSuma += $skelbimas['cost'];
    } else {
        $nesumoketaSuma += $skelbimas['cost'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Skelbimai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <table>
                <tr>
                    <th class="title-id">Skelbimo ID</th>
                    <th class="title-text">Skelbimo tekstas</th>
                    <th class="title-cost">Kaina</th>
                    <th class="title-onpay">Apmokėjimo data</th>
                </tr>
                    <?php foreach ($skelbimai as $skelbimas) {?>
                        <tr>
                            <td> <?php echo $skelbimas['id']; ?> </td>
                            <td> <?php echo $skelbimas['text']; ?> </td>
                            <td> <?php echo $skelbimas['cost']; ?> </td>
                            <td>
                                <?php
if ($skelbimas['onPay'] != 0) {echo date('Y-m-d', $skelbimas['onPay']);} else {echo "Neapmokėta";}
    ?>
                            </td>
                        </tr>
                    <?php }?>
            </table>
        <div>
    </div>
</div>

<div class="container">
        <div class="row last-row">
            <table>
                <tr>
                    <td class="right-align">Viso skelbimų: </td>
                    <td><?php echo $visoSkelbimu ?></td>
                </tr>
                <tr>
                    <td class="right-align">Apmokėtų skelbimų: </td>
                    <td><?php echo $apmoketiSkelbimai ?></td>
                </tr>
                <tr>
                    <td class="right-align">Gauta suma už skelbimus: </td>
                    <td><?php echo $sumoketaSuma ?></td>
                </tr>
                <tr>
                    <td class="right-align">Suma kurią liko apmokėti: </td>
                    <td><?php echo $nesumoketaSuma ?></td>
                </tr>
            </table>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>

$('.title-onpay').click(function(){
    alert('clicked');
})

</script>

</body>
</html>
