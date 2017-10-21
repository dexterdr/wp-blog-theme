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

<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
<?php wp_footer(); ?>

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
            var offset = 200;

            if ($(document).scrollTop() > ($(document).height() - $(window).height() - offset) &&
                $('nav.next').length && !$('body').hasClass('loading')) {
                $('nav.next a.btn').trigger('click');
            }
        });
    });
</script>
</body>
</html>