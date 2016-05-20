<head>
    <meta charset="UTF-8">
    <title>PhpFormResult</title>
    <link rel="stylesheet" href="form_styles.css">
</head>
<body>
    <h2>お問い合わせ完了</h2>

    <p>姓名
        <?php echo $_POST["name1"] ." " .$_POST["name2"]; ?>
    </p>
    <p>性別
        <?php
            if($_POST["sex"]==='c1'){
                echo "男";
            }elseif ($_POST["sex"]==='c2') {
                echo "女";
            }elseif ($_POST["sex"]==='c3') {
                echo "不明";
            }
         ?>
    </p>
    <p>住所
        <?php echo $_POST["address"] ; ?>
    </p>
    <p>電話番号
        <?php
            $i=0;
            foreach ($_POST["tel"] as $key => $value) {
                echo $value ;
                if($key < 2){
                    echo " - ";
                }
            }
        ?>
    </p>
    <p>メールアドレス
        <?php echo $_POST["mail1"] .'@' .$_POST["mail2"]; ?>
    </p>
    <p>どこで知ったか？
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
    </p>
    <p>質問カテゴリ
        <?php echo $_POST["category"] ; ?>
    </p>
    <P>質問内容</p>
    <p><?php echo $_POST["contents"] ; ?></p>
</body>
