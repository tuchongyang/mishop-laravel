<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Good;

class Category extends Model
{
    use HasFactory;
    /**
     * 是否主动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
