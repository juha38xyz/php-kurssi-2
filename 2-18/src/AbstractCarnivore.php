<?php

namespace PhpCourse;

abstract class AbstractCarnivore extends abstractAnimal
{
    protected function diet(): string{
        return self:: DIET_CARNIVORE;
    }

}