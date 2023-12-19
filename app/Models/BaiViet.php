<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BaiViet extends Model
{
    // use HasFactory;
    public $table = 'bai_viet';

    public $fillable = [
        'id_tac_gia',
        'chu_de',
        'noi_dung'
    ];

    /**
     * thuoc tac gia
     */
    public function tacGia() : BelongsTo {
        return $this->belongsTo(TacGia::class, 'id_tac_gia', 'id');
    }

    /**
     * co nhieu binh luan
     */
    public function dsBinhLuan() : HasMany {
        return $this->hasMany(BinhLuan::class, 'id_bai_viet', 'id');
    }

    /**
     * bai viet thuoc nhieu chuyen muc
     */
    public function dsChuyenMuc() : BelongsToMany {
        return $this->belongsToMany(ChuyenMuc::class, 'bai_viet_thuoc_chuyen_muc', 'id_bai_viet', 'id_chuyen_muc');
    }

    /**
     * lay ds ten chuyen muc
     */
    public function dsTenChuyenMuc() : string {
        
        if($this->dsChuyenMuc->isNotEmpty()) {
            $tenChuyenMuc = [];
            foreach($this->dsChuyenMuc as $chuyenMuc) {
                $tenChuyenMuc[] = $chuyenMuc->ten_chuyen_muc;
            }
            return implode(", ",$tenChuyenMuc);
        }

        return "";
    }
}
