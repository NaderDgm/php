<html>
    <head>
        <title>
          Ex4 server variables by si Naderdgm
        </title>
    </head>
    <body>
        

    </body>
    <table border=1 cellpadding=7 cellspacing=0>
  <tr>
    <th>Adress Ip Serveur:</th>
    <th>Nom de Serveur:</th>
    <th>Adress Ip Client:</th>
    <th>Nom de Client:</th>
  </tr>
  <tr>
    <td style="text-align: center; font-size: 20px;">
      <?php echo $_SERVER['SERVER_ADDR'];?>
    </td>
    <td style="text-align: center; font-size: 20px;">
      <?php echo $_SERVER['HTTP_HOST']; ?>
    </td>
    <td style="text-align: center; font-size: 20px;">
      <?php echo $_SERVER['REMOTE_ADDR']; ?>
      <td style="text-align: center; font-size: 20px;">
        <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
      </td>
    </tr>
</table>
</html>