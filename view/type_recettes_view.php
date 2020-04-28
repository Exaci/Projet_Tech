<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>

<body>
    <table border='1'>
            <thead bgcolor='silver'>
                <tr>
                    <td>Nom de recette</td>
                </tr>
            </thead>

<?php 
while ($data1=$query->fetch()){
    $name=$data1['name'];
    $count=$data1['count'];
?>

            <tr> 
                <td> 
                    <a href="../controler/une_recette.php?r=<?php echo $count?>"><?php echo $name ?></a>
                </td>
            </tr>
        
<?php }
$query->CloseCursor();
?>
</table>
    <p>Cliquez <a href="../controler/recettes.php">ici</a> pour retourner au menu des recettes</p>
    <p>Cliquez <a href="../view/index_view.php">ici</a> pour retourner à la page d'acceuil</p>
        
    </body>
</html>
