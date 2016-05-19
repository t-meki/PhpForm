<head>
    <meta charset="UTF-8">
    <!-- <title></title>
    <link rel="stylesheet" href="form_styles.css">-->
</head>
<body>
    <form action="result.php" method="post">
    <p>
        姓　<input type="text" name="txt" size="20">
        名　<input type="text" name="txt" size="20">
    </p>
    <p>
        性別
        <input type="radio" name="rdo" value="c1">男
        <input type="radio" name="rdo" value="c2">女
        <input type="radio" name="rdo" value="c3">不明
    </p>
    <p>
        住所　<input type="text" name="txt" size="20">
        名　<input type="text" name="txt" size="20">
    </p>
    <p>
        電話番号　<input type="text" name="txt" size="5">
        -<input type="text" name="txt" size="5">
        -<input type="text" name="txt" size="5">
    </p>
        メールアドレス　<input type="text" name="txt" size="20">
        ＠　<input type="text" name="txt" size="20">
    </p>
    <p>
        どこで知ったか
        <input type="checkbox" name="cdx" value="c1">ネット
        <input type="checkbox" name="cdx" value="c2">口コミ
        <input type="checkbox" name="cdx" value="c3">街角
        <input type="checkbox" name="cdx" value="c4">その他
    </p>
    <p>
        質問カテゴリ
    <select name="prefectures">
        <option>HTMLとPHPの対応について</option>
        <option>CSSでのページ整型について</option>
        <option>PHPでの定数について</option>
        <option>その他</option>
    </select>
    </p>
    質問内容　
    <textarea cols="30" rows="5" name="comments">
    </textarea>

    <p>
    <input type="submit" value="送信">

    <input type="reset" value="リセット">
    </p>
    </form>
</body>
