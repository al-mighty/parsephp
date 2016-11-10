<?
include_once('lib/sql.php');
include_once('lib/curl_query.php');
include_once('lib/simple_html_dom.php');

// Обращение к файлу для получения конента

// +- со сложными заголовками проблемы
$html = file_get_contents('http://ntschool.ru/courses');

echo $html;