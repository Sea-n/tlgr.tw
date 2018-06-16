<footer class="panel-footer">
<?php
foreach ([
	'android' => 'Android',
	'macos' => 'macOS',
	'windows' => 'Windows',
	'linux' => 'Linux',
  'ios' => 'iOS',
  'web' => 'Web',
	'wp' => 'Windows Phone'
] as $link => $text) {
	if (strpos($_SERVER['REQUEST_URI'], $link) === false)
		echo "<a href='/$link'>$text</a> | ";
	else
		echo "<b>$text</b> |\n";
}
?>
<a href="/">首頁</a>
</footer>
