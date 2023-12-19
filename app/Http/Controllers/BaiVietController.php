<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use App\Models\ChuyenMuc;
use App\Models\TacGia;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function index() {
        $dsBaiViet = BaiViet::all();
        return view('bai-viet.index',[
            'dsBaiViet' => $dsBaiViet
        ]);
    }

    public function create() {
        $dsTacGia = TacGia::all();
        $dsChuyenMuc = ChuyenMuc::all();
        return view('bai-viet.create', [
            'dsTacGia' => $dsTacGia,
            'dsChuyenMuc' => $dsChuyenMuc
        ]);
    }

    public function store(Request $request) {
        $validate = $request->validate([
            "chu_de" => "required|string",
            "id_tac_gia" => "exists:App\Models\TacGia,id",
            "ds_chuyen_muc" => "nullable",
            "noi_dung" => "required|string"
        ]);
        // $baiViet = new BaiViet();
        // $baiViet->id_tac_gia = $validate['id_tac_gia'];
        // $baiViet->chu_de = $validate['chu_de'];
        // $baiViet->noi_dung = $validate['noi_dung'];
        // $baiViet->save();

        $baiViet = BaiViet::create([
            'id_tac_gia' => $validate['id_tac_gia'],
            'chu_de' => $validate['chu_de'],
            'noi_dung' => $validate['noi_dung']
        ]);
        
        $baiViet->dsChuyenMuc()->attach($validate['ds_chuyen_muc']);

        return redirect(route('bai-viet.index'));   
    }
}
