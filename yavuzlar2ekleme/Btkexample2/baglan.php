<?php
try {
    $VeriTabaniBaglantisi = new PDO("mysql:host=localhost;dbname=ornek2;charset=UTF8", "root", "");
} catch (PDOException $Hata) {
    echo "Bağlantı Hatası: " . $Hata->getMessage();
    die();
}

function Filtrele($Deger)
{
    $Bir = trim($Deger);
    $Iki = strip_tags($Bir);
    $Uc = htmlspecialchars($Iki, ENT_QUOTES);
    $Sonuc = $Uc;
    return $Sonuc;
}
?>