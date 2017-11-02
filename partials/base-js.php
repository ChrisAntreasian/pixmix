<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/cufon.js"></script>
<script type="text/javascript" src="js/Aller_400-Aller_700.font.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

<script type="text/javascript">
    $(function() {
        var mq = window.matchMedia( "(max-width: 48em)" );
        if (mq.matches) {
           $('.project-image a').removeAttr('rel').attr('target','_blank'); 
        }

        $('#mobile__menu-btn').click(function(e) {
            if ($(this).hasClass('active')) {
                $('body').removeClass('frozen');
                $('#navigation').removeClass('active');
                $(this).removeClass('active');
                return;
            }
            $('body').addClass('frozen');
            $('#navigation').addClass('active');
            $(this).addClass('active');
        });
        $('.m-home__primary h2').click(function(e) {
            $('.m-home__primary h2').removeClass('active');
            $('.m-home__secondary').removeClass('active');
            if ($(this).hasClass('active')) {
                console.log($(this))
                return;
            }
            $(this).siblings('.m-home__secondary').addClass('active');
            $(this).addClass('active');
        });

        $('#thumbs2 a').click(function(e) {
            e.preventDefault();
            console.log('im clicked')
        });
    });

</script>