<?php

    $arr=array("senin", "selasa", "rabu"); 
    foreach ($arr as $hari)
    {
    echo "Hari: " . $hari . "<br>";
    }
    <?php

    $angka=12;
    $pengali=15;

    echo "Table Perkalian<br>";
    echo "==================== <br>";

    do
    {
        $hasil=$angka*$pengali;
        echo "$angka * $pengali = $hasil <br>";
        $pengali=$pengali+2;
    }
    while($pengali<=45)

?> 
?>