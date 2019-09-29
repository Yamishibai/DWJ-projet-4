<?php

abstract class AbstractEntity  {
    public function __construct(array $cols = [])
    {
        $this->hydrate($cols);
    }


    public function hydrate(array $cols = [])
    {
        foreach ($cols as $name => $value) {

            $methodName = 'set' . str_replace('_', '', ucwords($name, '_'));

            if (method_exists($this, $methodName)) {

                $this->$methodName($value);
            }
        }
    }
}