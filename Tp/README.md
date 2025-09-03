# Mastermind Game

## Description

Mastermind est un jeu de logique où le joueur doit deviner un code secret composé de 4 pièces de couleurs distinctes parmi 9 couleurs disponibles (0-8).

## Règles du jeu

- Le code secret est composé de 4 pièces de couleurs différentes
- Les couleurs disponibles sont : 0, 1, 2, 3, 4, 5, 6, 7, 8
- Le joueur a 10 tentatives par défaut pour trouver le code
- Après chaque tentative, le jeu indique :
  - Le nombre de pièces bien placées
  - Le nombre de pièces mal placées (présentes mais à la mauvaise position)

## Utilisation

### Compilation
```bash
make
```

### Exécution
```bash
# Avec un code secret personnalisé
./my_mastermind -c "0123"

# Avec un nombre de tentatives personnalisé
./my_mastermind -t 15

# Avec les deux options
./my_mastermind -c "5678" -t 20

# Sans options (code aléatoire, 10 tentatives)
./my_mastermind
```

### Options disponibles
- `-c [CODE]` : Spécifie le code secret (4 chiffres distincts de 0 à 8)
- `-t [ATTEMPTS]` : Spécifie le nombre de tentatives

## Exemple de partie

```
Will you find the secret code?
Please enter a valid guess
---
Round 0
>1456
Well placed pieces: 0
Misplaced pieces: 1
---
Round 1
>4132
Well placed pieces: 1
Misplaced pieces: 2
---
Round 2
>0123
Congratz! You did it!
```

## Gestion des entrées

- Le programme lit les entrées caractère par caractère
- Gère la séquence Ctrl+D (EOF) comme une sortie normale
- Valide que l'entrée contient exactement 4 chiffres distincts de 0 à 8

## Compilation

Le projet utilise un Makefile avec les règles suivantes :
- `make` ou `make all` : Compile le projet
- `make clean` : Supprime les fichiers objets
- `make fclean` : Supprime les fichiers objets et l'exécutable
- `make re` : Recompile complètement le projet

## Fonctions autorisées

- `printf(3)`
- `write(2)`
- `read(2)`
- `rand()` et `srand()`
- `time()`
- `atoi()`
- `strcmp()`

## Structure du projet

- `myMastermind.c` : Fonction principale et logique du jeu
- `utils.c` : Fonctions utilitaires (affichage, validation, calcul des résultats)
- `args.c` : Gestion des arguments de ligne de commande
- `mastermind.h` : Fichier d'en-tête avec toutes les déclarations
- `Makefile` : Règles de compilation
- `README.md` : Documentation du projet
