<?php
/**
 * Виджет веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Widget\YandexShare\Settings;

use Gm\Panel\Helper\ExtCombo;
use Gm\Panel\Widget\SettingsWindow;

/**
 * Настройки виджета.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Widget\YandexShare\Settings
 * @since 1.0
 */
class Settings extends SettingsWindow
{
    /**
     * {@inheritdoc}
     * 
     * Т.к. виджет вызывает {@see \Gm\Backend\Marketplace\WidgetManager}, то
     * необходимо указать свой путь к ресурсам (иначе, URL-путь будет указан 
     * относительно менеджера).
     */
    public array $css = [
        '@module::/gm/gm.wd.yandexshare/assets/css/settings.css'
    ];

    /**
     * {@inheritdoc}
     */
    protected function init(): void
    {
        parent::init();

        $this->width = 870;
        $this->form->autoScroll = true;
        $this->form->items = [
            [
                'layout' => 'column',
                'items'  => [
                    [
                        'columnWidth'   => 0.3,
                        'defaults'      => [
                            'xtype'         => 'checkbox',
                            'ui'            => 'switch',
                            'labelClsExtra' => 'gm-yashare__label',
                            'labelAlign'    => 'right',
                            'labelWidth'    => 180,
                            'width' => 400
                        ],
                        'items' => [
                            [
                                'name'       => 'messenger',
                                'fieldLabel' => '<a target="_blank" href="https://yandex.ru/chat/#/"><span class="gm-yashare__icon-messenger"></span>' . $this->creator->t('Yandex.Messenger') . '</a>',
                            ],
                            [
                                'name'       => 'vkontakte',
                                'fieldLabel' => '<a target="_blank" href="https://vk.com/"><span class="gm-yashare__icon-vkontakte"></span>' . $this->creator->t('VKontakte') . '</a>',
                            ],
                            [
                                'name'       => 'odnoklassniki',
                                'fieldLabel' => '<a target="_blank" href="http://ok.ru/"><span class="gm-yashare__icon-odnoklassniki"></span>' . $this->creator->t('Odnoklassniki') . '</a>',
                            ],
                            [
                                'name'       => 'telegram',
                                'fieldLabel' => '<a target="_blank" href="https://telegram.org/"><span class="gm-yashare__icon-telegram"></span>Telegram</a>',
                            ],
                            [
                                'name'       => 'twitter',
                                'fieldLabel' => '<a target="_blank" href="http://twitter.com/"><span class="gm-yashare__icon-twitter"></span>Twitter</a>',
                            ],
                            [
                                'name'       => 'viber',
                                'fieldLabel' => '<a target="_blank" href="https://www.viber.com/ru/"><span class="gm-yashare__icon-viber"></span>Viber</a>',
                            ],
                            [
                                'name'       => 'whatsapp',
                                'fieldLabel' => '<a target="_blank" href="https://www.whatsapp.com/"><span class="gm-yashare__icon-whatsapp"></span>WhatsApp</a>',
                            ],
                            [
                                'name'       => 'moimir',
                                'fieldLabel' => '<a target="_blank" href="https://my.mail.ru/"><span class="gm-yashare__icon-moimir"></span>' . $this->creator->t('Moimir') . '</a>',
                            ],
                            [
                                'name'       => 'pinterest',
                                'fieldLabel' => '<a target="_blank" href="https://www.pinterest.com/"><span class="gm-yashare__icon-pinterest"></span>Pinterest</a>',
                            ],
                            [
                                'name'       => 'skype',
                                'fieldLabel' => '<a target="_blank" href="https://www.skype.com/"><span class="gm-yashare__icon-skype"></span>Skype</a>',
                            ],
                            [
                                'name'       => 'renren',
                                'fieldLabel' => '<a target="_blank" href="http://www.renren.com/"><span class="gm-yashare__icon-renren"></span>Renren</a>',
                            ], 
                            [
                                'name'       => 'sinaWeibo',
                                'fieldLabel' => '<a target="_blank" href="http://weibo.com/"><span class="gm-yashare__icon-sinaWeibo"></span>Sina Weibo</a>',
                            ]
                        ]
                    ],
                    [
                        'columnWidth' => 0.25,
                        'defaults'    => [
                            'xtype'         => 'checkbox',
                            'ui'            => 'switch',
                            'labelClsExtra' => 'gm-yashare__label',
                            'labelAlign'    => 'right',
                            'labelWidth'    => 150
                        ],
                        'items' => [
                            [
                                'name'       => 'tumblr',
                                'fieldLabel' => '<a target="_blank" href="https://www.tumblr.com/"><span class="gm-yashare__icon-tumblr"></span>Tumblr</a>',
                            ],
                            [
                                'name'       => 'evernote',
                                'fieldLabel' => '<a target="_blank" href="https://evernote.com/intl/ru/"><span class="gm-yashare__icon-evernote"></span>Evernote</a>',
                            ],
                            [
                                'name'       => 'linkedin',
                                'fieldLabel' => '<a target="_blank" href="https://www.linkedin.com/"><span class="gm-yashare__icon-linkedin"></span>LinkedIn</a>',
                            ],
                            [
                                'name'       => 'lj',
                                'fieldLabel' => '<a target="_blank" href="http://www.livejournal.com/"><span class="gm-yashare__icon-lj"></span>LiveJournal</a>',
                            ],
                            [
                                'name'       => 'blogger',
                                'fieldLabel' => '<a target="_blank" href="https://www.blogger.com/"><span class="gm-yashare__icon-blogger"></span>Blogger</a>',
                            ],
                            [
                                'name'       => 'delicious',
                                'fieldLabel' => '<a target="_blank" href="https://del.icio.us/"><span class="gm-yashare__icon-delicious"></span>Delicious</a>',
                            ],
                            [
                                'name'       => 'digg',
                                'fieldLabel' => '<a target="_blank" href="https://digg.com/"><span class="gm-yashare__icon-digg"></span>Digg</a>',
                            ],
                            [
                                'name'       => 'reddit',
                                'fieldLabel' => '<a target="_blank" href="https://www.reddit.com/"><span class="gm-yashare__icon-reddit"></span>Reddit</a>',
                            ],
                            [
                                'name'       => 'pocket',
                                'fieldLabel' => '<a target="_blank" href="https://getpocket.com/"><span class="gm-yashare__icon-pocket"></span>Pocket</a>',
                            ],
                            [
                                'name'       => 'qzone',
                                'fieldLabel' => '<a target="_blank" href="http://qzone.qq.com/"><span class="gm-yashare__icon-qzone"></span>Qzone</a>',
                            ],  
                            [
                                'name'       => 'surfingbird',
                                'fieldLabel' => '<a target="_blank" href="https://surfingbird.ru/"><span class="gm-yashare__icon-surfingbird"></span>Surfingbird</a>',
                            ],
                            [
                                'name'       => 'tencentWeibo',
                                'fieldLabel' => '<a target="_blank" href="https://weibo.com/tencent"><span class="gm-yashare__icon-tencentWeibo"></span>Tencent Weibo</a>',
                            ]
                        ]
                    ],
                    [
                        'padding'     => 10,
                        'columnWidth' => 0.45,
                        'defaults'    => [
                            'labelAlign' => 'right',
                            'labelWidth' => 200,
                            'width'      => '100%'
                        ],
                        'items' => [
                            ExtCombo::local(
                                $this->creator->t('Button color scheme'), 'color', 
                                [
                                    ['', $this->creator->t('Classic')], 
                                    ['whiteblack', $this->creator->t('Monochrome')], 
                                    ['blackwhite', $this->creator->t('Monochrome 2')]
                                ],
                                [
                                    'tooltip' => $this->creator->t('Social media button color scheme'),
                                    'value'   => ''
                                ]
                            ),
                            ExtCombo::local(
                                $this->creator->t('Button size'), 'size', 
                                [
                                    ['s', 'S'],  ['', 'M'],  ['l', 'L']
                                ],
                                [
                                    'tooltip' => $this->creator->t('Social media button size'),
                                    'value'   => ''
                                ]
                            ),
                            ExtCombo::local(
                                $this->creator->t('Button shape'), 'shape', 
                                [
                                    ['', $this->creator->t('Square')], 
                                    ['round', $this->creator->t('Round')]
                                ],
                                [
                                    'tooltip' => $this->creator->t('Form of social media buttons'),
                                    'value'   => ''
                                ]
                            ),
                            [
                                'xtype'      => 'textfield',
                                'name'       => 'limit',
                                'fieldLabel' => $this->creator->t('Button limit'),
                                'tooltip'    => $this->creator->t('The number of social networks displayed as buttons'),
                                'value'      => ''
                            ],
                            ExtCombo::local(
                                $this->creator->t('Position in the article'), 'position', 
                                [
                                    ['before', $this->creator->t('Before the article text')], 
                                    ['after', $this->creator->t('After the article text')]
                                ],
                                ['value' => 'before']
                            ),
                            ExtCombo::local(
                                $this->creator->t('List alignment'), 'align', 
                                [
                                    ['left', $this->creator->t('Left')], 
                                    ['right', $this->creator->t('Right')]
                                ],
                                ['value' => 'left']
                            ),
                            ExtCombo::local(
                                $this->creator->t('Menu opening direction'), 'popupDirection', 
                                [
                                    ['', $this->creator->t('Auto')], 
                                    ['bottom ', $this->creator->t('Bottom')], 
                                    ['top', $this->creator->t('Top')]
                                ],
                                [
                                    'value'   => '',
                                    'tooltip' => $this->creator->t('Menu opening direction: auto - down by default; if it doesn’t fit down, then up; if it doesn’t fit either down or up, then down')
                                ]
                            ),
                            ExtCombo::local(
                                $this->creator->t('Menu location'), 'popupPosition', 
                                [
                                    ['', $this->creator->t('Inner')], 
                                    ['outer ', $this->creator->t('Outer')], 
                                ],
                                [
                                    'value'   => '',
                                    'tooltip' => $this->creator->t('The location of the menu relative to the block container. The outer value may be needed if, due to the specific layout of your site, the pop-up is cut off by adjacent page elements.')
                                ]
                            ),
                            ExtCombo::local(
                                $this->creator->t('Button list direction'), 'direction', 
                                [
                                    ['', $this->creator->t('Horizontal')], 
                                    ['vertical', $this->creator->t('Vertical')]
                                ],
                                ['value' => '']
                            ),
                        ]
                    ]
                ]
            ],

       ];
    }
}