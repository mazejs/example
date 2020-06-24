<?php

namespace App\Filters;

use Maze\QueryFilter;

class UserFilter extends QueryFilter
{
    public function name($value = null)
    {
        return $this->like('name', $value);
    }

    public function email($value = null)
    {
        return $this->like('email', $value);
    }
}
