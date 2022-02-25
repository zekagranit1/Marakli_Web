<?php
require_once '../../controllers/ShopControll.php';

if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
}
$shop = new ShopControll;
$shop->delete($itemId);

?>