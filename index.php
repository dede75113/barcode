<?php

require_once 'vendor/autoload.php';


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('id_ID');

foreach (range(1, 10) as $index)
{
  echo $faker->name . "<br>";
}
