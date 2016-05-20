<head>
    <meta charset="UTF-8">
    <title>PhpFormContact</title>
    <link rel="stylesheet" href="form_styles.css">
</head>

<header>
    <h1>お問い合わせフォーム</h1>
</header>
<body>
    <form action="result.php" method="post">
    <dl>
        <dt>・姓</dt>　
        <dd><input type="text" name="name1" size="20"></dd>
    <dt>・名</dt> <dd><input type="text" name="name2" size="20"></dd>
    <dt>・性別</dt>
        <dd>
            <input type="radio" name="sex" value="c1">男
            <input type="radio" name="sex" value="c2">女
            <input type="radio" name="sex" value="c3">不明
        </dd>
    <dt>・住所</dt>
        <dd><input type="text" name="address" size="20"></dd>
    <dt>・電話番号</dt>　
        <dd>
            <input type="text" name="tel[]" size="5">
            - <input type="text" name="tel[]" size="5">
            - <input type="text" name="tel[]" size="5">
        </dd>
    <dt>・メールアドレス</dt>
        <dd>
            <input type="text" name="mail1" size="20">
            @　<input type="text" name="mail2" size="20">
        </dd>
    <dt>・どこで知ったか</dt>
        <dd>
            <input type="checkbox" name="cdx[]" value="c1">ネット
            <input type="checkbox" name="cdx[]" value="c2">口コミ
            <input type="checkbox" name="cdx[]" value="c3">街角
            <input type="checkbox" name="cdx[]" value="c4">新聞・雑誌等
            <input type="checkbox" name="cdx[]" value="c5">その他
        </dd>
    <dt>・質問カテゴリ</dt>
        <dd>
            <select name="category">
                <option>HTMLとPHPの対応について</option>
                <option>CSSでのページ整型について</option>
                <option>PHPでの定数について</option>
                <option>その他</option>
            </select>
        </dd>
    <p>・質問内容<p>
    <p>　
        <textarea cols="70" rows="5" name="contents" ></textarea>
    </p>
    <p>
    <input type="submit" value="送信">

    <input type="reset" value="リセット">
    </p>
    </form>
</body>
