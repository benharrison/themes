        <div class="container">
            <footer>
                &copy; 2009-<?php echo date("Y"); echo " "; echo bloginfo("name"); ?><br />
            </footer>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php theme_url('js/jquery-1.8.1.min.js'); ?>"><\/script>')</script>

        <script src="<?php theme_url('js/yepnope.1.5.4-min.js') ?>"></script>
        <script>
            yepnope({
                test : Modernizr.mq('(min-width: 0px)'),
                nope : ["<?php theme_url('js/respond.min.js') ?>"]
            });
        </script>
        
        <script>
            $(document).ready(function(){
                // synchronizing content and sidebar height
                // --------------------------------------------------
                var matchColumnHeights = function(){
                    $('#content').css('min-height', 0);
                    $('#sidebar').css('min-height', 0);
                    if ( $(window).width() >= 960 )
                    {
                        $('#content').css('min-height', $('#sidebar').height());
                        $('#sidebar').css('min-height', $('#content').height());
                    }
                };
                
                $(window).resize(function(){ matchColumnHeights(); });
                matchColumnHeights();

                // recipes
                // --------------------------------------------------
                $('.bmgb_recipe').find('h3').find('a').bind('click', function(){
                    $('#content').height('auto');
                    $('#bmgb_recipe_' + $(this).data('id')).slideToggle(200, matchColumnHeights);
                    return false;
                });
                
                // blog post image cleanup
                // --------------------------------------------------
                $('article').find('img').removeAttr('width').removeAttr('height');
            });
        </script>
        
        <script>
            var _gaq=[['_setAccount','UA-9434851-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
