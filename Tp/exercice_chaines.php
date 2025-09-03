<?php

/**
 * fonction de netoyage des entré utilisateurs
 *@param string $input valeur entrée par le user
 *@return string
*/

function cleanUserInput(string $input): string {
    $cleanValue = trim($input); // suppression des espaces inutiles en debut et fin
    $cleanValue = strip_tags($cleanValue); // suppression des tags ou balises html
    $cleanValue = htmlentities($cleanValue); // suppression des espaces inutiles
    return $cleanValue;
}

/**
 * fonction de validation d email
 * @param string $email email reçu depuis l utilisateur
 * @return boolean
 */

function isValidEmail(string $email) : bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


/**
 * fonction de verification de mot de passe
 * @param string $password
 * @return bool
 */
function isValidPassword(string $password) : bool {
    $check = preg_match('/^[A-Z]{1}[a-zA-z]+$/', $password);
    if ($check === 1) {
        return true;
    }
    return false;
}

/**
 * verifiation du numero de telephone camerounais
 * @param string $phone numero saisie
 * @return bool
 */
function isCameroonNumber (string $phone) : bool {
    $check = preg_match('/6\d{8}$/', $phone);
    if ($check === 1) {
        return true;
    }
    return false;
}

/**
 * Formate un nom propre (première lettre majuscule, reste minuscule)
 * @param string $name
 * @return string
 */
function formatName(string $name): string
{
    $firstLetter = $name[0];
    var_dump($firstLetter);
    return $name;
}

/**
 * Génère un slug URL à partir d'un titre
 * Exemple: "Mon Super Article!" -> "mon-super-article"
 * @param string $title
 * @return string
 */
function generateSlug(string $title): string
{
    $formatTitle = trim($title); //pour retirer les faux espaces
    // echo $formatTitle . "\n";
    $lowerTitle = strtolower($formatTitle);
    $mySlug = preg_replace('/\s+/', '-', $lowerTitle);
    return $mySlug;
}


/**
 * Tronque un texte à X caractères avec "..."
 * @param string $text
 * @param int $maxLength
 * @return string
 */
function truncateText(string $text, int $maxLength = 10): string
{
    $truncateText = substr($text, 0, $maxLength);
    return strlen($text) > $maxLength ? $truncateText . '...' : $truncateText;
}

/**
 * Trouve toutes les occurrences d'un mot (insensible à la casse)
 * @param string $text
 * @param string $word
 * @return int
 */
function findWordOccurrences(string $text, string $word): int
{
    // À implémenter avec preg_match_all()
    $occurences = preg_match_all('/' . $word . '/', $text, $matches);
    $array = ['yo', "ca gaw"];
    echo ($matches[0][0]);    $nbrOccurences = $occurences? strlen($occurences): 0;
    return $nbrOccurences;
}


// echo isValidEmail('denver@gmail.com');
// echo 2 . "\n";
// echo isCameroonNumber(684154564);
echo findWordOccurrences('je suis insensible suis je le suis', 'le');