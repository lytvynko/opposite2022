<?php get_header(); ?>
<div id="middle-out">
  <div id="middle" class="wrap">
    <div id="content" class="col-left"> <!-- Tab panel -->
     
      
<!-- End Tab pabel -->
     <div id="latest" class="col-left" style="width:auto;">
       <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a day archive */ if (is_day()) { ?>
    <h2 class="arh">Архив за
      <?php the_time('d M Y'); ?>
    </h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 class="arh">Архив за
      <?php the_time('F Y'); ?>
    </h2>
     <?php /* If this is a category archive */ } elseif (is_category()) { ?>
    <h2 class="arh">Архив категории 
    "<?php single_cat_title(); ?>"
    </h2>
   
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="arh">Архив за
      <?php the_time('Y'); ?>
    </h2>
    <?php /* If this is a search */ } elseif (is_search()) { ?>
    <h2 class="arh">Результаты поиска</h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="arh">Архив автора</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h2 class="arh">Архив блога</h2>
      <?php } ?>  
       
   
		<?php while (have_posts()) : the_post(); ?>
         
        <div class="post wrap">           <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         <p><strong> <?php the_time('d M Y') ?></strong> </p><br />     
         
          <?php the_content('<strong>Читать полностью &raquo;</strong>'); ?> 
          
          <div class="event_info"> 
           
          <p><img src="<?php bloginfo('template_url'); ?>/images/ico_cat.png" alt="" /> <strong>Опубликовано в:</strong> <?php the_category(', '); ?></p> |  
          <p><img src="<?php bloginfo('template_url'); ?>/images/ico_comment.png" alt="" /><?php comments_popup_link('Нет комментариев','1 комментарий','Комментарии(%)'); ?></p>
          
          </div>
          
          
          
          
          </div>
        
   <?php endwhile; ?>
   <div class="navigation">
            <?php next_posts_link(__('&laquo; Предыдущая страница', 'Theme_Name')) ?>
            <?php previous_posts_link(__('Следующая страница &raquo;', 'Theme_Name')) ?>
        </div>
		
	<?php else : ?>
	    <?php include(TEMPLATEPATH."/404.php");?>
      	<?php endif; ?>
        
         </div>
        <!--End of Homepage News -->
        <!--Start of Other News-->
        
      
      <!--End of Other News-->
        <!--Latest Multimedia-->
      
      <!--End of Latest Multimedia--> </div>
     <?php get_sidebar(); ?>
      <!-- TABS ENDS -->
        <!-- ADVERT STARTS -->

<!-- FOOTER STARTS -->
<?php get_sidebar('bottom'); ?>
<!-- FOOTER ENDS -->
<!-- COPYRIGHT STARTS -->
<?php get_footer();?>
<!-- COPYRIGHT ENDS -->



</body>
</html>