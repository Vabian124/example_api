<?php
    $drivers = PDO::getAvailableDrivers ();
    echo '<pre>' . print_r ($drivers, true) . '</pre>';
?>