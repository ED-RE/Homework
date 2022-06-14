<?php

namespace Models;

use Model;

class AdminDataTable extends Model
{
    protected $models;
    protected $functions;

    public function __construct(array $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    public function render()
    {
        for ($i = 0; $i < count($this->models); $i++) {
            foreach ($this->functions as $key => $value) {
                $values[] = [$key => $value($this->models[$i])];
            }
        }
        return $values;
    }
}
