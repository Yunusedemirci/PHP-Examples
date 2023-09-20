<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
  <form action="result.php" method="post">
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="150" height="30">Adınız Soyadınız</td>
        <td width="20" height="30">:</td>
        <td width="330" height="30">
          <input type="text" class="InputAlani" name="adisoyadi">
        </td>
      </tr>
      <tr>
        <td width="150" height="30">Telefon Numaranız</td>
        <td width="20" height="30">:</td>
        <td width="330" height="30">
          <input type="text" class="InputAlani" name="telefon">
        </td>
      </tr>
      <tr>
        <td width="150" height="30">E-Mail Adresiniz</td>
        <td width="20" height="30">:</td>
        <td width="330" height="30">
          <input type="email" class="InputAlani" name="emailadresi">
        </td>
      </tr>
      <tr>
        <td width="150" height="30">Konu</td>
        <td width="20" height="30">:</td>
        <td width="330" height="30">
          <input type="text" class="InputAlani" name="konusu">
        </td>
      </tr>
      <tr>
        <td width="150" height="30" valign="top">Mesaj</td>
        <td width="20" height="30" valign="top">:</td>
        <td width="330" height="30">
          <textarea class="TextareaAlani" name="mesaji">
          </textarea>
        </td>
      </tr>
      <tr>
        <td width="150" height="30"> </td>
        <td width="20" height="30"> </td>
        <td width="330" height="30" align="left">
          <input type="submit" class="GonderButonu" value="Gönder">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>