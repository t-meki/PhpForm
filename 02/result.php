<html>
<head>
    <meta charset="UTF-8">
    <title>PhpFormResult</title>
    <link rel="stylesheet" href="form_styles.css">
</head>
<body>
    <h2>お問い合わせ完了</h2>
    <table>
        <tr>
            <td>姓名</td>
            <td><?php echo $_POST["name1"] ." " .$_POST["name2"]; ?></td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?php
                    if($_POST["sex"]==='c1'){
                        echo "男";
                    }elseif ($_POST["sex"]==='c2') {
                        echo "女";
                    }elseif ($_POST["sex"]==='c3') {
                        echo "不明";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>住所</td>
            <td><?php echo $_POST["address"] ; ?></td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td>
                <?php
                    $i=0;
                    foreach ($_POST["tel"] as $key => $value) {
                        echo $value ;
                        if($key < 2){
                            echo " - ";
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php echo $_POST["mail1"] .'@' .$_POST["mail2"]; ?></td>
        </tr>
        <tr>
            <td>どこで知ったか？&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <?php
                    foreach ($_POST["cdx"] as $key => $value) {
                        switch ($value) {
                            case 'c1':
                                echo "ネット　";
                                break;
                            case 'c2':
                                echo "口コミ　";
                                break;
                            case 'c3':
                                echo "街角　";
                                break;
                            case 'c4':
                                echo "新聞・雑誌　";
                                break;
                            case 'c5':
                                echo "その他　";
                                break;
                            default:
                                break;
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>質問カテゴリ</td>
            <td><?php echo $_POST["category"] ; ?></td>
        </tr>
    </table>
    <p>質問内容</p>
        <p><textarea readonly cols="80" rows="12" name="contained" wrap="hard"><?php print $_POST["contents"] ; ?></textarea></p>

    </body>
</html>
