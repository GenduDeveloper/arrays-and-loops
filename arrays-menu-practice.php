<?php

/* Создайте переменную $menu и сохраните в ней массив, в котором будет содержаться информация для меню сайта.
 При помощи функции file_get_contents прочитайте шаблон html из файла index.html.
 Реализуйте вывод меню при помощи foreach из данных, сохраненных в переменной $menu. */

$html = file_get_contents('practice.html'); // подключаем html-шаблон

$menu = [
    [
        'title' => 'Главная',
        'url' => 'https://clck.ru/38kSzh'
    ],
    [
        'title' => 'Новости',
        'url' => 'https://clck.ru/38kT2r'
    ],
    [
        'title' => 'Контакты',
        'url' => 'https://clck.ru/38kT4Z'
    ],
    [
        'title' => 'Справка',
        'url' => 'https://clck.ru/38kT6R'
    ]
]; // создаем массив с содержанием меню и ссылками



$menuHtml = '';
foreach ($menu as $item) {
    $menuHtml .= "<div><a href='" . $item['url'] . "'><span>" . $item['title'] . "</div></a></span>";
}

$html = str_replace('{MENU}', $menuHtml, $html);
echo $html;









