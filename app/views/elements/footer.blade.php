<footer id="main-footer">

    <div class="container text-center">

        <img class="img-responsive img-center footer-logo" src="/images/logo-black.png" alt="" />

        <ul class="social-links">
            <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
        </ul>
        <p>&copy;2014 Quattro Theme by <a href="https://wrapbootstrap.com/user/qthemes" target="_blank">Qthemes</a></p>

    </div>

</footer>

<!-- ==============================================
SCRIPTS
=============================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('{{ Minify::javascriptDir('/js/jquery/') }}')</script>

{{ Minify::javascriptDir('/js/bootstrap/') }}
{{ Minify::javascriptDir('/js/jqueryPlugins/') }}
{{ Minify::javascriptDir('/js/plugins/') }}
{{ Minify::javascriptDir('/js/quatro/') }}