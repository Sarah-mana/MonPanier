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
            
            $listeArticles = get_articles($db, 15);
            var_dump($listeArticles);
            foreach ($listeArticles as $k => $v){
                
                $nomArticles = $listeArticles[$k][1];
                $idArticle = $listeArticles[$k][0];
                $prixTTC = $listeArticles[$k][2];
                
            ?>    
                <tr>
                    <td><?php echo $idArticle; ?></td>
                    <td><?php echo $nomArticles; ?></td>
                    <td><?php echo $prixTTC; ?></td>

                </tr>
            <?php  
            }
            ?>
               
            </tbody>
        </table>
    </body>
</html>
