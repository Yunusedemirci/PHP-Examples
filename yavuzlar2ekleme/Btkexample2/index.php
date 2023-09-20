<?php
require_once("baglan.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="sonuc.php" method="post">
        <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
            <?php
            $Sorgu = $VeriTabaniBaglantisi->prepare("SELECT * FROM kisiler");
            $Sorgu->execute();
            $KayitSayisi = $Sorgu->rowCount();
            $Kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);

            foreach ($Kayitlar as $KayitSatirlari) {
                ?>
                <tr>
                    <td width="25" height="30" align="left"><input type="checkbox" name="secim[]"
                            value="<?php echo $KayitSatirlari["id"]; ?>"></td>
                    <td height="30" align="left">
                        <?php echo $KayitSatirlari["adi"] . " " . $KayitSatirlari["soyadi"]; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td height="50" colspan="2" align="left"><input type="submit" value="Seçili Olanları Sil"></td>
            </tr>
        </table>
    </form>
</body>

</html>