<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table="employees";

    /**
     * Get the designation record associated with the employees.
     */
    public function designation()
    {
        return $this->hasOne(Designation::class);
    }
}
