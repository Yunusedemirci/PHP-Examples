<?php
header('Content-Type: text/html; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function Filtrele($Deger){
    $IslemBir = trim($Deger);
    $IslemIki = strip_tags($IslemBir);
    $IslemUc = htmlspecialchars($IslemIki, ENT_QUOTES);
    $Sonuc = $IslemUc;
    return $Sonuc;
}

$GelenIsımSoyisim = Filtrele($_POST['adisoyadi']);
$GelenTelefon = Filtrele($_POST['telefon']);
$GelenEmailAdresi = Filtrele($_POST['emailadresi']);
$GelenKonu = Filtrele($_POST['konusu']);
$GelenMesaj = Filtrele($_POST['mesaji']);

$MailGonder = new PHPMailer(true);

try {
    $MailGonder->SMTPDebug = 0;
    $MailGonder->isSMTP();
    $MailGonder->Host       = 'temp.gmail.com';
    $MailGonder->SMTPAuth   = true;
    $MailGonder->CharSet = 'UTF-8';
    $MailGonder->Username   = 'tempinfo@gmail.com'
    $MailGonder->Password   = 'tempinfo123';
    $MailGonder->SMTPSecure = 'tls';
    $MailGonder->Port       = 587;
    $MailGonder->SMTPOptions = array(
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed'=> true
        
        ],
    );

    $MailGonder->setFrom('tempinfo@gmail.com', 'Temp Info');
    $MailGonder->addAddress('tempinfo@gmail.com', 'Temp Info');
    $MailGonder->addReplyTo($GelenEmailAdresi, $GelenIsımSoyisim);
    $MailGonder->isHTML(true);
    $MailGonder->Subject = $GelenKonu;
    $MailGonder->MsgHTML($GelenMesaj);
    $MailGonder->send();
    echo 'Mesajınız başarıyla gönderilmiştir.';
} catch (Exception $e) {
    echo "Mesajınız gönderilirken bir hata oluştu: {$MailGonder->ErrorInfo}";
    
}



?>