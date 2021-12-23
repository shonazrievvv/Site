<?php

/* 
 * Задача 5: SELECT + PHP
 * Вывести список всех новостей со статусом "1" в виде списка:
 * <h1>Заголовок</h1>
 * <p>Короткое описание</p>
 * <a href="/news/view/ИДЕНТИФИКАТОР">Читать далее</a>
 */

// Соединение с БД
$connection = mysqli_connect('localhost', 'root', '', 'php');
mysqli_set_charset($connection, 'utf8');
// Вывод ошибки (если произошла)
if(mysqli_connect_errno())
    echo mysqli_connect_error();


$query = 'SELECT id, h1, short_content FROM news WHERE status="1";';
$result = mysqli_query($connection, $query);

$newslist = '';
while($news = mysqli_fetch_array($result))
{
    $newslist .=  '<h1>'.$news['h1'].'</h1>'
                . '<p>'.$news['short_content'].'</p>'
                . '<a href="/news/view/'.$news['id'].'">Читать далее</a>';
}

echo $newslist;












