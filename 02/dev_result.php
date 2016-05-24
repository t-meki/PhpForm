<html>
<head>
    <meta charset="UTF-8">
    <title>PhpFormResult</title>
    <link rel="stylesheet" href="form_styles.css">
</head>
<body style="background-color : #AAEEDD">
    <h2>お問い合わせ完了</h2>
    <?php

    $counter_file = 'contact_log.txt';
    $counter_lenght = 8;

    $fp = fopen($counter_file, 'r+');

    if ($fp){
        if (flock($fp, LOCK_EX)){

            $counter = fgets($fp, $counter_lenght);
            $counter++;

            rewind($fp);

            if (fwrite($fp,  $counter) === FALSE){
                print('ファイル書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        }
    }

    fclose($fp);

    print('ご利用ありがとうございます。質問番号'.$counter.'番で受け付けました。');

    ?>

    <table>
        <tr>
            <td>姓名</td>
            <td>
                <?php
                    $fp = fopen($counter_file, 'a');

                    $var = "\n" .$counter ."姓名:";
                    if($_POST["name1"]!=='' and $_POST["name2"]!==''){
                        echo $_POST["name1"] ." " .$_POST["name2"];
                        $var .= $_POST["name1"] ." " .$_POST["name2"] ."\n";
                    }else{
                        echo "姓名が正しく入力されていません ";
                        $var .= "NONE\n";
                    }

                    if ($fp){
                        if (flock($fp, LOCK_EX)){
                            if (fwrite($fp,  $var) === FALSE){
                                print('ファイル書き込みに失敗しました');
                            }
                            flock($fp, LOCK_UN);
                        }
                    }
                    fclose($fp);
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

<!--ログ処理

$fp = fopen($counter_file, 'r+');

if ($fp){
    if (flock($fp, LOCK_EX)){

        $counter = fgets($fp, $counter_lenght);
        $counter++;

        rewind($fp);

        if (fwrite($fp,  $counter) === FALSE){
            print('ファイル書き込みに失敗しました');
        }

        flock($fp, LOCK_UN);
    }
}

fclose($fp);
?>
-->
    </body>
</html>
