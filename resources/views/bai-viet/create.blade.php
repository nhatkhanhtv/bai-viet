<form action="{{route('bai-viet.store')}}" method="POST"> 
    @csrf
    <div class="form-group">
        <label for="chu_de">Chủ đề</label>
        <input id="chu_de" type="text" name="chu_de"  />
    </div>
   
    <div class="form-group">
        <label for="id_tac_gia">Tác giả</label>
        <select id="id_tac_gia" name="id_tac_gia" required>
            @foreach($dsTacGia as $tacGia) 
            <option value="{{$tacGia->id}}">{{$tacGia->ten_tac_gia}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="ds_chuyen_muc">Chuyên mục</label>
        <select id="ds_chuyen_muc" name="ds_chuyen_muc[]" multiple >
            @foreach($dsChuyenMuc as $chuyenMuc) 
            <option value="{{$chuyenMuc->id}}">{{$chuyenMuc->ten_chuyen_muc}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="noi_dung">Nội dung</label>
        <textarea id="noi_dung" name="noi_dung"></textarea>
    </div>
    <button type="submit">Thêm mới</button>
</form>