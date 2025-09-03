# EXERCICES : MAÎTRISE DES CHAÎNES ET TABLEAUX PHP
## Durée : 1-2 jours | Niveau : Fondamental

---

## 🎯 OBJECTIF
Maîtriser parfaitement toutes les fonctions essentielles de manipulation des chaînes et tableaux en PHP.

---

## 📝 EXERCICE 1 : MANIPULATION DE CHAÎNES (30 min)

### **Partie A : Nettoyage et validation**

Crée un fichier `exercice_chaines.php` et implémente ces fonctions :

```php
/**
 * Nettoie une chaîne utilisateur (trim, supprime balises HTML, caractères spéciaux)
 * @param string $input
 * @return string
 */
function cleanUserInput(string $input): string
{
    // À implémenter avec : trim(), strip_tags(), htmlspecialchars()
}

/**
 * Valide un email
 * @param string $email
 * @return bool
 */
function isValidEmail(string $email): bool
{
    // À implémenter avec filter_var()
}

/**
 * Valide un mot de passe (min 8 chars, 1 maj, 1 min, 1 chiffre, 1 spécial)
 * @param string $password
 * @return bool
 */
function isValidPassword(string $password): bool
{
    // À implémenter avec preg_match()
}
```

### **Partie B : Formatage**

```php
/**
 * Formate un nom propre (première lettre majuscule, reste minuscule)
 * @param string $name
 * @return string
 */
function formatName(string $name): string
{
    // À implémenter avec +
}

/**
 * Génère un slug URL à partir d'un titre
 * Exemple: "Mon Super Article!" -> "mon-super-article"
 * @param string $title
 * @return string
 */
function generateSlug(string $title): string
{
    // À implémenter avec strtolower(), preg_replace(), trim()
}
_tr_
```

### **Partie C : Analyse de texte**

```php
/**
 * Compte les mots dans un texte
 * @param string $text
 * @return int
 */
function countWords(string $text): int
{
    // À implémenter avec str_word_count()
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
}

/**
 * Extrait tous les emails d'un texte
 * @param string $text
 * @return array
 */
function extractEmails(string $text): array
{
    // À implémenter avec preg_match_all()
}
```

---

## 📊 EXERCICE 2 : MANIPULATION DE TABLEAUX (45 min)

### **Partie A : Création et manipulation basique**

Crée un fichier `exercice_tableaux.php` :

```php
/**
 * Crée un tableau d'utilisateurs avec données aléatoires
 * @param int $count
 * @return array
 */
function generateUsers(int $count): array
{
    // Retourner un tableau de $count utilisateurs avec :
    // ['id' => int, 'name' => string, 'email' => string, 'age' => int, 'city' => string]
    // Utilise : range(), array_map(), array_rand()
}

/**
 * Fusionne plusieurs tableaux en supprimant les doublons
 * @param array ...$arrays
 * @return array
 */
function mergeUniqueArrays(array ...$arrays): array
{
    // À implémenter avec array_merge(), array_unique()
}

/**
 * Divise un tableau en chunks de taille donnée
 * @param array $array
 * @param int $size
 * @return array
 */
function chunkArray(array $array, int $size): array
{
    // À implémenter avec array_chunk()
}
```

### **Partie B : Filtrage et recherche**

```php
/**
 * Filtre les utilisateurs par âge minimum
 * @param array $users
 * @param int $minAge
 * @return array
 */
function filterUsersByAge(array $users, int $minAge): array
{
    // À implémenter avec array_filter()
}

/**
 * Trouve un utilisateur par email
 * @param array $users
 * @param string $email
 * @return array|null
 */
function findUserByEmail(array $users, string $email): ?array
{
    // À implémenter avec array_search() ou foreach
}

/**
 * Groupe les utilisateurs par ville
 * @param array $users
 * @return array
 */
function groupUsersByCity(array $users): array
{
    // Retourner : ['Paris' => [user1, user2], 'Lyon' => [user3], ...]
}
```

### **Partie C : Transformation et calculs**

```php
/**
 * Extrait seulement les noms des utilisateurs
 * @param array $users
 * @return array
 */
function extractUserNames(array $users): array
{
    // À implémenter avec array_map() ou array_column()
}

/**
 * Calcule l'âge moyen des utilisateurs
 * @param array $users
 * @return float
 */
function calculateAverageAge(array $users): float
{
    // À implémenter avec array_sum(), count()
}

/**
 * Trie les utilisateurs par âge (croissant/décroissant)
 * @param array $users
 * @param bool $ascending
 * @return array
 */
function sortUsersByAge(array $users, bool $ascending = true): array
{
    // À implémenter avec usort()
}

/**
 * Crée un index des utilisateurs par ID
 * @param array $users
 * @return array
 */
function indexUsersById(array $users): array
{
    // Retourner : [1 => user1, 5 => user2, ...]
    // À implémenter avec array_column()
}
```

