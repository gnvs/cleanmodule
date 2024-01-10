<?php

// Для языковых файлов
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

// Добавляю основной пункт меню для модуля в раздел Сервисы

$menu = array(
    "parent_menu" => "global_menu_services",
    "sort" => 10,
    "text" => "Название модуля",
    "items_id" => "menu_cleanmodule",
    "icon" => "form_menu_icon", // подключаю иконку, из стандартной библиотеки Битрикс
    "items" => array(
        array(
            "text" => "Управление модулем",
            "url" => "settings.php?lang=ru&mid=cleanmodule",
        ),        
    )
);

// возвращаю массив $menu

return $menu;
