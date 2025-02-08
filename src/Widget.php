<?php
/**
 * Виджет веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Widget\YandexShare;

use Gm;
use Gm\Helper\Html;
use Gm\View\ClientScript;
use Gm\View\WidgetResourceTrait;

/**
 * Виджет "Блок Яндекс "Поделиться".
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Widget\YandexShare
 * @since 1.0
 */
class Widget extends \Gm\View\BaseWidget
{
    use WidgetResourceTrait;

    /**
     * Список поддерживаемых соцсетей.
     *
     * @var array
     */
    protected array $services = [
        'blogger', 'delicious', 'digg', 'evernote', 'messenger', 'linkedin', 'lj', 
        'moimir', 'odnoklassniki', 'pinterest', 'pocket', 'qzone', 'reddit', 'renren', 
        'sinaWeibo', 'skype', 'surfingbird', 'telegram', 'tumblr', 'twitter', 'viber',
        'vkontakte', 'whatsapp'
    ];

    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        // событие перед выводом статьи в шаблон (виджет gm.wd.article)
        $this->on('article:onRender', function ($article) {
            /** @var \Gm\Config\Config $settings  */
            $settings = $this->getSettings();

            $content = $this->getContainer();
            // положение в статье
            if ($article) {
                if ($settings->position === 'before')
                    $article->addTextBefore($content);
                else
                    $article->addTextAfter($content);
            }
            Gm::$app->clientScript
                ->registerJsFile('https://yastatic.net/share2/share.js', null, ClientScript::POS_END, ['defer' => true]);
        });
    }

    /**
     * Возвращает контейнер значков.
     *
     * @return string
     */
    protected function getContainer(): string
    {
        /** @var \Gm\Config\Config $settings  */
        $settings = $this->getSettings();
        $attributes = ['class' => 'ya-share2'];

        // поддерживаемые соцсети
        $dataServices = [];
        foreach ($this->services as $service) {
            if ($settings->{$service}) {
                $dataServices[] = $service;
            }
        }
        $attributes['data-services'] = implode(',', $dataServices);

        // размер кнопок
        if ($settings->size) {
            $attributes['data-size'] = $settings->size;
        }

        // форма кнопок
        if ($settings->shape) {
            $attributes['data-shape'] = $settings->shape;
        }

        // цветовая схема кнопок
        if ($settings->color) {
            $attributes['data-color-scheme'] = $settings->color;
        }

        // лимит кнопок
        if ($settings->limit) {
            $attributes['data-limit'] = $settings->limit;
        }

        // направление списка кнопок
        if ($settings->direction) {
            $attributes['data-direction'] = $settings->direction;
        }

        // направление открытия меню
        if ($settings->popupDirection && $settings->popupDirection !== 'auto') {
            $attributes['data-popup-direction'] = $settings->popupDirection;
        }

        // расположение меню
        if ($settings->popupPosition) {
            $attributes['data-popup-position'] = $settings->popupPosition;
        }

        // выравнивание кнопок в списке
        if ($settings->align === 'right') {
            $attributes['style'] = 'text-align:right';
        }
        return Html::tag('div', '', $attributes) . "\r\n";
    }
}