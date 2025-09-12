<div class="fw-900 mb-3">
</div>
<div class="card border-0">
  <div class="card-header text-center">  <!-- 直接置中文字 -->
        <h5 class="card-title">商品列表</h5>

    </div>
    <div class="card-body">
        <table class="table table-striped" id="memberTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品名稱</th>
                    <th>照片</th>
                    <th>售價</th>
                    <th>描述</th>
                    <th>類別</th>
                    <th>新增日期</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $data)
                <tr>
                    <td>{{ $data->product_id }}</td>
                    <td>{{ $data->Pname }}</td>
                    <td>{{ $data->photo }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->category }}</td>
                    <td>{{ $data->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
