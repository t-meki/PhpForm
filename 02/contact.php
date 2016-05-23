<html>
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
        <td><input type="text" name="address" size="20"></td>
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
</body>
</html>
