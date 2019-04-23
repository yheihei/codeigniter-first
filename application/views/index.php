<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>CodeIgniterでブログ作成</title>
</head>
<body>
<h1>CodeIgniterでブログ作成</h1>

<div id="container">
<a href="blog/add_new_entry">記事を追加</a>
<?php
	if($query){
		foreach($query as $post):
			echo "<h2>";
			echo $post->entry_name;
			echo "</h2>";
			echo "<p>";
			echo $post->entry_date;
			echo "<br />";
			echo $post->entry_body;
			echo "</p>";
		endforeach;
	}else{
		echo "記事がありません";
	}

?>
</div>
</body>
</html>