<div class="fw-900 mb-3">
    <h4>會員資料表</h4>
</div>
<div class="card border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title">會員列表</h5>
        <div>
            <select class="form-select w-auto d-inline-block" id="roleFilter">
                <option value="all">全部</option>
                <option value="一般用戶">一般用戶</option>
                <option value="批發商">批發商</option>
            </select>
        </div>
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
