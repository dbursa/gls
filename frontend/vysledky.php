<?php

if (isset($_GET["pw"]) && $_GET["pw"]=="7XsLzTB") {
    echo "<table>";
    echo "<tr><th>Projekt</th><th>Počet Hlasů</th></tr>";
    foreach ($votes_projects as $row => $key) {
        echo "<tr>";
        echo "<td>".$row."</td>";
        echo "<td>".$key."</td>";
        echo "</tr>";
    }
    echo "</tr>";
}
else{
echo "...";
}

?>