<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<title>Telegram 客戶端版本比較</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<link href="//img.sean.taipei/2018/01/telegreat.png" rel="icon">
		<link href="//cdnjs.cloudflare.com/ajax/libs/tocas-ui/2.3.3/tocas.css" rel="stylesheet">
		<link href="//cdn.rawgit.com/gnehs/Tocas-UI-Xiaoan/master/ts.xiaoan.min.css" rel="stylesheet">
		<meta name="description" content="自由開放的 Telegram 在各平台都有數十種客戶端，各有哪些優缺點，又該如何選擇呢？">
		<meta name="image" content="https://img.sean.taipei/2018/01/telegreat.png">
		<meta itemprop="name" content="Telegram 客戶端版本比較">
		<meta itemprop="description" content="自由開放的 Telegram 在各平台都有數十種客戶端，各有哪些優缺點，又該如何選擇呢？">
		<meta itemprop="image" content="https://img.sean.taipei/2018/01/telegreat.png">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="Telegram 客戶端版本比較">
		<meta name="twitter:description" content="自由開放的 Telegram 在各平台都有數十種客戶端，各有哪些優缺點，又該如何選擇呢？">
		<meta name="twitter:image:src" content="https://img.sean.taipei/2018/01/telegreat.png">
		<meta name="og:title" content="Telegram 客戶端版本比較">
		<meta name="og:description" content="自由開放的 Telegram 在各平台都有數十種客戶端，各有哪些優缺點，又該如何選擇呢？">
		<meta name="og:image" content="https://img.sean.taipei/2018/01/telegreat.png">
		<meta name="og:url" content="https://tlgr.tw/">
		<meta name="og:site_name" content="Telegram 比較站">
		<meta name="og:locale" content="zh-TW">
		<meta name="og:type" content="website">
		<link href="style.css" rel="stylesheet">
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<header class="ts heading vertically padded fluid slate">
			<div class="ts center aligned container">
				<p id="logo">
					<img class="ts small centered image" alt="logo" src="https://img.sean.taipei/2018/03/telegram.jpg">
				</p>
				<h1 class="ts center aligned header">
					Telegram 客戶端版本比較
					<div class="sub header">自由開放的 Telegram 在各平台都有數十種客戶端，各有哪些優缺點，又該如何選擇呢？</div>
				</h1>
			</div>
		</header>
		<content class="ts container">
			<div class="ts massive header">
				選擇系統
			</div>
			<div class="ts three doubling cards">
				<a class="ts card" id="macos" href="/macos">
					<div class="content">
						<div class="header">macOS</div>
						<div class="description">原生版美美的</div>
					</div>
					<div class="symbol"><i class="icon apple"></i></div>
				</a>
				<a class="ts card" id="windows" href="/windows">
					<div class="content">
						<div class="header">Windows</div>
						<div class="description">桌面版最廣為使用</div>
					</div>
					<div class="symbol"><i class="icon windows"></i></div>
				</a>
				<a class="ts card" id="linux" href="/linux">
					<div class="content">
						<div class="header">Linux</div>
						<div class="description">不如自幹一個吧 👍</div>
					</div>
					<div class="symbol"><i class="icon linux"></i></div>
				</a>
				<a class="ts card" id="android" href="/android">
				  <div class="content">
					  <div class="header">Android</div>
					  <div class="description">擁有最多元的第三方客戶端</div>
					</div>
					<div class="symbol"><i class="icon android"></i></div>
				</a>
				<a class="ts card" id="ios" href="/ios">
					<div class="content">
						<div class="header">iOS</div>
						<div class="description">機掰蘋果</div>
					</div>
					<div class="symbol"><i class="icon apple"></i></div>
				</a>
				<a class="ts card" id="web" href="/web">
					<div class="content">
						<div class="header">Web</div>
						<div class="description">網頁版也能用喔 😄</div>
					</div>
					<div class="symbol"><i class="icon browser"></i></div>
				</a>
			</div>
			<div class="ts massive header">
				評比標準
			</div>
			<ol>
				<li>以新手為優先考量</li>
				<li>著重中文支援度</li>
				<li>注重安全性，某些客戶端 (如「币用」) 會私自回傳敏感訊息，在此建議沒玩個半年別好奇嘗試，詳見<a href="/bad">雷雷列表</a></li>
			</ol>
		</content>
		<footer class="ts fluid center aligned slate">
			<p>最後更新: 2018 July 16</p>
			<p>客戶端建議歡迎至 <a href="https://t.me/TelegreatChat">此群組</a> 提出</p>
		</footer>
		<script>
			var clientStrings = [
				{s:'android', r:/Android/},
				{s:'ios', r:/(iPhone|iPad)/},
				{s:'macos', r:/Mac/},
				{s:'windows', r:/Windows/},
				{s:'linux', r:/Linux/}
			];
			for (var id in clientStrings) {
				var cs = clientStrings[id];
				if (cs.r.test(navigator.userAgent)) {
					$("#" + cs.s).addClass("positive").addClass("inverted");
					break;
				}
			}
		</script>
	</body>
</html>
