<?php

namespace AlexanderVasiliev23;

/**
 * Class Person
 * @package AlexandeVasiliev23\Person
 */
class Person
{
    private string $name;

    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function greet(): string
    {
        return "Hello {$this->name}!";
    }
}
