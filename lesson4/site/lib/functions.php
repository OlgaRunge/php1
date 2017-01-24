<?php
//Константы ошибок
define('ERROR_NOT_FOUND', 1);
define('ERROR_TEMPLATE_EMPTY', 2);
/**
 * @param $layoutName
 * @param $title
 * @param $body
 * @return string
 */
function layout($layoutName, $title, $body)
{
    return render($layoutName, [ //через render указываем путь до layout
        "title" => $title,
        "body" => $body
    ]);
}
/**
 * Подключает наш файл шаблона с параметрами
 * @param $file
 * @param array $variables
 * @return string
 */
function render($file, $variables = [])
{
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found';
        exit(ERROR_NOT_FOUND);
    }
    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty';
        exit(ERROR_TEMPLATE_EMPTY);
    }
    /**
     * Старт буферизованного вывода
     */
    ob_start(); //сохраняет все данные во внутреннем буфере, который потом отдаем клиенту
    extract($variables); //ф-я импортирует переменные в текущую таблицу символов
    include $file; //подключаем шаблон
    return ob_get_clean(); //возвращаем наш буфер
}
/**
 * renderPage по route и параметрам должен подключить нужную страничку
 * @param $route
 * @param $params
 */
function renderPage($route, $params) //$route то, что мы хотим запросить, $params - то, что в новостную ленту передается
{
    echo layout(
        LAYOUT,
        TITLE,
        render( //body, рендерим по нашему роуту нужный template (file)
            TPL_DIR . DIRECTORY_SEPARATOR . $route . ".php",
            $params
        )
    );
}
$GOODS = [
    'Корма' => [
        "Сверчки", "Гусеницы", "Саранча"
    ],
    'Террариумы' => [
        "Большие", "Маленькие"
    ],
    'Обогрев' => [
        "Коврики","Термошнуры"
    ]
];

$goods = isset($_GET['id']) ? $_GET['id'] : null;
foreach ($GOODS as $href => $item) {
    if (isset($_GET['id']) && $href == $goods) {
        echo "<p>{$href}</p>";
    } else
        echo "<p><a href='?{$href}'>{$href}</a></p>";
}
