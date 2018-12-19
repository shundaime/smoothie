<?php

include_once "UserSession.class.php";


$userSession = new UserSession();

$userSession -> destroy();

header('Location: /smooth_maker/index.php');


?>



