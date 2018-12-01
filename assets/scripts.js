document.body.innerHTML = document.body.innerHTML.replace(/{songbegin}/g, '<p class="song show-chords">');

document.body.innerHTML = document.body.innerHTML.replace(/{songend}/g, '</p>');

document.body.innerHTML = document.body.innerHTML.replace(/{{/g, '<span class="chord">');

document.body.innerHTML = document.body.innerHTML.replace(/}}/g, '</span>');
