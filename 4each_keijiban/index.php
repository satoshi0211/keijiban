<! DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP初級課題</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>

    
<body>
     <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");
    
    
    ?>
   
    
    
    
    <div class="logo1"><img src="image/4eachblog_logo.jpg"></div>
    
    <header>  
        <ul>
            <li class="top">トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    
    
 
  
    
    
    <main class="box">
        <div class="main-conteiner">
        
            <div class="left">

                <h1>プログラミングに役立つ掲示板</h1>

                    <form method="post" action="insert.php">
                        <p class="nyuryoku">入力フォーム</p>
                        <br>
                        
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>
            
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>
            
                       
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="70" rows="10" name="comments"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>  
               
                    </form> 
                
            <?php
                
                while($row = $stmt->fetch()){
                
                echo "<div class='toukou'>";
                    echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                            echo $row['comments'];
                            echo"<div class='handlename'>pdsted by".$row['handlename']."</div>";
                        echo"</div>";
                echo"</div>";
                }
            ?>
            </div>
                
         






            <div class="right">

                <h2>人気の記事</h2>
                        <ul>
                            <li>PHPオススメ本</li>
                            <li>PHP MyAdminの使い方</li>
                            <li>今人気のエディタ Top5</li>
                            <li>HTMLの基礎</li>
                        </ul>

                <h2>オススメリンク</h2>

                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>

                <h2>カテゴリ</h2>

                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>


            </div>
            
        </div>
        
    </main>
    
    
    <footer>
        copylight©internous | 4each blog the which provides A toZ about programming.
    </footer>
    
 </body>

</html>    