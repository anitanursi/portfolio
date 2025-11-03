<!-- agar dinamis, tidak perlu membuat layout lagi walau kita membuat halaman baru -->

<?php
if (!empty($_GET['page'])) {
    include_once($_GET['page'] . ".php");
} else {
    include "home.php";
}
