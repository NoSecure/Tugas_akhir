    <?php
require_once("../koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
     
    if (isset($_GET['act']) && isset($_GET['ref'])) {
        $act = $_GET['act'];
        $ref = $_GET['ref'];
             
        if ($act == "add") {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if (isset($_SESSION['items'][$id])) {
                    $_SESSION['items'][$id] += 1;
                } else {
                    $_SESSION['items'][$id] = 1; 
                }
            }
        } elseif ($act == "plus") {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if (isset($_SESSION['items'][$id])) {
                    $_SESSION['items'][$id] += 1;
                }
            }
        } elseif ($act == "min") {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if (isset($_SESSION['items'][$id])) {
                    $_SESSION['items'][$id] -= 1;
                }
            }
        } elseif ($act == "del") {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if (isset($_SESSION['items'][$id])) {
                    unset($_SESSION['items'][$id]);
                }
            }
        } elseif ($act == "clear") {
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        } 
         
        header ("location:" . $ref);
    }
?>