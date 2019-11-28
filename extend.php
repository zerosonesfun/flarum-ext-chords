<?php

/*
 * Chords is a Flarum extension created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/zerosonesfun-chords/styles.css">';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[chord]{TEXT1}[/chord]',
                '<span class="chord">{TEXT1}</span>'
            );
            $config->BBCodes->addCustom(
                '[song]{TEXT2}[/song]',
                '<p class="song show-chords">{TEXT2}</p>'
            );
        })
];
