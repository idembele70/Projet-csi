<?php

function renderPerso() {

    global $conn;

    $query = "SELECT * FROM client WHERE idClient = 1";

    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        // Get datas
        echo $row['idClient'];

    }

}
