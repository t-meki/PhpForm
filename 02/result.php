<html>
<head>
    <meta charset="UTF-8">
    <title>PhpFormResult</title>
    <link rel="stylesheet" href="form_styles.css">
</head>
<body style="background-color : #AAEEDD">
    <h2>お問い合わせ完了</h2>
    <p>
        <?php
        $counter_file = 'counter.txt';
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
    </p>
    <table>
        <tr>
            <td>姓名</td>
            <td>
                <?php
                    $log_file = 'contact_log.txt';

                    $fp1 = fopen($counter_file, 'r+');
                    $fp2 = fopen($log_file, 'a+');

                    if ($fp1){
                        if (flock($fp1, LOCK_EX)){

                            $counter = fgets($fp1, $counter_lenght);

                            rewind($fp1);

                            if ($fp2){
                                $var = "\nNAME:";
                                if (flock($fp2, LOCK_EX)){
                                    if (fwrite($fp2,  $counter) === FALSE){
                                        print('ファイル書き込みに失敗しました');
                                    }
                                    if($_POST["name1"]!=='' and $_POST["name2"]!==''){
                                        $var .= $_POST["name1"] ." " .$_POST["name2"] ."\n";
                                        echo  $_POST["name1"] ." " .$_POST["name2"] ."\n";
                                    }else{
                                        $var .= "NONE\n";
                                        echo  "正しく入力されていません";
                                    }
                                    if (fwrite($fp2, $var) === FALSE){
                                        print('ファイル書き込みに失敗しました');
                                    }
                                    flock($fp2, LOCK_UN);
                                }
                            }
                            flock($fp1, LOCK_UN);
                        }
                    }
                    fclose($fp1);
                    fclose($fp2);
                ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <?php
                    $fp = fopen($log_file, 'a+');

                    if ($fp){
                        if (flock($fp, LOCK_EX)){
                            $var = "GENDER:";
                            if ($_POST["sex"]==='c1'){
                                $var .= "M" ."\n";
                                echo "男";
                            }elseif ($_POST["sex"]==='c2') {
                                $var .= "F" ."\n";
                                echo "女";
                            }elseif ($_POST["sex"]==='c3') {
                                $var .= "Unknown" ."\n";
                                echo "不明";
                            }

                            if (fwrite($fp, $var) === FALSE){
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
            <td>住所</td>
            <td>
                <?php
                    $fp = fopen($log_file, 'a+');

                    if ($fp){
                        if (flock($fp, LOCK_EX)){
                            $var = "ADDRESS:";
                            if($_POST["address"]!==''){
                                $var .= $_POST["address"] ."\n";
                                echo $_POST["address"] ."\n";
                            }else{
                                $var .= "NONE\n";
                                echo "未入力";
                            }
                            if (fwrite($fp, $var) === FALSE){
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
            <td>電話番号</td>
            <td>
                <?php
                    $fp = fopen($log_file, 'a+');

                    if ($fp){
                        if (flock($fp, LOCK_EX)){
                            $var = "TEL:";
                            if($_POST["tel"][0]!=='' and $_POST["tel"][1]!=='' and $_POST["tel"][2]!==''){
                                $var .= $_POST["tel"][0] ." - " .$_POST["tel"][1] ." - " .$_POST["tel"][2] ."\n";
                                echo $var ;
                            }else{
                                $var .= "NONE\n";
                                echo "正しく入力されていません";
                            }
                            if (fwrite($fp, $var) === FALSE){
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
            <td>メールアドレス</td>
            <td>
                <?php
                    $fp = fopen($log_file, 'a+');
                    if ($fp){
                        $var = "MAIL:";
                        if (flock($fp, LOCK_EX)){
                            if($_POST["mail1"]!=='' and $_POST["mail2"]!==''){
                                $var .= $_POST["mail1"] .'@' .$_POST["mail2"] ."\n";
                                echo $var;
                            }else{
                                $var .= "NONE\n";
                                echo "正しく入力されていません" ;
                            }
                            if (fwrite($fp, $var) === FALSE){
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
            <td>どこで知ったか？&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <?php
                    $fp = fopen($log_file, 'a+');
                    if ($fp){
                        $var = "WHERE:";
                        if (flock($fp, LOCK_EX)){
                            if(!isset($_POST["cdx"])){
                                $var .= "NONE";
                                echo "未入力" ;
                            }else{
                                foreach ($_POST["cdx"] as $key => $value) {
                                    switch ($value) {
                                        case 'c1':
                                            $var .= "ネット ";
                                            echo "ネット　";
                                            break;
                                        case 'c2':
                                            $var .= "口コミ　";
                                            echo "口コミ　";
                                            break;
                                        case 'c3':
                                            $var .= "街角 ";
                                            echo "街角　";
                                            break;
                                        case 'c4':
                                            $var .= "新聞・雑誌 ";
                                            echo "新聞・雑誌　";
                                            break;
                                        case 'c5':
                                            $var .= "その他　";
                                            echo "その他　";
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }
                            $var .= "\n";
                            if (fwrite($fp, $var) === FALSE){
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
            <td>質問カテゴリ</td>
            <td>
                <?php
                    $fp = fopen($log_file, 'a+');
                    if ($fp){
                        $var = "CATEGORY:";
                        if (flock($fp, LOCK_EX)){
                            $var .= $_POST["category"] ."\n";
                            echo $_POST["category"];

                            if (fwrite($fp, $var) === FALSE){
                                print('ファイル書き込みに失敗しました');
                            }
                            flock($fp, LOCK_UN);
                        }
                    }
                    fclose($fp);
                ?>
            </td>
        </tr>
    </table>
    <p>質問内容</p>
        <p>
<textarea readonly cols="80" rows="12" name="contained" wrap="hard"><?php
                $fp = fopen($log_file, 'a+');
                if ($fp){
                    $var = "QUESTION\n";
                    if (flock($fp, LOCK_EX)){
                        $var .= $_POST["contents"] ."\n";
                        echo $_POST["contents"] ."\n";

                        if (fwrite($fp, $var) === FALSE){
                            print('ファイル書き込みに失敗しました');
                        }
                        flock($fp, LOCK_UN);
                    }
                }
                fclose($fp);
            ?>
            </textarea>
        </p>
    </body>
</html>
