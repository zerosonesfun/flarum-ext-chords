<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
    ->configure(function (Configurator $config) {
        $config->BBCodes->addCustom(
        '[chord]{TEXT1}[/chord]',
        '<span class="chord">{TEXT1}</span>'
        );
        $config->BBCodes->addCustom(
        '[song]{TEXT2}[/song]',
        '<p class="song show-chords">{TEXT2}</p>'
        );
    });
