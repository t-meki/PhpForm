<html>
<head>
    <meta charset="UTF-8">
    <title>PhpFormResult</title>
    <link rel="stylesheet" href="form_styles.css">
</head>
<body style="background-color : #AAEEDD">
    <h2>お問い合わせ完了</h2>
    <table>
        <tr>
            <td>姓名</td>
            <td>
                <?php
                    if($_POST["name1"]!=='' and $_POST["name2"]!==''){
                        echo $_POST["name1"] ." " .$_POST["name2"];
                    }else{
                        echo "姓名が正しく入力されていません ";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <?php
                    if ($_POST["sex"]==='c1'){
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
            <td>
                <?php
                if($_POST["address"]!==''){
                    echo $_POST["address"] ;
                }else{
                    echo "未入力";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td>
                <?php
                    if($_POST["tel"][0]!=='' and $_POST["tel"][1]!=='' and $_POST["tel"][2]!==''){
                        echo $_POST["tel"][0] ." - " .$_POST["tel"][1] ." - " .$_POST["tel"][2] ;
                    }else{
                        echo "正しく入力されていません";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td>
                <?php
                    if($_POST["mail1"]!=='' and $_POST["mail2"]!==''){
                        echo $_POST["mail1"] .'@' .$_POST["mail2"];
                    }else{
                        echo "正しく入力されていません" ;
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>どこで知ったか？&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <?php
                    if(!isset($_POST["cdx"])){
                        echo "未入力" ;
                    }else{
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
        <p><textarea readonly cols="80" rows="12" name="contained" wrap="hard"><?php echo $_POST["contents"] ; ?></textarea></p>
    </body>
</html>
