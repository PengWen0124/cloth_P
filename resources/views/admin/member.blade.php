
<div class="card border-0">
  <div class="card-header text-center">  <!-- 直接置中文字 -->
        <h5 class="card-title">會員紀錄</h5>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="memberTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>使用者</th>
                    <th>信箱</th>
                    <th>角色</th>
                    <th>註冊日期</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $data)
                <tr>
                    <td>{{ $data->user_id }}</td>
                    <td>{{ $data->Username }}</td>
                    <td>{{ $data->Email }}</td>
                    <td>{{ $data->Role }}</td>
                    <td>{{ $data->Created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
