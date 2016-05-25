<?php
	$contactname = $_POST["name1"] .$_POST["name2"];
	$contactmail = $_POST["mail1"] .'@' .$_POST["mail2"];
	$contents    = $_POST["contents"];
    $telephone_num = $_POST["tel"][0] .$_POST["tel"][1] .$_POST["tel"][2];
	//入力チェック
	$errormsg = array();
	//名前
	if ($contactname == null) {
		$errormsg[] = "名前を入力してください。";
	}
	if (mb_strlen($contactname) > 20) {
		$errormsg[] = "名前は20文字以内で入力して下さい。";
	}
	//メール
	if ($contactmail == null) {
		$errormsg[] = "メールを入力してください。";
	}
	$ret = preg_match("/^[a-zA-Z0-9_\.\-]+?@[A-Za-z0-9_\.\-]+$/", $contactmail);
	if (!$ret) {
		$errormsg[] = "メールを正しい形式で入力して下さい。";
	}
	//内容
	if ($contents == null) {
		$errormsg[] = "内容を入力して下さい。";
	}
    //TEL
    $ret = preg_match("/^[0-9]$/", $telephone_num);
    if (!ret or $telephone_num)!==7 or mb_strlen($telephone_num)!==8) {
        $errormsg[] = "正しく入力して下さい。";
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>PhpFormContact</title>
    <link rel="stylesheet" href="form_styles.css">

</head>

<header>
    <h1>お問い合わせフォーム</h1>

</header>

<body style="background-color : #AAEEDD">
    <?php if (count($errormsg) > 0): ?>
    <div id="errmsg">
    <?php foreach ($errormsg as $msg): ?>
    ・<?=$msg?><br />
    <?php endforeach; ?>
    </div>

    <form action="dev_result.php" method="post">
    <table rules="none">
    <tr>
        <td>・姓</td>　
        <td><input type="text" name="name1" size="20" /></td>
    </tr>
    <tr>
        <td>・名</td>
        <td><input type="text" name="name2" size="20"></td>
    </tr>
    <tr>
        <td>・性別</td>
        <td>
            <input type="radio" name="sex" value="c1" checked="checked">男
            <input type="radio" name="sex" value="c2">女
            <input type="radio" name="sex" value="c3">不明
        </td>
    </tr>
    <tr>
        <td>・住所</td>
        <td><input type="text" name="address" size="35"></td>
    </tr>
    <tr>
        <td>・電話番号</td>　
        <td>
            <input type="text" name="tel[]" size="5">
            - <input type="text" name="tel[]" size="5">
            - <input type="text" name="tel[]" size="5">
        </td>
    </tr>
    <tr>
        <td>・メールアドレス</td>
        <td>
            <input type="text" name="mail1" size="20">
             @ <input type="text" name="mail2" size="20">
        </td>
    </tr>
    <tr>
        <td>・どこで知ったか&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>
            <input type="checkbox" name="cdx[]" value="c1">ネット
            <input type="checkbox" name="cdx[]" value="c2">口コミ
            <input type="checkbox" name="cdx[]" value="c3">街角
            <input type="checkbox" name="cdx[]" value="c4">新聞・雑誌等
            <input type="checkbox" name="cdx[]" value="c5">その他
        </td>
    </tr>
    <tr>
        <td>・質問カテゴリ</td>
        <td>
            <select name="category">
                <option>HTMLとPHPの対応について</option>
                <option>CSSでのページ整型について</option>
                <option>PHPでの定数について</option>
                <option>その他</option>
            </select>
        </td>
    </tr>
    </table>

    <p>・質問内容<p>
    <p>　
        <textarea cols="70" rows="5" name="contents" ></textarea>
    </p>
    <p>
    <input type="submit" value="送信">

    <input type="reset" value="リセット">
    </p>
    </form>
    <?php else: ?>
        <table id="contact-form" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>
			名前
		</th>
		<td>
			<?= $contactname ?>
		</td>
	</tr>
	<tr>
		<th>
			メールアドレス
		</th>
		<td>
			<?= $contactmail ?>
		</td>
	</tr>
	<tr>
		<th>
			内容
		</th>
		<td>
			<?= $contents ?>
		</td>
	</tr>
	<tr>
		<th colspan="2">
			<form action="./end.php" method="post">
				<input type="hidden" name="contactname" value="<?= $contactname ?>">
				<input type="hidden" name="contactmail" value="<?= $contactmail ?>">
				<input type="hidden" name="contents" value="<?= $contents ?>">
				<input type="submit" value="送信" />
			</form>
			<form action="./input.php" method="post">
				<input type="hidden" name="contactname" value="<?= $contactname ?>">
				<input type="hidden" name="contactmail" value="<?= $contactmail ?>">
				<input type="hidden" name="contents" value="<?= $contents ?>">
				<input type="submit" value="内容修正" />
			</form>
		</th>
	</tr>
</table>
    <?php endif; ?>
</body>
</html>
