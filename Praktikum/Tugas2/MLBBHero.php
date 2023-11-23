<?php

namespace MLBBHeroes;

abstract class MLBBHero
{
    protected $name;
    protected $role;

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    abstract public function useSkill();
 
    public function getInfo()
    {
        return "Hero: {$this->name}, \nRole: {$this->role}";
    }
}
