<html>
    <head>
        <title></title>
    </head>
    <body>
        <table border=5 cellpadding=15 cellspacing=0>
            <th>Adress Ip Serveur:</th>
            <tr>
                <td style="text-align: center; font-size: 20px;">
                    <?php echo $_SERVER['SERVER_ADDR']; ?>
                </td>
            </tr>
            <th>Nom de Serveur:</th>
            <tr>
                <td style="text-align: center; font-size: 20px;">
                    <?php echo $_SERVER['HTTP_HOST']; ?>
                </td>
            </tr>
            <th>Adress Ip Client:</th>
            <tr>
                <td style="text-align: center; font-size: 20px;">
                    <?php echo $_SERVER['REMOTE_ADDR']; ?>
                </td>
            </tr>
            <th>Nom de Client:</th>
            <tr>
                <td style="text-align: center; font-size: 20px;">
                    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
                </td>
            </tr>
        </table>
        
    </body>
    <?php

    ?>
</html>