<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModuleGenerator extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
