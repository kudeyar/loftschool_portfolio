</wrapper>
</div>
<footer>
    <div class="fline"></div>
    © 2014, Это мой сайт, пожалуйста, не копируйте и не воруйте его
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>

</body>
</html>


<script>
    $(document).ready(function () {
        var link = window.location.pathname;
        $('#navigation li a[href="' + link + '"]').parent().addClass('active');
        if (link === '/')
            $('.line_1').removeClass();
        if (link === '/works') {
            $('.line_2').removeClass();
            $('.line_1').removeClass();
        }
        if (link === '/contacts')
            $('.line_2').removeClass();
    });
</script>