<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BinhLuan extends Model
{
    // use HasFactory;
    public $table = 'binh_luan';

    /**
     * thuoc bai viet
     */
    public function baiViet() : BelongsTo {
        return $this->belongsTo(BaiViet::class, 'id_bai_viet', 'id');
    }
}
