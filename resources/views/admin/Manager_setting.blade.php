<div class="card border-0">
  <div class="card-header text-center">  <!-- 直接置中文字 -->
        <h5 class="card-title">帳號設定</h5>

    </div>
    <div class="card-body">
        <table class="table table-striped" id="memberTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>使用者名稱</th>
                    <th>密碼</th>
                    <th>郵箱</th>
                    <th>UID</th>
                    <th>註冊日期</th>
                    <th>權限等級</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $data)
                <tr>
                    <td>{{ $data->user_id }}</td>
                    <td>{{ $data->Username }}</td>
                    <td>{{ $data->Password }}</td>
                    <td>{{ $data->Email }}</td>
                    <td>{{ $data->Uid01 }}</td>
                    <td>{{ $data->Created_at }}</td>
                    <td>{{ $data->Role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
