<?php
/**
 * Этот файл является частью виджета веб-приложения GearMagic.
 * 
 * Файл конфигурации установки виджета.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'use'         => FRONTEND,
    'id'          => 'gm.wd.yandexshare',
    'category'    => 'widget',
    'name'        => 'Yandex Share',
    'description' => 'Yandex Share',
    'namespace'   => 'Gm\Widget\YandexShare',
    'path'        => '/gm/gm.wd.yandexshare',
    'locales'     => ['ru_RU', 'en_GB'],
    'events'      => ['article:onRender'],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'GM CMS']
    ]
];
