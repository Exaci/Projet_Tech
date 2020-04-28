<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>

<body>
<div>

<?php if($is==1){?>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline"method="post" action="../controler/recettes.php" enctype="multipart/form-data">
            <input name="recherche" type="text" id="recherche" />
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </form>
    </nav>
    
  
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=entree" role="button"><img src="../view/entree.jpeg"></a>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=plat" role="button" ><img src="../view/plat.jpeg"></a>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=dessert" role="button"><img src="../view/dessert.jpeg"></a>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=boisson" role="button"><img src="../view/boisson.jpeg"></a>
    
<?php } 
if($is==2){ ?>
    
    <table border='1'>
            <thead bgcolor='silver'>
                <tr>
                    <td>Nom de recette</td>
                </tr>
            </thead>

<?php 
while ($dataidrecette=$querysearch2->fetch()){
    $idrecette = $dataidrecette['id_recette'];
    $querysearch3 = $base -> prepare ("SELECT * FROM recette WHERE count = $idrecette");
    $querysearch3 -> execute();
    $data3=$querysearch3->fetch();
    $name=$data3['name'];
?>

            <tr> 
                <td> 
                    <a href="../controler/une_recette.php?r=<?php echo $idrecette ?>"><?php echo $name ?></a>
                </td>
            </tr>
<?php } 
} ?>
</table> </div></body></html>