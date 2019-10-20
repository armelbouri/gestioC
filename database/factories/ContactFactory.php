<?php

use Faker\Generator as Faker;



$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        //'nom'=>$faker->word, 'prenom'=>$faker->word, 'civilite'=>$faker->word, 'telephone'=>$faker->word, 'email'=>$faker->word, 'societe'=>$faker->word, 'ville' =>$faker->word, 'naissance'=>$faker->$faker->word,
    ];
});
