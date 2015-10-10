<?php
$db = Connect::getInstance();
var_dump($db);

?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Désignation</th>
                    <th>Prix TTC</th>
                    <th>Qté</th>
                </tr>
            </thead>
            
            <tbody>
            <?php 
            
            $art = get_articles($db, 15);
            var_dump($art);
            foreach ($art as $k){
                
                $idArticle = $art['id_article'];
                $nom = $art['a_designation'];
                var_dump($nom);
                $prixTTC = $art['Prix TTC'];
                var_dump($prixTTC);
            
            ?>
<!--                <tr>
                    <td><?php echo $idArticle ?></td>
                    <td><?php echo $nom ?></td>
                    <td><?php echo $prixTTC ?></td>
                </tr>-->
            <?php
            }
            ?>
            </tbody>
        </table>
    </body>
</html>
