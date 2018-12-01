<?php

use Flarum\Extend;

return [
(new Extend\Frontend('forum'))
    ->js(__DIR__.'/assets/extensions/zerosonesfun-chords/scripts.js')
    ->css(__DIR__.'/assets/extensions/zerosonesfun-chords/styles.css')
];
