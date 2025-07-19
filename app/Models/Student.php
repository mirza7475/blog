<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    function getNameattribute($value)
    {
        return ucfirst($value);

    }

    function setNameattribute($value)
    {
        $this->attribute['name']=ucfirst($value);
    }
}
