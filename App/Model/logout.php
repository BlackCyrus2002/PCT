<?php
session_start();
session_destroy();
header("Location: ../../View/Client/connexion/connexion.php");