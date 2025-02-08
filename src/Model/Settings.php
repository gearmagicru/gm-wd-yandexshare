<?php
/**
 * Виджет веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Widget\YandexShare\Model;

use Gm\Panel\Data\Model\WidgetSettingsModel;

/**
 * Модель настроек виджета.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Widget\YandexShare\Model
 * @since 1.0
 */
class Settings extends WidgetSettingsModel
{
    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'odnoklassniki' => 'odnoklassniki',
            'surfingbird'   => 'surfingbird',
            'messenger' => 'messenger',
            'vkontakte' => 'vkontakte',
            'blogger'   => 'blogger',
            'delicious' => 'delicious',
            'digg'      => 'digg',
            'evernote'  => 'evernote',
            'linkedin'  => 'linkedin',
            'lj'        => 'lj',
            'moimir'    => 'moimir',
            'pinterest' => 'pinterest',
            'pocket'    => 'pocket',
            'qzone'     => 'qzone',
            'reddit'    => 'reddit',
            'renren'    => 'renren',
            'sinaWeibo' => 'sinaWeibo',
            'skype'     => 'skype',
            'telegram'  => 'telegram',
            'tumblr'    => 'tumblr',
            'twitter'   => 'twitter',
            'viber'     => 'viber',
            'whatsapp'  => 'whatsapp',
            'color'     => 'color', // цветовая схема кнопок
            'size'      => 'size', // размер кнопок
            'shape'     => 'shape', // форма кнопок
            'limit'     => 'limit', // лимит кнопок
            'position'  => 'position', // положение в статье 
            'align'     => 'align', // выравнивание кнопок в списке
            'popupDirection' => 'popupDirection', // направление открытия меню
            'popupPosition'  => 'popupPosition', // расположение меню
            'direction'      => 'direction', // направление списка кнопок
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'odnoklassniki' => 'Classmates',
            'surfingbird'   => 'SurfingBird',
            'messenger'  => 'Yandex.Messenger',
            'vkontakte'  => 'VKontakte',
            'blogger'    => 'Blogger',
            'delicious'  => 'Delicious',
            'digg'       => 'Digg',
            'evernote'   => 'Evernote',
            'linkedin'   => 'LinkedIn',
            'lj'         => 'LiveJournal',
            'moimir'     => 'Moimir',
            'pinterest'  => 'Pinterest',
            'pocket'     => 'Pocket',
            'qzone'      => 'QZone',
            'reddit'     => 'Reddit',
            'renren'     => 'Renren',
            'sinaWeibo'  => 'SinaWeibo',
            'skype'      => 'Skype',
            'telegram'   => 'Telegram',
            'tumblr'     => 'Tumblr',
            'twitter'    => 'Twitter',
            'viber'      => 'Viber',
            'whatsapp'   => 'WhatsApp',
            'color'     => 'Button color scheme', // цветовая схема кнопок
            'size'      => 'Button size', // размер кнопок
            'shape'     => 'Button shape', // форма кнопок
            'limit'     => 'Button limit', // лимит кнопок
            'position'  => 'Position in the article', // положение в статье 
            'align'     => 'List alignment', // выравнивание кнопок в списке
            'popupDirection' => 'Menu opening direction', // направление открытия меню
            'popupPosition'  => 'Menu location', // расположение меню
            'direction'      => 'Button list direction' // направление списка кнопок
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function formatterRules(): array
    {
        return [
            [['blogger', 'delicious', 'digg', 'evernote', 'messenger', 'linkedin', 'lj', 
            'moimir', 'odnoklassniki', 'pinterest', 'pocket', 'qzone', 'reddit', 'renren', 
            'sinaWeibo', 'skype', 'surfingbird', 'telegram', 'tumblr', 'twitter', 'viber',
            'vkontakte', 'whatsapp'], 'logic' => [true, false]]
        ];
    }
}