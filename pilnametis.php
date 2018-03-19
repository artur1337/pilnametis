<?php
function pilnametis($z)
{
    if ($z < "18") {
        echo "Nepilnametis";
    } elseif ($z >= "18") {
        echo "Pilnametis";
    }
    echo "<br>";
}