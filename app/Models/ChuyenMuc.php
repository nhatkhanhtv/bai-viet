<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ChuyenMuc extends Model
{
    // use HasFactory;
    public $table = 'chuyen_muc';

    /**
     * bai viet thuoc nhieu chuyen muc
     */
    public function dsBaiViet() : BelongsToMany {
        return $this->belongsToMany(BaiViet::class, 'bai_viet_thuoc_chuyen_muc', 'id_chuyen_muc', 'id_bai_viet');
    }
}
