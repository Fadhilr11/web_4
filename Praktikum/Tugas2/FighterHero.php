<?php

namespace MLBBHeroes;

class FighterHero extends MLBBHero
{
    public function useSkill()
    {
        return "{$this->name} is performing a powerful physical attack!";
    }
}
