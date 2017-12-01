var dsLoaded = false;
var dsDiv = $('#disqus_thread');

function loadDisqus() {
    var top = dsDiv.offset().top - 300;

    if (!dsLoaded && $(window).scrollTop() + $(window).height() > top) {
        dsLoaded = true;

        var d = document, s = d.createElement('script');
        s.src = 'https://cosmology-pro.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    }
}

$(document).ready(function() {
    if (dsDiv.length > 0) {
        $(window).scroll(loadDisqus);
    }
});

$(window).on('load', function() {
    $('.grid').masonry({
        'itemSelector': '.grid-item',
        'percentPosition': true
    });
});
