<div id="footer-out">
  <div id="footer" class="wrap">
   <?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
    <div class="widget block"> 
        <h2>Блогролл</h2>
         <ul>
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
       
          <div class="fix"></div>
        </div>
        
    <div class="widget block">
       <h2>Свежие записи</h2>
        <ul>
          <li> <?php wp_get_archives('type=postbypost&limit=10'); ?></li>
          
        </ul> 
        <div class="fix"></div>
    </div>
    
    <div class="widget block last">
      
        
         
          <?php get_calendar(); ?>
          <div class="fix"></div> 
         </div>
         <?php endif; ?> 
  </div>
</div>