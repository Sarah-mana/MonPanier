<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_articles($db, $id_categorie){
    
    $sql = "SELECT a.id_article, a.a_designation, a.a_pht*t.t_taux as 'Prix TTC'
            FROM tb_article as a
            JOIN tb_tva as t ON a.id_tva = t.id_tva
            WHERE a.id_categorie = ".$id_categorie; 
    
    $resultat = $db->query($sql);
    
    return $resultat;
}