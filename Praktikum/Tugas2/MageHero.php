<?php

namespace MLBBHeroes;

class MageHero extends MLBBHero
{
    use MagicalAbility;

    public function useSkill()
    {
        return $this->castSpell();
    }
}
