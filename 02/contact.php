<head>
    <meta charset="UTF-8">
    <title>PhpFormContact</title>
    <link rel="stylesheet" href="form_styles.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <form action="result.php" method="post">
    <p>
        ・姓　<input type="text" name="name1" size="20">
    </p>
    <p>
         ・名　<input type="text" name="name2" size="20">
    </p>
    <p>
        ・性別
        <input type="radio" name="sex" value="c1">男
        <input type="radio" name="sex" value="c2">女
        <input type="radio" name="sex" value="c3">不明
    </p>
    <p>
        ・住所　<input type="text" name="address" size="20">
    </p>
    <p>
        ・電話番号　<input type="text" name="tel[]" size="5">
        -<input type="text" name="tel[]" size="5">
        -<input type="text" name="tel[]" size="5">
    </p>
        ・メールアドレス　<input type="text" name="mail1" size="20">
        ＠　<input type="text" name="mail2" size="20">
    </p>
    <p>
        ・どこで知ったか
        <input type="checkbox" name="cdx[]" value="c1">ネット
        <input type="checkbox" name="cdx[]" value="c2">口コミ
        <input type="checkbox" name="cdx[]" value="c3">街角
        <input type="checkbox" name="cdx[]" value="c4">新聞・雑誌等
        <input type="checkbox" name="cdx[]" value="c5">その他
    </p>
    <p>
        ・質問カテゴリ
    <select name="category">
        <option>HTMLとPHPの対応について</option>
        <option>CSSでのページ整型について</option>
        <option>PHPでの定数について</option>
        <option>その他</option>
    </select>
    </p>
    <p>
        ・質問内容
    </p>
    <p>　
        <textarea cols="80" rows="5" name="contents" ></textarea>
    </p>
    <p>
    <input type="submit" value="送信">

    <input type="reset" value="リセット">
    </p>
    </form>
</body>
