<div id="sidebar" class="col-right">
        <!--Search Box-->
              <!--Search Box-->
      <div id="search">
        <form method="post" id="searchform" action="<?php bloginfo('home'); ?>/">
          <div>
            <input type="text" name="s" id="s" value="<?php echo $search_text; ?>" />
            <input type="image" src="<?php bloginfo('template_url'); ?>/images/search_button.png" name="button" id="button" value="Поиск" />
          </div>
        </form>
      </div>
<div class="fix"></div>
      <!--End of Search Box-->
      <div id="tabs" class="block">  
    			    <div class="custom_images" style="text-align:margin: 0 10px;">
                    <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/rss.png" width="32" height="32" alt="RSS" /></a>
    			            <a class="addthis_button_twitter"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/twitter.png" width="32" height="32" alt="Twitter" /></a>
    			            <a class="addthis_button_delicious"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/delicious.png" width="32" height="32" alt="Delicious" /></a>
    			            <a class="addthis_button_facebook"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/facebook.png" width="32" height="32" alt="Facebook" /></a>
    			            <a class="addthis_button_digg"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/digg.png" width="32" height="32" alt="Digg" /></a>
    			            <a class="addthis_button_stumbleupon"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/stumbleupon.png" width="32" height="32" alt="Stumbleupon" /></a>
    			            <a class="addthis_button_favorites"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/favorites.png" width="32" height="32" alt="Favorites" /></a>
    			            <a class="addthis_button_more"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/more.png" width="32" height="32" alt="More" /></a>
    			    </div>
                    </div>
    			    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4a65e1d93cd75e94"></script>

        <!-- TABS STARTS -->
    
     <?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
                    
       <div  class="block tabsid">       
          <h2>Свежие записи</h2>                   
       
        <ul class="inside" id="comm" style="display: block; ">          
          <?php wp_get_archives('type=postbypost&limit=10'); ?>                  
        </ul>        
      </div>
      
      
      <div id="tabs" class="block">       
          <h2>Архив</h2>                   
       
        <ul class="inside" id="comm" style="display: block; ">          
          <?php wp_get_archives('type=monthly'); ?>                  
        </ul>        
      </div>
      
      
      
      <div id="tabs" class="block">       
          <h2>Мета</h2>                   
       
        <ul class="inside" id="comm" style="display: block; ">          
          <?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://www.wordpress.org/">WordPress</a></li>
				<?php wp_meta(); ?>
				<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>                
        </ul>        
      </div>
        <?php endif; ?>
        <!-- TABS ENDS -->
        
        </div>
      </div>
    </div>