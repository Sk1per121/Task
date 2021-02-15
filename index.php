<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>PHP</title>

</head>
<body>

    <!--todo Задание 1-->
    <div class="block">
        <span class="head">Задание 1</span>
        <span class="text">Дана строка 'php'. Сделайте из нее строку 'PHP'.</span>
        <div class="result">
            <?php
               echo strtoupper('php');
            ?>
        </div>
    </div>

    <!--todo Задание 2-->
    <div class="block">
        <span class="head">Задание 2</span>
        <span class="text">Дана строка 'PHP'. Сделайте из нее строку 'php'.</span>
        <div class="result">
            <?php
               echo strtolower('PHP');
            ?>
        </div>
    </div>

    <!--todo Задание 3-->
    <div class="block">
        <span class="head">Задание 3</span>
        <span class="text">Дана строка 'london'. Сделайте из нее строку 'London'.</span>
        <div class="result">
            <?php
               echo ucfirst('london');
            ?>
        </div>
    </div>

    <!--todo Задание 4-->
    <div class="block">
        <span class="head">Задание 4</span>
        <span class="text">Дана строка 'London'. Сделайте из нее строку 'london'.</span>
        <div class="result">
            <?php
               echo strtolower('London');
            ?>
        </div>
    </div>

    <!--todo Задание 5-->
    <div class="block">
        <span class="head">Задание 5</span>
        <span class="text">Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.</span>
        <div class="result">
            <?php
               echo ucwords('london is the capital of great britain');
            ?>
        </div>
    </div>

    <!--todo Задание 6-->
    <div class="block">
        <span class="head">Задание 6</span>
        <span class="text">Дана строка 'LONDON'. Сделайте из нее строку 'London'.</span>
        <div class="result">
            <?php
               echo ucfirst(strtolower('LONDON'));
            ?>
        </div>
    </div>

    <!--todo Задание 7-->
    <div class="block">
        <span class="head">Задание 7</span>
        <span class="text">Дана строка 'html css php'. Найдите количество символов в этой строке.</span>
        <div class="result">
            <?php
                echo strlen('html css php');
            ?>
        </div>
    </div>

    <!--todo Задание 8-->
    <div class="block">
        <span class="head">Задание 8</span>
        <span class="text">Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.</span>
        <div class="result">
            <?php
                $password = '12345678';
                $min = 5;
                $max = 10;
                if(strlen($password) > $min and strlen($password) < $max) {
                    echo 'Пароль удовлетворен';
                } else {
                    echo "Длинна пароля не должна быть менее $min и не более $max";
                }
            ?>
        </div>
    </div>

    <!--todo Задание 9-->
    <div class="block">
        <span class="head">Задание 9</span>
        <span class="text">Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.</span>
        <div class="result">
            <?php
                $arr = explode(' ', 'html css php');
                for($i = 0; $i<count($arr); $i++) {
                    echo $arr[$i].'<br>';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 10-->
    <div class="block">
        <span class="head">Задание 10</span>
        <span class="text">Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.</span>
        <div class="result">
            <?php
                echo mb_substr('Строка', -3);
            ?>
        </div>
    </div>

    <!--todo Задание 11-->
    <div class="block">
        <span class="head">Задание 11</span>
        <span class="text">Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.</span>
        <div class="result">
            <?php
                $str = 'http://site.com';
                $search = 'http://';
                $start = 0;

                if(substr($str, $start, strlen($search)) == $search) {
                    echo 'true';
                } else {
                    echo 'false';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 12-->
    <div class="block">
        <span class="head">Задание 12</span>
        <span class="text">Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'</span>
        <div class="result">
            <?php
                $str = 'https://site.com';
                $search = ['http://', 'https://'];
                $start = 0;
                $bool = false;

                for($i = 0; $i<count($search); $i++) {
                    if(substr($str, $start, strlen($search[$i])) == $search[$i]) {
                        $bool = true;
                        break;
                    }
                }

                if($bool) {
                    echo 'true';
                } else {
                    echo 'false';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 13-->
    <div class="block">
        <span class="head">Задание 13</span>
        <span class="text">Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.</span>
        <div class="result">
            <?php
                $str = 'image.png';
                $search = '.png';

                if(substr($str, strlen($search)*-1) == $search) {
                    echo 'true';
                } else {
                    echo 'false';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 14-->
    <div class="block">
        <span class="head">Задание 14</span>
        <span class="text">Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.</span>
        <div class="result">
            <?php
                $str = 'image.jpg';
                $search = ['.png', '.jpg'];
                $bool = false;

                for($i = 0; $i<count($search); $i++) {
                    if(substr($str, strlen($search[$i])*-1) == $search[$i]) {
                        $bool = true;
                        break;
                    }
                }

                if($bool) {
                    echo 'true';
                } else {
                    echo 'false';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 15-->
    <div class="block">
        <span class="head">Задание 15</span>
        <span class="text">Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.</span>
        <div class="result">
            <?php
                $str = 'Строка';
                $start = 5;

                if(mb_strlen($str) > 5) {
                    echo mb_substr($str, $start) . '...';
                } else {
                    echo $str . '...';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 16-->
    <div class="block">
        <span class="head">Задание 16</span>
        <span class="text">Дана строка '31.12.2013'. Замените все точки на дефисы.</span>
        <div class="result">
            <?php
                $str = '31.12.2013';
                echo str_replace('.', '-', $str); //implode('-', explode('.', $str));
            ?>
        </div>
    </div>

    <!--todo Задание 17-->
    <div class="block">
        <span class="head">Задание 17</span>
        <span class="text">Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</span>
        <div class="result">
            <?php
                $str = strtolower('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad exercitationem iusto omnis quaerat recusandae repellendus repudiandae sapiente tempore ullam. Aspernatur assumenda deleniti eos in molestias quaerat recusandae sint, soluta totam.');
                $search_replace = [['a', 1], ['b', 2], ['c', 3]];

                for($i = 0; $i<count($search_replace); $i++) {
                    $str = str_replace($search_replace[$i][0], $search_replace[$i][1], $str);
                }
                echo $str;
            ?>
        </div>
    </div>

    <!--todo Задание 18-->
    <div class="block">
        <span class="head">Задание 18</span>
        <span class="text">Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.</span>
        <div class="result">
            <?php
                $str = '1a2b3c4b5d6e7f8g9h0';
                $length = strlen($str);

                for($i = 0; $i < $length; $i++) {
                    if(is_numeric($str[$i])) {
                        $str = str_replace($str[$i], '', $str);
                    }
                }
                echo $str;
            ?>
        </div>
    </div>

    <!--todo Задание 19-->
    <div class="block">
        <span class="head">Задание 19</span>
        <span class="text">Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).</span>
        <div class="result">
            <?php
                $str = strtolower('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad exercitationem iusto omnis quaerat recusandae repellendus repudiandae sapiente tempore ullam. Aspernatur assumenda deleniti eos in molestias quaerat recusandae sint, soluta totam.');

                echo strtr($str, ['a'=>'1', 'b'=>'2', 'c'=>'3']) . '<br><br>';
                echo strtr($str, 'abc', '123');
            ?>
        </div>
    </div>

    <!--todo Задание 20-->
    <div class="block">
        <span class="head">Задание 20</span>
        <span class="text">Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.</span>
        <div class="result">
            <?php
                $str = 'Предложение';
                $range = [1, 5];

                function mb_substr_replace($string, $replace, $rs, $re) {
                    $sl = mb_strlen($string);

                    if($rs < 0) {
                        return mb_substr($string, 0, ($sl-$re)) . $replace;
                    } elseif($rs === 0) {
                        return $replace . mb_substr($string, ($sl-$re)*-1);
                    } else {
                        $strStart = mb_substr($string, 0, ($rs));
                        $strEnd = mb_substr($string, ($sl-$re-1)*-1);
                        return $strStart . $replace . $strEnd;
                    }
                }
                echo mb_substr_replace($str, '!!!', $range[0], $range[1]) . '<br>';
                echo substr_replace('Predlojenie', '!!!', $range[0], $range[1]);
            ?>
        </div>
    </div>

    <!--todo Задание 21-->
    <div class="block">
        <span class="head">Задание 21</span>
        <span class="text">Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.</span>
        <div class="result">
            <?php
                $str = 'abc abc abc';

                echo strpos($str, 'b');
            ?>
        </div>
    </div>

    <!--todo Задание 22-->
    <div class="block">
        <span class="head">Задание 22</span>
        <span class="text">Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</span>
        <div class="result">
            <?php
                $str = 'abc abc abc';

                echo strrpos($str, 'b');
            ?>
        </div>
    </div>

    <!--todo Задание 23-->
    <div class="block">
        <span class="head">Задание 23</span>
        <span class="text">Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.</span>
        <div class="result">
            <?php
                $str = 'abc abc abc';

                echo strpos($str, 'b', 3);
            ?>
        </div>
    </div>

    <!--todo Задание 24-->
    <div class="block">
        <span class="head">Задание 24</span>
        <span class="text">Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.</span>
        <div class="result">
            <?php
                $str = 'aaa aaa aaa aaa aaa';

                echo strpos($str, ' ', strpos($str, ' ')+1);
            ?>
        </div>
    </div>

    <!--todo Задание 25-->
    <div class="block">
        <span class="head">Задание 25</span>
        <span class="text">Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.</span>
        <div class="result">
            <?php
                //И тут моя голова решила отключиться и выдать код ниже...
                //А ведь решение то в 1 строчку strpos($str, '..'); Ужас:(
                $str = 'Text. Text. Text..';
                $numb = strpos($str, '.');
                $nextPos = 0;
                $bool = false;

                for($i = 0; $i<substr_count($str, '.'); $i++) {
                    $nextPos = strpos($str, '.', $numb+1);
                    if(($numb+1) === $nextPos) {
                        $bool = true;
                        break;
                    } else {
                        $numb = $nextPos;
                    }
                }

                if($bool) {
                    echo 'true';
                } else {
                    echo 'false';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 26-->
    <div class="block">
        <span class="head">Задание 26</span>
        <span class="text">Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.</span>
        <div class="result">
            <?php
                $str = 'http://site.ru';

                if(strpos($str, 'http://') === 0) {
                    echo 'true';
                } else {
                    echo 'false';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 27-->
    <div class="block">
        <span class="head">Задание 27</span>
        <span class="text">Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</span>
        <div class="result">
            <?php
                $str = 'html css php';
                $arr = explode(' ', $str);

                foreach ($arr as $value) {
                    echo $value . ' ';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 28-->
    <div class="block">
        <span class="head">Задание 28</span>
        <span class="text">Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.</span>
        <div class="result">
            <?php
                $arr = ['html', 'css', 'php'];

                echo implode(' ', $arr);
            ?>
        </div>
    </div>

    <!--todo Задание 29-->
    <div class="block">
        <span class="head">Задание 29</span>
        <span class="text">В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.</span>
        <div class="result">
            <?php
                $date = '2013-12-31';

                echo implode('.', explode('-', $date));
            ?>
        </div>
    </div>

    <!--todo Задание 30-->
    <div class="block">
        <span class="head">Задание 30</span>
        <span class="text">Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.</span>
        <div class="result">
            <?php
                $str = '1234567890';

                print_r(str_split($str, 2));
            ?>
        </div>
    </div>

    <!--todo Задание 31-->
    <div class="block">
        <span class="head">Задание 31</span>
        <span class="text">Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.</span>
        <div class="result">
            <?php
                $str = '1234567890';

                print_r(str_split($str, 1));
            ?>
        </div>
    </div>

    <!--todo Задание 32-->
    <div class="block">
        <span class="head">Задание 32</span>
        <span class="text">Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.</span>
        <div class="result">
            <?php
                $str = '1234567890';

                echo implode('-', str_split($str, 2));
            ?>
        </div>
    </div>

    <!--todo Задание 33-->
    <div class="block">
        <span class="head">Задание 33</span>
        <span class="text">Дана строка. Очистите ее от концевых пробелов.</span>
        <div class="result">
            <?php
                $str = ' text ';

                echo trim($str);
            ?>
        </div>
    </div>

    <!--todo Задание 34-->
    <div class="block">
        <span class="head">Задание 34</span>
        <span class="text">Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.</span>
        <div class="result">
            <?php
                $str = '/php/';

                echo trim($str, '/');
            ?>
        </div>
    </div>

    <!--todo Задание 35-->
    <div class="block">
        <span class="head">Задание 35</span>
        <span class="text">Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.</span>
        <div class="result">
            <?php
                $str = ' слова слова слова. ';

                echo rtrim(trim($str), '.') . '.';
            ?>
        </div>
    </div>

    <!--todo Задание 36-->
    <div class="block">
        <span class="head">Задание 36</span>
        <span class="text">Дана строка '12345'. Сделайте из нее строку '54321'.</span>
        <div class="result">
            <?php
                $str = '12345';

                echo strrev($str);
            ?>
        </div>
    </div>

    <!--todo Задание 37-->
    <div class="block">
        <span class="head">Задание 37</span>
        <span class="text">Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).</span>
        <div class="result">
            <?php
                $arr = ['madam', 'otto', 'kayak', 'nun', 'level'];

                foreach ($arr as $value) {
                    if($value === strrev($value)) {
                        echo $value . ' = ' . strrev($value) . '<br>';
                    } else {
                        echo $value . ' != ' . strrev($value) . '<br>';
                    }
                }
            ?>
        </div>
    </div>

    <!--todo Задание 38-->
    <div class="block">
        <span class="head">Задание 38</span>
        <span class="text">Дана строка. Перемешайте символы этой строки в случайном порядке.</span>
        <div class="result">
            <?php
                $str = 'String';

                echo str_shuffle($str);
            ?>
        </div>
    </div>

    <!--todo Задание 39-->
    <div class="block">
        <span class="head">Задание 39</span>
        <span class="text">Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.</span>
        <div class="result">
            <?php
                $arr = range('a','z');
                $str = '';

                for($i = 0; $i<6; $i++) {
                    $str .= $arr[rand(0, count($arr)-1)];
                }
                echo str_shuffle($str);
            ?>
        </div>
    </div>

    <!--todo Задание 40-->
    <div class="block">
        <span class="head">Задание 40</span>
        <span class="text">Дана строка '12345678'. Сделайте из нее строку '12 345 678'.</span>
        <div class="result">
            <?php
                $str = '12345678';

                echo number_format($str);
            ?>
        </div>
    </div>

    <!--todo Задание 41-->
    <div class="block">
        <span class="head">Задание 41</span>
        <span class="text">Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat.</span>
        <div class="result">
            <?php
                $str = '';
                $iter = 0;
                $iterEnd = 9;

                while(true) {
                    $iter++;
                    echo str_repeat('x', $iter) . '<br>';

                    if($iter === $iterEnd) {
                        break;
                    }
                }
            ?>
        </div>
    </div>

    <!--todo Задание 42-->
    <div class="block">
        <span class="head">Задание 42</span>
        <span class="text">Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.</span>
        <div class="result">
            <?php
                $str = '';
                $iter = 0;
                $iterEnd = 9;

                while(true) {
                    $iter++;
                    echo str_repeat($iter, $iter) . '<br>';

                    if($iter === $iterEnd) {
                        break;
                    }
                }
            ?>
        </div>
    </div>

    <!--todo Задание 43-->
    <div class="block">
        <span class="head">Задание 43</span>
        <span class="text">Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.</span>
        <div class="result">
            <?php
                $str = 'html, <b>php</b>, js';

                echo strip_tags($str);
            ?>
        </div>
    </div>

    <!--todo Задание 44-->
    <div class="block">
        <span class="head">Задание 44</span>
        <span class="text">Дана строка $str. Удалите все теги из этой строки, кроме тегов 'b' и 'i'.</span>
        <div class="result">
            <?php
                $str = '<i>html</i>, <b>php</b>, <strong>js<strong>';

                echo htmlspecialchars(strip_tags($str, '<b><i>'));
            ?>
        </div>
    </div>

    <!--todo Задание 45-->
    <div class="block">
        <span class="head">Задание 45</span>
        <span class="text">Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать в жирный.</span>
        <div class="result">
            <?php
                $str = 'html, <b>php</b>, js';

                echo htmlspecialchars($str);
            ?>
        </div>
    </div>

    <!--todo Задание 46-->
    <div class="block">
        <span class="head">Задание 46</span>
        <span class="text">Узнайте код символов 'a', 'b', 'c', пробела.</span>
        <div class="result">
            <?php
                $arr = ['a', 'b', 'c', ' '];

                foreach ($arr as $value) {
                    echo ord($value) . ' ';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 47-->
    <div class="block">
        <span class="head">Задание 47</span>
        <span class="text">Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.</span>
        <div class="result">
            <?php
                echo 'Не имеет практической задачи';
            ?>
        </div>
    </div>

    <!--todo Задание 48-->
    <div class="block">
        <span class="head">Задание 48</span>
        <span class="text">Выведите на экран символ с кодом 33.</span>
        <div class="result">
            <?php
                echo chr(33);
            ?>
        </div>
    </div>

    <!--todo Задание 49-->
    <div class="block">
        <span class="head">Задание 49</span>
        <span class="text">Запишите в переменную $str случайный символ - большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.</span>
        <div class="result">
            <?php
                $str = mt_rand(65, 90);

                echo chr($str);
            ?>
        </div>
    </div>

    <!--todo Задание 50-->
    <div class="block">
        <span class="head">Задание 50</span>
        <span class="text">Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.</span>
        <div class="result">
            <?php
                $str = '';
                $len = mt_rand(5, 10);

                while (true) {
                    $str .= chr(mt_rand(97, 122));

                    if($len-- === 0) break;
                }

                echo $str;
            ?>
        </div>
    </div>

    <!--todo Задание 51-->
    <div class="block">
        <span class="head">Задание 51</span>
        <span class="text">Дана буква английского алфавита. Узнайте, она маленькая или большая.</span>
        <div class="result">
            <?php
                $range = [[65, 90], [97, 122]];
                $charCode = [mt_rand($range[0][0], $range[0][1]), mt_rand($range[1][0], $range[1][1])];
                $key = array_rand($charCode);

                if($charCode[$key] >= $range[0][0] and $charCode[$key] <= $range[0][1]) {
                    echo 'Маленькая';
                } elseif($charCode[$key] >= $range[1][0] and $charCode[$key] <= $range[1][1]) {
                    echo 'Большая';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 52-->
    <div class="block">
        <span class="head">Задание 52</span>
        <span class="text">Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.</span>
        <div class="result">
            <?php
                $str = 'ab-cd-ef';

                echo strchr($str, '-');
            ?>
        </div>
    </div>

    <!--todo Задание 53-->
    <div class="block">
        <span class="head">Задание 53</span>
        <span class="text">Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.</span>
        <div class="result">
            <?php
                $str = 'ab-cd-ef';

                echo strrchr($str, '-');
            ?>
        </div>
    </div>

    <!--todo Задание 54-->
    <div class="block">
        <span class="head">Задание 54</span>
        <span class="text">Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.</span>
        <div class="result">
            <?php
                $str = 'ab--cd--ef';

                echo strstr($str, '--');
            ?>
        </div>
    </div>

    <!--todo Задание 55-->
    <div class="block">
        <span class="head">Задание 55</span>
        <span class="text">Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.</span>
        <div class="result">
            <?php
                $str = 'var_test_text';

                echo lcfirst(ucwords(implode(' ', explode('_', $str))));

            ?>
        </div>
    </div>

    <!--todo Задание 56-->
    <div class="block">
        <span class="head">Задание 56</span>
        <span class="text">Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.</span>
        <div class="result">
            <?php
                $arr = range(0, mt_rand(30, 50));

                foreach($arr as $value) {
                    if(strpos($value, '3') !== false) {
                        echo $value . ' ';
                    }
                }
            ?>
        </div>
    </div>

    <!--todo Задание 1.1-->
    <div class="block">
        <span class="head">Задание 1.1</span>
        <span class="text">Создайте массив $arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().</span>
        <div class="result">
            <?php
                $arr=['a', 'b', 'c'];

                var_dump($arr);

            ?>
        </div>
    </div>

    <!--todo Задание 1.2-->
    <div class="block">
        <span class="head">Задание 1.2</span>
        <span class="text">С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.</span>
        <div class="result">
            <?php
                $arr=['a', 'b', 'c'];

                echo($arr[1] . ' ' . $arr[2]);
            ?>
        </div>
    </div>

    <!--todo Задание 1.3-->
    <div class="block">
        <span class="head">Задание 1.3</span>
        <span class="text">Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.</span>
        <div class="result">
            <?php
                $arr=['a', 'b', 'c', 'd'];

                for($i = 0; $i < count($arr); $i += 2) {
                   echo $arr[$i] . '+' . $arr[$i+1] . ' ';
                }
            ?>
        </div>
    </div>

    <!--todo Задание 1.4-->
    <div class="block">
        <span class="head">Задание 1.4</span>
        <span class="text">Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.</span>
        <div class="result">
            <?php
                $result = 0;
                $arr = [2, 5, 3, 9];

                for ($i = 0; $i < count($arr); $i += 2) {
                    if($arr[$i+1]) {
                        $result += $arr[$i] * $arr[$i+1];
                    } else {
                        $result += $arr[$i];
                    }
                }

                echo $result;
            ?>
        </div>
    </div>

    <!--todo Задание 1.5-->
    <div class="block">
        <span class="head">Задание 1.5</span>
        <span class="text">Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] = новое значение.</span>
        <div class="result">
            <?php
                $arr = []; //очистил массив, ибо ранее он использовался и был заполнен
                $count = 5;

                for($i = 0; $i < $count; $i++) {
                    $arr[] = $i+1;
                }

                var_dump($arr);
            ?>
        </div>
    </div>

    <!--todo Задание 1.6-->
    <div class="block">
        <span class="head">Задание 1.6</span>
        <span class="text">Создайте массив $arr. Выведите на экран элемент с ключом 'c'.</span>
        <div class="result">
            <?php
                $arr = [
                    'a'=>1,
                    'b'=>2,
                    'c'=>3
                ];

                echo $arr['c'];
            ?>
        </div>
    </div>

    <!--todo Задание 1.7-->
    <div class="block">
        <span class="head">Задание 1.7</span>
        <span class="text">Создайте массив $arr. Найдите сумму элементов этого массива.</span>
        <div class="result">
            <?php
                $arr = [
                    'a'=>1,
                    'b'=>2,
                    'c'=>3
                ];

                echo array_sum($arr);
            ?>
        </div>
    </div>

    <!--todo Задание 1.8-->
    <div class="block">
        <span class="head">Задание 1.8</span>
        <span class="text">Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.</span>
        <div class="result">
            <?php
                $arr = [
                    'Коля'=>'1000$',
                    'Вася'=>'500$',
                    'Петя'=>'200$'
                ];

                $keys = array_keys($arr);

                echo $keys[0] . ' - ' . $arr[$keys[0]] . '<br>' . $keys[2] . ' - ' . $arr[$keys[2]];
            ?>
        </div>
    </div>

    <!--todo Задание 1.9-->
    <div class="block">
        <span class="head">Задание 1.9</span>
        <span class="text">Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.</span>
        <div class="result">
            <?php
                $arr = [
                    '1' => 'Понедельник',
                    '2' => 'Вторник',
                    '3' => 'Среда',
                    '4' => 'Четверг',
                    '5' => 'Пятница',
                    '6' => 'Суббота',
                    '7' => 'Воскресенье'
                ];

                echo ($arr[(int) date("N")]);
            ?>
        </div>
    </div>

    <!--todo Задание 1.10-->
    <div class="block">
        <span class="head">Задание 1.10</span>
        <span class="text">Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. Выведите день недели, соответствующий значению переменной $day.</span>
        <div class="result">
            <?php
                $day = 3;
                $arr = [
                    '1' => 'Понедельник',
                    '2' => 'Вторник',
                    '3' => 'Среда',
                    '4' => 'Четверг',
                    '5' => 'Пятница',
                    '6' => 'Суббота',
                    '7' => 'Воскресенье'
                ];

                echo $arr[$day];
            ?>
        </div>
    </div>

    <!--todo Задание 1.11-->
    <div class="block">
        <span class="head">Задание 1.11</span>
        <span class="text">Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.</span>
        <div class="result">
            <?php
                $arr = [
                    'cms'=>['joomla', 'wordpress', 'drupal'],
                    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
                ];

                echo $arr['cms'][0] . ' ' . $arr['cms'][1] . ' ' . $arr['colors']['green'] . ' ' . $arr['colors']['red'];
            ?>
        </div>
    </div>

    <!--todo Задание 1.12-->
    <div class="block">
        <span class="head">Задание 1.12</span>
        <span class="text">Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).</span>
        <div class="result">
            <?php
                $arr = [
                    'ru' => [
                        '1' => 'Понедельник',
                        '2' => 'Вторник',
                        '3' => 'Среда',
                        '4' => 'Четверг',
                        '5' => 'Пятница',
                        '6' => 'Суббота',
                        '7' => 'Воскресенье'
                    ],
                    'eu' => [
                        '1' => 'Monday',
                        '2' => 'Tuesday',
                        '3' => 'Wednesday',
                        '4' => 'Thursday',
                        '5' => 'Friday',
                        '6' => 'Saturday',
                        '7' => 'Sunday'
                    ]
                ];

                echo $arr['ru'][1] . ' ' . $arr['eu'][3];
            ?>
        </div>
    </div>

    <!--todo Задание 1.13-->
    <div class="block">
        <span class="head">Задание 1.13</span>
        <span class="text">Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня. Выведите словом день недели, соответствующий переменным $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.</span>
        <div class="result">
            <?php
                $lang = 'ru';
                $day = 3;

                $arr = [
                    'ru' => [
                        '1' => 'Понедельник',
                        '2' => 'Вторник',
                        '3' => 'Среда',
                        '4' => 'Четверг',
                        '5' => 'Пятница',
                        '6' => 'Суббота',
                        '7' => 'Воскресенье'
                    ],
                    'eu' => [
                        '1' => 'Monday',
                        '2' => 'Tuesday',
                        '3' => 'Wednesday',
                        '4' => 'Thursday',
                        '5' => 'Friday',
                        '6' => 'Saturday',
                        '7' => 'Sunday'
                    ]
                ];

                echo $arr[$lang][$day];
            ?>
        </div>
    </div>
</body>
</html>