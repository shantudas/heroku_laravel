<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = "designations";

    /**
     * Get the employee that owns the designation.
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
