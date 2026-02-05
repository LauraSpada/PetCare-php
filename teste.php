<?php
require "connection.php"; 

$conn = connectBD();

echo "Conectado com sucesso!";

disconnectBD($conn);
