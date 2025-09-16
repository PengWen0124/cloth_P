@extends("front.layout")
@section("content")
<main class="content px-3 py-2">
	<div class="container-fluid">
		<div class="col-12 col-md-8 p-5 mx-auto">
			<h2 class="text-center">一般會員下單</h2>
			<form action="/submit_order_data" method="post" class="text-center">
				<table class="table table-borderless">
					<tr>
						<td class="mt-3">使用者</td>
						<td>
							<select class="col-2 form-control border border-dark" name="user">
								<option value="user01">user01</option>
								<option value="wholesaler01">wholesaler01</option>
								<option value="user02">user02</option>
								<option value="wholesaler02">wholesaler02</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="mt-3">商品</td>
						<td>
							<select class="col-2 form-control border border-dark" name="product" id="productSelect" onchange="updatePrice()">
								<option value="高山烏龍(精裝)|1899">棉 (Cotton) - $1899</option>
								<option value="高山紅茶(精裝)|1499">聚酯纖維 (Polyester) - $1499</option>
								<option value="金萱(精裝)|1699">亞麻 (Linen) - $1699</option>
								<option value="日式櫻花紋(茶壺)|1599">羊毛 (Wool) - $1599</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="mt-3">數量</td>
						<td>
							<input type="number" class="col-2 form-control border border-dark" name="quantity" min="1" value="1" onchange="updatePrice()">
						</td>
					</tr>
					<tr>
						<td class="mt-3">金額</td>
						<td>
							<input type="text" class="col-2 form-control border border-dark" name="amount" id="amount" readonly>
						</td>
					</tr>
					<tr>
						<td class="mt-3">訂單類型</td>
						<td>
							<select class="col-2 form-control border border-dark" name="order_type">
								<option value="一般用戶訂單">一般用戶訂單</option>
								<option value="批發商訂單">批發商訂單</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="mt-3">訂單日期</td>
						<td>
							<input type="date" class="col-2 form-control border border-dark" name="order_date" value="2025-03-18">
						</td>
					</tr>
				</table>
				<div class="mt-4 d-flex justify-content-center">
					<input type="submit" value="新增訂單" class="btn btn-secondary" id="btn">
					<!-- 新增登出按鈕 -->
					<a href="/logout" class="btn btn-danger text-white ml-3">登出</a>
				</div>
			</form>
		</div>
	</div>
</main>
@endsection