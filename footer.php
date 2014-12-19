        </div>    
    </div>
</div>
<footer>
    <div class="fline"></div>
    <p>© 2014, Это мой сайт, пожалуйста, не копируйте и не воруйте его</p>
</footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/ajaxupload.js"></script>
<script src="js/main.js"></script>

</body>
</html>


<script>
    $(document).ready(function () {
        var link = window.location.pathname;
        $('#navigation li a[href="' + link + '"]').parent().addClass('active');
    });
</script>