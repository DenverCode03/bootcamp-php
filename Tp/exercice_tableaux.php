<?php

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
    $names = ["Paul", "Jean", "Alice", "Mariam", "David"];
    $cities = ["Douala", "Yaoundé", "Bafoussam", "Garoua", "Bertoua"];

    $arrayUser = [];

    $ids = range(1, $count);
    
    // print_r($ids);

    $arrayUser = array_map(function($id) use ($names, $cities) {
        $name = $names[array_rand($names, 1)];
        return [
            'id' => $id,
            'name' => $name,
            'email' => $name . "@gmail.com",
            'age' => rand(17, 30),
            'city' => $cities[array_rand($cities, 1)],
        ];
    }, $ids);

    return $arrayUser;
}

print_r(generateUsers(5));

