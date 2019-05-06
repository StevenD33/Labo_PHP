<!doctype html>
<html>
<head>
    <?php
    $heure=date("H");

    if ( ($heure>19 and $heure<=23) or ( ($heure >=0) and ($heure <8)))
    {
        echo "<style>body{background-color: black;}}</style>";
        echo "<style>p{color : white;}}</style>";
    }else
    {
        echo" <style>body{background-color: white;}</style>";
        echo "<style>p{color : black ;}}</style>";
    }
    ?>
</head>
<body>
<ul>
    <li><a href="<?= PATH ?>home">Home</a></li>
    <li><a href="<?= PATH ?>paris">paris</a></li>
    <li><a href="<?= PATH ?>bordeaux">bordeaux</a></li>
</ul>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
echo "<p>Nous sommes le $date et il est $heure<p>";
?>


<?php for ($i = 1; $i < 5; $i++) { ?>
    <img src="https://www.prevision-meteo.ch/uploads/widget/paris_<?php echo $i; ?>.png" width="650" height="250" />
<?php } ?>
</body>

</html>