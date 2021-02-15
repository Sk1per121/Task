<!doctype html>
<?php include "php/methods.php"; ?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>PHP</title>

</head>
<body>
    <div class="container">
        <?php
            $test = new test();
            $tasks = $test -> methods();
            $context = '';

            foreach ($tasks as $value) {

                $context .= "<div class='block'>";

                $context .= "<span class='head'>" . $value['head'] . "</span>";
                $context .= "<span class='text'>" . $value['task'] . "</span>";
                $context .= "<div class='result'>" . $value['func']() . "</div>";

                $context .= "</div>";

            }

            echo $context;
        ?>
    </div>
</body>
</html>