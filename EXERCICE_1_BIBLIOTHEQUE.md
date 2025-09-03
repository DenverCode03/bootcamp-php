# EXERCICE 1 : SYSTÈME DE GESTION DE BIBLIOTHÈQUE
## Durée : 3-4 jours | Difficulté : ⭐⭐⭐⭐

### 🎯 OBJECTIF
Créer un système complet de gestion de bibliothèque en POO pure, avec toutes les bonnes pratiques professionnelles.

---

## 📋 CAHIER DES CHARGES

### ENTITÉS À CRÉER

#### 1. **Classe Book**
```php
// Propriétés privées obligatoires :
- id (int)
- title (string)
- author (string) 
- isbn (string)
- publishedYear (int)
- genre (string)
- availableCopies (int)
- totalCopies (int)
```

#### 2. **Classe Member**
```php
// Propriétés privées obligatoires :
- id (int)
- firstName (string)
- lastName (string)
- email (string)
- membershipDate (DateTime)
- isActive (bool)
- borrowedBooks (array)
```

#### 3. **Classe Loan**
```php
// Propriétés privées obligatoires :
- id (int)
- bookId (int)
- memberId (int)
- loanDate (DateTime)
- dueDate (DateTime)
- returnDate (DateTime|null)
- isReturned (bool)
```

#### 4. **Classe Library** (Gestionnaire principal)
```php
// Doit gérer :
- Collection de livres
- Collection de membres
- Collection d'emprunts
- Toute la logique métier
```

---

## 🔧 FONCTIONNALITÉS OBLIGATOIRES

### Gestion des livres
- ✅ Ajouter un livre
- ✅ Supprimer un livre
- ✅ Rechercher par titre/auteur/ISBN
- ✅ Lister tous les livres
- ✅ Vérifier disponibilité

### Gestion des membres
- ✅ Inscrire un nouveau membre
- ✅ Désactiver un membre
- ✅ Rechercher un membre
- ✅ Lister tous les membres

### Gestion des emprunts
- ✅ Emprunter un livre
- ✅ Retourner un livre
- ✅ Lister les emprunts en cours
- ✅ Lister les emprunts en retard
- ✅ Historique des emprunts d'un membre

---

## ⚠️ CONTRAINTES TECHNIQUES STRICTES

### 1. **Standards PSR-12**
- Indentation 4 espaces
- Accolades sur nouvelle ligne pour classes/méthodes
- Nommage camelCase pour méthodes/propriétés
- Nommage PascalCase pour classes

### 2. **Encapsulation PARFAITE**
- Toutes les propriétés PRIVÉES
- Getters/Setters avec validation
- Pas d'accès direct aux propriétés

### 3. **Validation RIGOUREUSE**
```php
// Exemples de validations obligatoires :
- Email valide (filter_var)
- ISBN format correct (10 ou 13 chiffres)
- Année de publication réaliste (1000-2024)
- Nombre de copies > 0
- Dates cohérentes
```

### 4. **Gestion d'erreurs PROFESSIONNELLE**
```php
// Créer ces exceptions personnalisées :
- BookNotFoundException
- MemberNotFoundException  
- BookNotAvailableException
- InvalidDataException
- LoanException
```

### 5. **Documentation PHPDoc COMPLÈTE**
```php
/**
 * Emprunte un livre pour un membre
 * 
 * @param int $bookId L'ID du livre à emprunter
 * @param int $memberId L'ID du membre emprunteur
 * @param int $durationDays Durée d'emprunt en jours (défaut: 14)
 * 
 * @return Loan L'objet emprunt créé
 * 
 * @throws BookNotFoundException Si le livre n'existe pas
 * @throws MemberNotFoundException Si le membre n'existe pas
 * @throws BookNotAvailableException Si aucun exemplaire disponible
 * @throws LoanException Si le membre a déjà emprunté ce livre
 */
```

---

## 🏗️ STRUCTURE DE FICHIERS IMPOSÉE

```
/exercice1/
├── classes/
│   ├── Book.php
│   ├── Member.php
│   ├── Loan.php
│   └── Library.php
├── exceptions/
│   ├── BookNotFoundException.php
│   ├── MemberNotFoundException.php
│   ├── BookNotAvailableException.php
│   ├── InvalidDataException.php
│   └── LoanException.php
├── tests/
│   └── test_library.php
└── index.php (démonstration)
```

---

## 🧪 TESTS OBLIGATOIRES

Crée un fichier `test_library.php` qui teste :

1. **Création d'objets valides/invalides**
2. **Ajout/suppression de livres**
3. **Inscription/désactivation membres**
4. **Emprunts normaux**
5. **Gestion des erreurs** (livre inexistant, membre inactif, etc.)
6. **Recherches et filtres**
7. **Calcul des retards**

---

## 🎯 CRITÈRES D'ÉVALUATION (Sur 100 points)

### Code Quality (40 points)
- [ ] Respect PSR-12 (10 pts)
- [ ] Encapsulation parfaite (10 pts)
- [ ] Nommage cohérent (10 pts)
- [ ] Structure claire (10 pts)

### Fonctionnalités (30 points)
- [ ] Toutes les fonctions implémentées (20 pts)
- [ ] Logique métier correcte (10 pts)

### Gestion d'erreurs (20 points)
- [ ] Exceptions personnalisées (10 pts)
- [ ] Validation des données (10 pts)

### Documentation (10 points)
- [ ] PHPDoc complet (5 pts)
- [ ] Code commenté (5 pts)

---

## 🔥 DÉFIS BONUS (+20 points)

1. **Système de pénalités** : Calcul automatique d'amendes pour retards
2. **Réservations** : Permettre de réserver un livre non disponible
3. **Statistiques** : Livres les plus empruntés, membres les plus actifs
4. **Export** : Générer des rapports en CSV
5. **Logging** : Tracer toutes les actions dans un fichier log

---

## ⏰ DEADLINE ET RENDU

**Tu as 4 jours maximum !**

**Rendu attendu :**
- Code complet et fonctionnel
- Fichier de test avec résultats
- README.md expliquant comment utiliser ton système

**Règle d'or :** Si ton code ne respecte pas les standards PSR-12 ou si les propriétés ne sont pas privées, c'est **REFUS IMMÉDIAT** !

---

## 💀 MES CRITIQUES SERONT IMPITOYABLES SUR :

- Variables mal nommées (`$a`, `$data`, `$temp`)
- Méthodes trop longues (>20 lignes)
- Pas de validation des données
- Gestion d'erreurs absente
- Code dupliqué
- Logique métier dans les getters/setters
- Commentaires inutiles ou manquants

**Prêt à relever le défi ? GO GO GO !**