@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <a href="/admin/Product/create" class="btn  btn-secondary mb-3 mt-3">新增產品</a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>產品名稱</th>
                <th>產品資訊</th>
                <th>圖片</th>
                <th>類別</th>
                <th>價錢</th>
                <th>權重</th>
                <th style="width:180px;">功能</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($product_list as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->info}}</td>
                <td>
                    <img width='200' src={{$product->file}} alt="">
                </td>
                <td>{{$product->product_type_id}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->sort}}</td>
                <td>
                    <a href="/admin/Product/edit/{{$product->id}}" class="btn btn-sm btn-secondary">編輯消息</a>
                    <a href="/admin/Product/destroy{{$product->id}}" class="btn btn-sm btn-secondary">刪除消息</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').dataTable({
            "order": [
                [2, 'desc']
            ], //2為權重那格
            "language": {
                "processing": "處理中...",
                "loadingRecords": "載入中...",
                "lengthMenu": "顯示 _MENU_ 項結果",
                "zeroRecords": "沒有符合的結果",
                "info": "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
                "infoEmpty": "顯示第 0 至 0 項結果，共 0 項",
                "infoFiltered": "(從 _MAX_ 項結果中過濾)",
                "infoPostFix": "",
                "search": "搜尋:",
                "paginate": {
                    "first": "第一頁",
                    "previous": "上一頁",
                    "next": "下一頁",
                    "last": "最後一頁"
                },
                "aria": {
                    "sortAscending": ": 升冪排列",
                    "sortDescending": ": 降冪排列"
                }
            }
        });
    });
</script>
@endsection