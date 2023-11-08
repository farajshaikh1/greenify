<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    setInterval(function() {
        check_user();
    }, 8000);

    function check_user() {
        jQuery.ajax({
            url: 'user_auth.php',
            type: 'post',
            data: 'type=ajax',
            success: function(data) {
                if (data == 'logout') {
                    alert('Session Timeout !!')
                    window.location.href = 'logout.php';
                }
            }

        });
    }
</script>