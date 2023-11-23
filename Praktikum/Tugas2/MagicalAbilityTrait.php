<?php

namespace MLBBHeroes;

// Trait for heroes with magical abilities
trait MagicalAbility
{
    public function castSpell()
    {
        return "{$this->name} is casting a magical spell!";
    }
}
