    <footer class="row no-gutters navbar-dark">
        <div class="col">
            &copy; Copyright <?php echo date('Y'); ?>
            <a href="/">cosmology.pro</a>
        </div>
        <div class="col text-right">
            Powered by <a href="mailto:dexter.gm@gmail.com">Dexter</a>
        </div>
    </footer>
</div><!-- /.container -->

<?php wp_footer(); ?>

<?php if (is_single()) { ?>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=59f5ac5430317e001239282e&product=inline-share-buttons' async='async'></script>

    <script>
        var dsLoaded = false;
        var dsDiv = $('#disqus_thread');

        function loadDisqus() {
            var top = dsDiv.offset().top - 100;

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
    </script>
<?php } else if (is_category() || is_front_page() || is_home() || is_tag()) { ?>
    <script>
        $(document).ready(function() {
            $('nav.next a.btn').click(function(event) {
                event.preventDefault();
                if ($('body').hasClass('loading')) { return false; }

                var data = {
                    'action': 'loadmore',
                    'query': true_posts,
                    'page' : current_page
                };

                $.ajax({
                    url: ajaxurl,
                    data: data,
                    type: 'POST',
                    beforeSend: function(xhr) {
                        $(this).text('Загружаю...');
                        $('body').addClass('loading');
                    },
                    success: function(data) {
                        $('body').removeClass('loading');
                        if (data) {
                            $('nav.next a.btn').text('Загрузить ещё');
                            $('main.card-columns').append(data);
                            current_page++;
                            if (current_page == max_pages) {
                                $('nav.next').remove();
                            }
                        } else {
                            $('nav.next').remove();
                        }
                    }
                });
            });

            $(window).scroll(function() {
                var offset = 500;

                if ($(document).scrollTop() > ($(document).height() - $(window).height() - offset)
                    && $('nav.next').length && !$('body').hasClass('loading')) {
                    $('nav.next a.btn').trigger('click');
                }
            });
        });
    </script>
<?php } ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108904791-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-108904791-1');
</script>

</body>
</html>