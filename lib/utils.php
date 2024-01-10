<?php

namespace Bitrix\Cleanmodule;

// Подключаю свой класс, который просто выводит 123456
class Utils {

    // Простая функция, которая выводит 123456
    static function zagcifra() {
        echo 123456;
    }

    /* Для проверки вывожу потом, где-нибудь на странице
    
    if(\Bitrix\Main\Loader::includeModule('cleanmodule')) {
	    Bitrix\Cleanmodule\Utils::zagcifra();
    }

    */
}

