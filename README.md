# flarum-ext-chords

Post basic sheet music on your Flarum. Beta 8+ compatible.

## Install

`composer require zerosonesfun/flarum-ext-chords`

## Upgrade

`composer update zerosonesfun/flarum-ext-chords`

## Usage

This extension looks for specific tags and converts them to the code needed so that your sheet music chords are above the lyrics. There is a parent tag which wraps your entire song (lyrics and chords) and then a tag to tell the extension where the actual chords are.

Parent tags = `{songbegin} Lyrics and chords here {songend}`
Chord tags = `{{G}}` (Simply wrap each chord in double curly brackets)

Example of what you would type into a new post:
~~~
{songbegin}

These {{G}}are lyrics to a {{C}}song.

{songend}
~~~

## Customize

Change the look of your sheet music by going to assets > extensions > zerosonesfun-chords > styles.css and modify the stylesheet.
