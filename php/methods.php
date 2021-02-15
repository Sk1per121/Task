<?php
//Задачи -> Строки / Массивы -> http://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html / http://old.code.mu/tasks/php/base/osnovy-raboty-s-massivami-v-php.html
//В некоторых заданиях нужно было вывести массив, но т.к. тот же var_dump не работал в подобной реализации, приходилось преобразовывать массив в строку

class test {
    public function methods() {
        function mb_substr_replace($string, $replace, $rs, $re) { //Написал для решения 1 из задачи №20
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

        $tasks = [
            'task1' => [ //todo Задание 1
                'head' => 'Задание 1',
                'task' => "Дана строка 'php'. Сделайте из нее строку 'PHP'.",
                'func' => function() {
                    return strtoupper('php');
                }
            ],
            'task2' => [ //todo Задание 2
                'head' => 'Задание 2',
                'task' => "Дана строка 'PHP'. Сделайте из нее строку 'php'",
                'func' => function() {
                    return strtolower('PHP');
                }
            ],
            'task3' => [ //todo Задание 3
                'head' => 'Задание 3',
                'task' => "Дана строка 'london'. Сделайте из нее строку 'London'",
                'func' => function() {
                    return ucfirst('london');
                }
            ],
            'task4' => [ //todo Задание 4
                'head' => 'Задание 4',
                'task' => "Дана строка 'London'. Сделайте из нее строку 'london'.",
                'func' => function() {
                    return strtolower('London');
                }
            ],
            'task5' => [ //todo Задание 5
                'head' => 'Задание 5',
                'task' => "Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.",
                'func' => function() {
                    return ucwords('london is the capital of great britain');
                }
            ],
            'task6' => [ //todo Задание 6
                'head' => 'Задание 6',
                'task' => "Дана строка 'LONDON'. Сделайте из нее строку 'London'.",
                'func' => function() {
                    return ucfirst(strtolower('LONDON'));
                }
            ],
            'task7' => [ //todo Задание 7
                'head' => 'Задание 7',
                'task' => "Дана строка 'html css php'. Найдите количество символов в этой строке.",
                'func' => function() {
                    return strlen('html css php');
                }
            ],
            'task8' => [ //todo Задание 8
                'head' => 'Задание 8',
                'task' => "Дана переменная password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.",
                'func' => function() {
                    $password = '12345678';
                    $min = 5;
                    $max = 10;

                    if(strlen($password) > $min and strlen($password) < $max) {
                        return 'Пароль удовлетворен';
                    } else {
                        return "Длинна пароля не должна быть менее $min и не более $max";
                    }
                }
            ],
            'task9' => [ //todo Задание 9
                'head' => 'Задание 9',
                'task' => "Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.",
                'func' => function() {
                    $str = "";
                    $arr = explode(' ', 'html css php');

                    for($i = 0; $i<count($arr); $i++) {
                        $str .= $arr[$i].'<br>';
                    }

                    return $str;
                }
            ],
            'task10' => [ //todo Задание 10
                'head' => 'Задание 10',
                'task' => "Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.",
                'func' => function() {
                    return mb_substr('Строка', -3);
                }
            ],
            'task11' => [ //todo Задание 11
                'head' => 'Задание 11',
                'task' => "Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.",
                'func' => function() {
                    $str = 'http://site.com';
                    $search = 'http://';
                    $start = 0;

                    if(substr($str, $start, strlen($search)) == $search) {
                        return 'true';
                    } else {
                        return 'false';
                    }
                }
            ],
            'task12' => [ //todo Задание 12
                'head' => 'Задание 12',
                'task' => "Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.",
                'func' => function() {
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
                        return 'true';
                    } else {
                        return 'false';
                    }
                }
            ],
            'task13' => [ //todo Задание 13
                'head' => 'Задание 13',
                'task' => "Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.",
                'func' => function() {
                    $str = 'image.png';
                    $search = '.png';

                    if(substr($str, strlen($search)*-1) == $search) {
                        return 'true';
                    } else {
                        return 'false';
                    }
                }
            ],
            'task14' => [ //todo Задание 14
                'head' => 'Задание 14',
                'task' => "Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.",
                'func' => function() {
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
                        return 'true';
                    } else {
                        return 'false';
                    }
                }
            ],
            'task15' => [ //todo Задание 15
                'head' => 'Задание 15',
                'task' => "Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.",
                'func' => function() {
                    $str = 'Строка';
                    $start = 5;

                    if(mb_strlen($str) > 5) {
                        return mb_substr($str, $start) . '...';
                    } else {
                        return $str . '...';
                    }
                }
            ],
            'task16' => [ //todo Задание 16
                'head' => 'Задание 16',
                'task' => "Дана строка '31.12.2013'. Замените все точки на дефисы.",
                'func' => function() {
                    $str = '31.12.2013';
                    return str_replace('.', '-', $str); //implode('-', explode('.', $str));
                }
            ],
            'task17' => [ //todo Задание 17
                'head' => 'Задание 17',
                'task' => "Дана строка str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.",
                'func' => function() {
                    $str = strtolower('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad exercitationem bb.');
                    $search_replace = [['a', 1], ['b', 2], ['c', 3]];

                    for($i = 0; $i<count($search_replace); $i++) {
                        $str = str_replace($search_replace[$i][0], $search_replace[$i][1], $str);
                    }
                    return $str;
                }
            ],
            'task18' => [ //todo Задание 18
                'head' => 'Задание 18',
                'task' => "Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.",
                'func' => function() {
                    $str = '1a2b3c4b5d6e7f8g9h0';
                    $length = strlen($str);

                    for($i = 0; $i < $length; $i++) {
                        if(is_numeric($str[$i])) {
                            $str = str_replace($str[$i], '', $str);
                        }
                    }
                    return $str;
                }
            ],
            'task19' => [ //todo Задание 19
                'head' => 'Задание 19',
                'task' => "Дана строка str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).",
                'func' => function() {
                    $str = strtolower('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad exercitationem bb.');

                    return strtr($str, ['a'=>'1', 'b'=>'2', 'c'=>'3']) . '<br>' . strtr($str, 'abc', '123');
                }
            ],
            'task20' => [ //todo Задание 20
                'head' => 'Задание 20',
                'task' => "Дана строка str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.",
                'func' => function() {
                    $range = [1, 5];

                    return mb_substr_replace('Предложение', '!!!', $range[0], $range[1]) . '<br>' . substr_replace('Predlojenie', '!!!', $range[0], $range[1]);
                }
            ],
            'task21' => [ //todo Задание 21
                'head' => 'Задание 21',
                'task' => "Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.",
                'func' => function() {
                    $str = 'abc abc abc';

                    return strpos($str, 'b');
                }
            ],
            'task22' => [ //todo Задание 22
                'head' => 'Задание 22',
                'task' => "Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.",
                'func' => function() {
                    $str = 'abc abc abc';

                    return strrpos($str, 'b');
                }
            ],
            'task23' => [ //todo Задание 23
                'head' => 'Задание 23',
                'task' => "Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.",
                'func' => function() {
                    $str = 'abc abc abc';

                    return strpos($str, 'b', 3);
                }
            ],
            'task24' => [ //todo Задание 24
                'head' => 'Задание 24',
                'task' => "Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.",
                'func' => function() {
                    $str = 'aaa aaa aaa aaa aaa';

                    return strpos($str, ' ', strpos($str, ' ') + 1);
                }
            ],
            'task25' => [ //todo Задание 25
                'head' => 'Задание 25',
                'task' => "Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.",
                'func' => function() {
                    $str = 'Text. Text. Text..';
                    return strpos($str, '..');
                }
            ],
            'task26' => [ //todo Задание 26
                'head' => 'Задание 26',
                'task' => "Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.",
                'func' => function() {
                    $str = 'http://site.ru';

                    if(strpos($str, 'http://') === 0) {
                        return 'true';
                    } else {
                        return 'false';
                    }
                }
            ],
            'task27' => [ //todo Задание 27
                'head' => 'Задание 27',
                'task' => "Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.",
                'func' => function() {
                    $str = 'html css php';
                    $arr = explode(' ', $str);

                    $str = '';

                    foreach ($arr as $value) {
                        $str .= $value . ' ';
                    }

                    return $str;
                }
            ],
            'task28' => [ //todo Задание 28
                'head' => 'Задание 28',
                'task' => "Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.",
                'func' => function() {
                    $arr = ['html', 'css', 'php'];

                    return implode(' ', $arr);
                }
            ],
            'task29' => [ //todo Задание 29
                'head' => 'Задание 29',
                'task' => "В переменной date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.",
                'func' => function() {
                    $date = '2013-12-31';

                    return implode('.', explode('-', $date));
                }
            ],
            'task30' => [ //todo Задание 30
                'head' => 'Задание 30',
                'task' => "Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.",
                'func' => function() {
                    $str = '1234567890';

                    return (implode(' ', str_split($str, 2)));
                }
            ],
            'task31' => [ //todo Задание 31
                'head' => 'Задание 31',
                'task' => "Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.",
                'func' => function() {
                    $str = '1234567890';

                    return (implode(' ', str_split($str)));
                }
            ],
            'task32' => [ //todo Задание 32
                'head' => 'Задание 32',
                'task' => "Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.",
                'func' => function() {
                    $str = '1234567890';

                    return implode('-', str_split($str, 2));
                }
            ],
            'task33' => [ //todo Задание 33
                'head' => 'Задание 33',
                'task' => "Дана строка. Очистите ее от концевых пробелов.",
                'func' => function() {
                    $str = ' text ';

                    return trim($str);
                }
            ],
            'task34' => [ //todo Задание 34
                'head' => 'Задание 34',
                'task' => "Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.",
                'func' => function() {
                    $str = '/php/';

                    return trim($str, '/');
                }
            ],
            'task35' => [ //todo Задание 35
                'head' => 'Задание 35',
                'task' => "Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.",
                'func' => function() {
                    $str = ' слова слова слова. ';

                    return rtrim(trim($str), '.') . '.';
                }
            ],
            'task36' => [ //todo Задание 36
                'head' => 'Задание 36',
                'task' => "Дана строка '12345'. Сделайте из нее строку '54321'.",
                'func' => function() {
                    $str = '12345';

                    return strrev($str);
                }
            ],
            'task37' => [ //todo Задание 37
                'head' => 'Задание 37',
                'task' => "Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).",
                'func' => function() {
                    $str = '';
                    $arr = ['madam', 'otto', 'kayak', 'nun', 'level'];

                    foreach ($arr as $value) {
                        if($value === strrev($value)) {
                            $str .= $value . ' = ' . strrev($value) . '<br>';
                        } else {
                            $str .= $value . ' != ' . strrev($value) . '<br>';
                        }
                    }
                    return $str;
                }
            ],
            'task38' => [ //todo Задание 38
                'head' => 'Задание 38',
                'task' => "Дана строка. Перемешайте символы этой строки в случайном порядке.",
                'func' => function() {
                    $str = 'String';

                    return str_shuffle($str);
                }
            ],
            'task39' => [ //todo Задание 39
                'head' => 'Задание 39',
                'task' => "Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.",
                'func' => function() {
                    $str = '';
                    $arr = range('a','z');

                    for($i = 0; $i<6; $i++) {
                        $str .= $arr[rand(0, count($arr)-1)];
                    }
                    return str_shuffle($str);
                }
            ],
            'task40' => [ //todo Задание 40
                'head' => 'Задание 40',
                'task' => "Дана строка '12345678'. Сделайте из нее строку '12 345 678'.",
                'func' => function() {
                    $str = '12345678';

                    return number_format($str);
                }
            ],
            'task41' => [ //todo Задание 41
                'head' => 'Задание 41',
                'task' => "Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat.",
                'func' => function() {
                    $str = '';
                    $iter = 0;
                    $iterEnd = 9;

                    while(true) {
                        $iter++;
                        $str .= str_repeat('x', $iter) . '<br>';

                        if($iter === $iterEnd) {
                            break;
                        }
                    }

                    return $str;
                }
            ],
            'task42' => [ //todo Задание 42
                'head' => 'Задание 42',
                'task' => "Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.",
                'func' => function() {
                    $str = '';
                    $iter = 0;
                    $iterEnd = 9;

                    while(true) {
                        $iter++;
                        $str .= str_repeat($iter, $iter) . '<br>';

                        if($iter === $iterEnd) {
                            break;
                        }
                    }

                    return $str;
                }
            ],
            'task43' => [ //todo Задание 43
                'head' => 'Задание 43',
                'task' => "Дана строка 'html, " . htmlspecialchars('<b>php<b>') . ", js'. Удалите теги из этой строки.",
                'func' => function() {
                    $str = 'html, <b>php</b>, js';

                    return strip_tags($str);
                }
            ],
            'task44' => [ //todo Задание 44
                'head' => 'Задание 44',
                'task' => "Дана строка str. Удалите все теги из этой строки, кроме тегов 'b' и 'i'.",
                'func' => function() {
                    $str = '<i>html</i>, <b>php</b>, <strong>js<strong>';

                    return htmlspecialchars(strip_tags($str, '<b><i>'));
                }
            ],
            'task45' => [ //todo Задание 45
                'head' => 'Задание 45',
                'task' => "Дана строка 'html, " . htmlspecialchars('<b>php<b>') . ", js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать в жирный.",
                'func' => function() {
                    $str = 'html, <b>php</b>, js';

                    return htmlspecialchars($str);
                }
            ],
            'task46' => [ //todo Задание 46
                'head' => 'Задание 46',
                'task' => "Узнайте код символов 'a', 'b', 'c', пробела.",
                'func' => function() {
                    $str = '';
                    $arr = ['a', 'b', 'c', ' '];

                    foreach ($arr as $value) {
                        $str .= ord($value) . ' ';
                    }

                    return $str;
                }
            ],
            'task47' => [ //todo Задание 47
                'head' => 'Задание 47',
                'task' => "Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.",
                'func' => function() {
                    return 'Не имеет практической задачи';
                }
            ],
            'task48' => [ //todo Задание 48
                'head' => 'Задание 48',
                'task' => "Выведите на экран символ с кодом 33.",
                'func' => function() {
                    return chr(33);
                }
            ],
            'task49' => [ //todo Задание 49
                'head' => 'Задание 49',
                'task' => "Запишите в переменную str случайный символ - большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.",
                'func' => function() {
                    $str = mt_rand(65, 90);

                    return chr($str);
                }
            ],
            'task50' => [ //todo Задание 50
                'head' => 'Задание 50',
                'task' => "Запишите в переменную str случайную строку len длиной, состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.",
                'func' => function() {
                    $str = '';
                    $len = mt_rand(5, 10);

                    while (true) {
                        $str .= chr(mt_rand(97, 122));

                        if($len-- === 0) break;
                    }

                    return $str;
                }
            ],
            'task51' => [ //todo Задание 51
                'head' => 'Задание 51',
                'task' => "Дана буква английского алфавита. Узнайте, она маленькая или большая.",
                'func' => function() {
                    $range = [[65, 90], [97, 122]];
                    $charCode = [mt_rand($range[0][0], $range[0][1]), mt_rand($range[1][0], $range[1][1])];
                    $key = array_rand($charCode);

                    if($charCode[$key] >= $range[0][0] and $charCode[$key] <= $range[0][1]) {
                        return 'Маленькая';
                    } elseif($charCode[$key] >= $range[1][0] and $charCode[$key] <= $range[1][1]) {
                        return 'Большая';
                    } else {
                        return false;
                    }
                }
            ],
            'task52' => [ //todo Задание 52
                'head' => 'Задание 52',
                'task' => "Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.",
                'func' => function() {
                    $str = 'ab-cd-ef';

                    return strchr($str, '-');
                }
            ],
            'task53' => [ //todo Задание 53
                'head' => 'Задание 53',
                'task' => "Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.",
                'func' => function() {
                    $str = 'ab-cd-ef';

                    return strrchr($str, '-');
                }
            ],
            'task54' => [ //todo Задание 54
                'head' => 'Задание 54',
                'task' => "Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.",
                'func' => function() {
                    $str = 'ab--cd--ef';

                    return strstr($str, '--');
                }
            ],
            'task55' => [ //todo Задание 55
                'head' => 'Задание 55',
                'task' => "Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.",
                'func' => function() {
                    $str = 'var_test_text';

                    return lcfirst(ucwords(implode(' ', explode('_', $str))));
                }
            ],
            'task56' => [ //todo Задание 56
                'head' => 'Задание 56',
                'task' => "Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.",
                'func' => function() {
                    $str = '';
                    $arr = range(0, mt_rand(30, 50));

                    foreach($arr as $value) {
                        if(strpos($value, '3') !== false) {
                            $str .= $value . ' ';
                        }
                    }

                    return $str;
                }
            ],
            'task1.1' => [ //todo Задание 1.1
                'head' => 'Задание 1.1',
                'task' => "Создайте массив arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().",
                'func' => function() {
                    $arr=['a', 'b', 'c'];

                    return (implode(' ', $arr));
                }
            ],
            'task1.2' => [ //todo Задание 1.2
                'head' => 'Задание 1.2',
                'task' => "С помощью массива arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.",
                'func' => function() {
                    $arr=['a', 'b', 'c'];

                    return ($arr[1] . ' ' . $arr[2]);
                }
            ],
            'task1.3' => [ //todo Задание 1.3
                'head' => 'Задание 1.3',
                'task' => "Создайте массив arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.",
                'func' => function() {
                    $str = '';
                    $arr=['a', 'b', 'c', 'd'];

                    for($i = 0; $i < count($arr); $i += 2) {
                        $str .= $arr[$i] . '+' . $arr[$i+1] . ' ';
                    }

                    return $str;
                }
            ],
            'task1.4' => [ //todo Задание 1.4
                'head' => 'Задание 1.4',
                'task' => "Создайте массив arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной result. Выведите на экран значение этой переменной.",
                'func' => function() {
                    $result = 0;
                    $arr = [2, 5, 3, 9];

                    for ($i = 0; $i < count($arr); $i += 2) {
                        if($arr[$i+1]) {
                            $result += $arr[$i] * $arr[$i+1];
                        } else {
                            $result += $arr[$i];
                        }
                    }

                    return $result;
                }
            ],
            'task1.5' => [ //todo Задание 1.5
                'head' => 'Задание 1.5',
                'task' => "Заполните массив arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием arr[] = новое значение.",
                'func' => function() {
                    $arr = [];
                    $count = 5;

                    for($i = 0; $i < $count; $i++) {
                        $arr[] = $i+1;
                    }

                    return (implode(' ', $arr));
                }
            ],
            'task1.6' => [ //todo Задание 1.6
                'head' => 'Задание 1.6',
                'task' => "Создайте массив arr. Выведите на экран элемент с ключом 'c'.",
                'func' => function() {
                    $arr = [
                        'a'=>1,
                        'b'=>2,
                        'c'=>3
                    ];

                    return $arr['c'];
                }
            ],
            'task1.7' => [ //todo Задание 1.7
                'head' => 'Задание 1.7',
                'task' => "Создайте массив arr. Найдите сумму элементов этого массива.",
                'func' => function() {
                    $arr = [
                        'a'=>1,
                        'b'=>2,
                        'c'=>3
                    ];

                    return array_sum($arr);
                }
            ],
            'task1.8' => [ //todo Задание 1.8
                'head' => 'Задание 1.8',
                'task' => "Создайте массив заработных плат arr. Выведите на экран зарплату Пети и Коли.",
                'func' => function() {
                    $arr = [
                        'Коля'=>'1000$',
                        'Вася'=>'500$',
                        'Петя'=>'200$'
                    ];

                    $keys = array_keys($arr);

                    return $keys[0] . ' - ' . $arr[$keys[0]] . '<br>' . $keys[2] . ' - ' . $arr[$keys[2]];
                }
            ],
            'task1.9' => [ //todo Задание 1.9
                'head' => 'Задание 1.9',
                'task' => "Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.",
                'func' => function() {
                    $arr = [
                        '1' => 'Понедельник',
                        '2' => 'Вторник',
                        '3' => 'Среда',
                        '4' => 'Четверг',
                        '5' => 'Пятница',
                        '6' => 'Суббота',
                        '7' => 'Воскресенье'
                    ];

                    return ($arr[(int) date("N")]);
                }
            ],
            'task1.10' => [ //todo Задание 1.10
                'head' => 'Задание 1.10',
                'task' => "Пусть теперь номер дня недели хранится в переменной day, например там лежит число 3. Выведите день недели, соответствующий значению переменной day.",
                'func' => function() {
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

                    return $arr[$day];
                }
            ],
            'task1.11' => [ //todo Задание 1.11
                'head' => 'Задание 1.11',
                'task' => "Создайте многомерный массив arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.",
                'func' => function() {
                    $arr = [
                        'cms'=>['joomla', 'wordpress', 'drupal'],
                        'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
                    ];

                    return $arr['cms'][0] . ' ' . $arr['cms'][1] . ' ' . $arr['colors']['green'] . ' ' . $arr['colors']['red'];
                }
            ],
            'task1.12' => [ //todo Задание 1.12
                'head' => 'Задание 1.12',
                'task' => "Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).",
                'func' => function() {
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

                    return $arr['ru'][1] . ' ' . $arr['eu'][3];
                }
            ],
            'task1.13' => [ //todo Задание 1.13
                'head' => 'Задание 1.13',
                'task' => "Пусть теперь в переменной lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной day - номер дня. Выведите словом день недели, соответствующий переменным lang и day. То есть: если, к примеру, lang = 'ru' и day = 3 - то выведем 'среда'.",
                'func' => function() {
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

                    return $arr[$lang][$day];
                }
            ]
        ];

        return $tasks;
    }
}