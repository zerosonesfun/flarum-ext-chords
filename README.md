# flarum-ext-chords

Post basic sheet music on your Flarum. Beta 8+ compatible.

## Install

`composer require zerosonesfun/flarum-ext-chords`

## Upgrade

`composer update zerosonesfun/flarum-ext-chords`
`php flarum cache:clear`
...and you might need to clear your browser cache and cookies too. Are you using cloudflare? Empty that too.

## Usage

This extension looks for specific bbcode tags and converts them to the code needed so that your sheet music chords are above the lyrics. Wrap the entire song in [song] [/song] and then where you want a chord, use [chord] [/chord]

Example of what you would type into a new post:
~~~
[song]

These [chord]G[/chord]are lyrics to a [chord]C[/chord] song.

[/song]
~~~

## Customize

Change the look of your sheet music by going to assets > extensions > zerosonesfun-chords > styles.css and modify the stylesheet.
