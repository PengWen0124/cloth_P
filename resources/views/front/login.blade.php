@extends("front.layout")
@section("content")
<div class="container">
	<div class="image-container">
	</div>
	<div class="login-container">
		<form method="POST" action="/member/login">
			@csrf
			<div style="display: flex; justify-content: center; margin-bottom: 0px;">
				<img
					src="/images/saunchar.jpg"
					alt="Logo"
					style="width: 350px; " />
			</div>
			<div style="text-align: center; margin-bottom: 0px;">
				<h2>訂購你的專屬服飾</h2>
				<p>只要你需要，一定能訂到</p>
			</div>
			<input
				type="text"
				id="username"
				name="username"
				placeholder="請輸入帳號"
				required />

			<input
				type="password"
				id="password"
				name="password"
				placeholder="請輸入密碼"
				required />
			@if ($errors->has("err"))
			<div style="text-align: center; margin-bottom: 0px;">
				<font color="red">{{ $errors->first("err") }}</font>
			</div>
			@endif
			<button type="submit">登入</button>
			<div id="errorMsg" class="error-message"></div>
		</form>
	</div>
</div>
<div class="footer">全端網頁程式設計青年專班第01期(2025/06/30~2025/09/19)</div>
@endsection