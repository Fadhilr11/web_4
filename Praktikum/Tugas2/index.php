<?php

include "MLBBHero.php";
include "MagicalAbilityTrait.php";
include "MageHero.php";
include "FighterHero.php";

use MLBBHeroes\MageHero;
use MLBBHeroes\FighterHero;

$mageHero = new MageHero("Lunox", "Mage");
echo $mageHero->getInfo() . PHP_EOL;
echo $mageHero->useSkill() . PHP_EOL;

echo PHP_EOL;

$fighterHero = new FighterHero("Aldous", "Fighter");
echo $fighterHero->getInfo() . PHP_EOL;
echo $fighterHero->useSkill() . PHP_EOL;
