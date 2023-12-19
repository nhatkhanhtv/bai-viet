<a href="{{route('bai-viet.create')}}">Thêm bài viết</a>
<table>
    <tr>
        <th>ID</th>
        <th>Tên bài viết</th>
        <th>Tác giả</th>
        <th>Chuyên mục</th>
        <th>Hành động</th>
    </tr>
    @forelse($dsBaiViet as $baiViet)
    <tr>
        <td>{{$baiViet->id}}</td>
        <td>{{$baiViet->chu_de}}</td>
        <td>{{$baiViet->tacGia->ten_tac_gia}}</td>
        <td>{{$baiViet->dsTenChuyenMuc()}}</td>
        <td>Sửa|xóa</td>
    </tr>
    @empty 
    <tr>
        <th>Không có bài viết nào</th>
    </tr>
    @endforelse
</table>
<style>
     table tr th,
    table tr td {
        border:1px solid black;
        padding :5px;
    }
</style>