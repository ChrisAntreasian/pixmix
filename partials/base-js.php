<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/cufon.js"></script>
<script type="text/javascript" src="js/Aller_400-Aller_700.font.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

<script type="text/javascript">
    $(function() {
        $('#mobile__menu-btn').click(function(e) {
            if ($(this).hasClass('active')) {
                $('#navigation').removeClass('active');
                $(this).removeClass('active');
                return;
            }
            $('#navigation').addClass('active');
            $(this).addClass('active');
        });
    });
</script>