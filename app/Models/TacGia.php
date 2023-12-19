<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TacGia extends Model
{
    // use HasFactory;
    public $table = 'danh_sach_tac_gia';
    public $timestamps = false;

    /**
     * lay danh sach bai viet
     */
    public function dsBaiViet() : HasMany {
        return $this->hasMany(BaiViet::class,'id_tac_gia','id');
    }
}