---

## 🧮 EXERCICE 3 : DÉFIS AVANCÉS (60 min)

### **Défi 1 : Analyseur de logs**

```php
/**
 * Parse un fichier de log Apache et extrait les statistiques
 * Format log : "IP - - [date] "GET /page HTTP/1.1" status size"
 * 
 * @param string $logContent
 * @return array Statistiques : IPs uniques, pages populaires, codes d'erreur
 */
function parseApacheLogs(string $logContent): array
{
    // Utilise : explode(), preg_match(), array_count_values()
}
```

### **Défi 2 : Gestionnaire de CSV**

```php
/**
 * Convertit un tableau associatif en CSV
 * @param array $data
 * @param string $delimiter
 * @return string
 */
function arrayToCsv(array $data, string $delimiter = ','): string
{
    // Utilise : implode(), array_keys(), fputcsv() ou manipulation manuelle
}

/**
 * Parse un CSV en tableau associatif
 * @param string $csvContent
 * @param string $delimiter
 * @return array
 */
function csvToArray(string $csvContent, string $delimiter = ','): array
{
    // Utilise : str_getcsv(), array_combine()
}
```

### **Défi 3 : Moteur de recherche simple**

```php
/**
 * Recherche dans un tableau de données avec scoring
 * @param array $data Tableau d'éléments à chercher
 * @param string $query Terme de recherche
 * @param array $fields Champs à chercher dans chaque élément
 * @return array Résultats triés par pertinence
 */
function searchWithScoring(array $data, string $query, array $fields): array
{
    // Calcule un score basé sur :
    // - Correspondance exacte (score +10)
    // - Correspondance partielle (score +5)
    // - Correspondance insensible à la casse (score +3)
}
```

---

## 🧪 TESTS OBLIGATOIRES

Crée un fichier `test_exercices.php` qui teste TOUTES tes fonctions :

```php
<?php
require_once 'exercice_chaines.php';
require_once 'exercice_tableaux.php';

// Test des chaînes
echo "=== TESTS CHAÎNES ===\n";
var_dump(cleanUserInput("  <script>alert('hack')</script>  "));
var_dump(isValidEmail("test@example.com"));
var_dump(isValidPassword("MonMotDePasse123!"));
var_dump(formatName("jean-CLAUDE"));
var_dump(generateSlug("Mon Super Article!"));

// Test des tableaux
echo "\n=== TESTS TABLEAUX ===\n";
$users = generateUsers(5);
var_dump($users);
var_dump(filterUsersByAge($users, 25));
var_dump(calculateAverageAge($users));

// Ajoute TOUS les autres tests...
```

---

## 🎯 CRITÈRES D'ÉVALUATION

### ✅ OBLIGATOIRE
- [ ] Toutes les fonctions implémentées
- [ ] Documentation PHPDoc complète
- [ ] Gestion des cas d'erreur (paramètres invalides)
- [ ] Tests fonctionnels
- [ ] Code PSR-12 compliant

### ❌ ERREURS QUI FERONT ÉCHOUER
- Fonctions non documentées
- Pas de validation des paramètres
- Variables mal nommées (`$a`, `$tmp`, `$data`)
- Code dupliqué
- Pas de tests

---

## 🔥 FONCTIONS PHP À MAÎTRISER ABSOLUMENT

### **Chaînes**
```php
// Nettoyage
trim(), ltrim(), rtrim()
strip_tags(), htmlspecialchars()

// Transformation  
strtolower(), strtoupper(), ucfirst(), ucwords()
str_replace(), preg_replace()

// Analyse
strlen(), substr(), strpos(), stripos()
str_word_count(), str_split()
preg_match(), preg_match_all()

// Validation
filter_var(), ctype_*()
```

### **Tableaux**
```php
// Manipulation
array_push(), array_pop(), array_shift(), array_unshift()
array_merge(), array_combine(), array_flip()
array_chunk(), array_slice()

// Filtrage/Recherche
array_filter(), array_search(), in_array()
array_key_exists(), isset()

// Transformation
array_map(), array_walk(), array_column()
array_keys(), array_values()

// Tri
sort(), rsort(), asort(), arsort()
ksort(), krsort(), usort(), uksort()

// Calculs
array_sum(), array_product(), count()
array_count_values(), array_unique()
```

---

**DEADLINE : 2 jours maximum !**

**Commence par les chaînes, puis les tableaux, puis les défis.**

**Questions avant de commencer ?** Sinon, au travail ! Et souviens-toi : je vais vérifier CHAQUE fonction, CHAQUE test. Pas de bâclage autorisé ! 💪