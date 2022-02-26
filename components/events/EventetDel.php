<?php
require_once '../../controllers/EventControll.php';

if (isset($_GET['ID'])) {
    $itemID = $_GET['ID'];
}
$eventi = new EventControll;
$eventi->delete($itemID);

?>