<?php
/**
 * Fonction qui retourne la source relative d'un fichier en fonction de l'emplacement actuel.
 *
 * @param string        $relative_src       -       Chemin d'accès relatif par défaut
 *
 * @return string
 */
function getSrc($relative_src) {
    $result_src = $relative_src;
    $nb = substr_count($_SERVER['REQUEST_URI'], "/", 0, strlen($_SERVER['REQUEST_URI']));
    return str_repeat("../", $nb - 1) . "." . $relative_src;
}
/**
 * Fonction qui indique si la catégorie sélectionner est valide
 * @param string        $categorie          -la categorie a tester
 * 
 * @return boolean
 */
function categorieExist($categorie) {
    $existe = false;

    if ($categorie == "HANDICAP" || $categorie == "MEDICAL" || $categorie == "AIDE_FINANCIERE" || $categorie == "AIDE_SOCIAL" || $categorie == "SPORT" || $categorie == "ART_CULTURE") {
        existe = true;
    }

    return existe;
}
?>