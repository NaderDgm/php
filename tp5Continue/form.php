<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Confirmation de données</h1>
        <table border=1>
           <tr>
            <td>nom:</td>
            <td><?php echo $_GET["nom"]; ?></td>
           </tr>
           <tr>
            <td>prenom:</td>
            <td><?php echo $_GET["prenom"]; ?></td>
           </tr>
           <tr>
            <td>adresse:</td>
            <td><?php echo $_GET["adresse"]; ?></td>
           </tr>
           <tr>
            <td>ville:</td>
            <td><?php echo $_GET["ville"]; ?></td>
           </tr>
           <tr>
            <td>code postal:</td>
            <td><?php echo $_GET["code_postal"]; ?></td>
           </tr>
         
        </table>
    </body>
</html>