<meta charset="utf-8"/>

<?php

function protegePagina() {
    if (!$_SESSION['usuario']) {
        echo"<script>alert('voce não esta logado');location.href='index.php'</script>";
    }
}

function sairPagina() {
    session_unset();
    echo "<script>location.href='index.php'</script>";
}
?>


