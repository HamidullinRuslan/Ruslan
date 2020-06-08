<body>
        <form name="text-form" method="post">
            <textarea name="text" cols="80" rows="6"><?php if (isset($_POST['text'])) echo $_POST['text']; else echo "Введите текст";?></textarea>
            <br/>
            <input type="submit" value="Отправить"/>
            <input type="reset" value="Очистить"/>

<<?php 
        $text=$_POST['text'];
        $text_nonspace=str_replace(array(" "), '', $text);
        echo 'Количество символов с пробелами: ' , mb_strlen($text, 'utf-8');
        echo '<br/>','Количество символов без пробелов: ' , mb_strlen($text_nonspace, 'utf-8');    
        for ( $i = 192; $i < 256; $i++ ) {$abc .= chr($i);}
        $abc=iconv( 'cp1251', 'utf-8', $abc);
        echo '<br/>','Количество слов в тексте: ', str_word_count($text,0,$abc);       
 ?>
     </body>
