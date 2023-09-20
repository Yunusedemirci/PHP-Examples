<?php
require_once("baglan.php");

$GelenSecimDegerleri = $_POST["secim"];

foreach ($GelenSecimDegerleri as $SilinecekDeger) {
    $SilinicekID = Filtrele($SilinecekDeger);
    $Sil = $VeriTabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id = ? LIMIT 1");
    $Sil->execute([$SilinicekID]);
}

header("Location: index.php");
exit();
?>