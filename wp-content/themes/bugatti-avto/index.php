<?php get_header(); ?>
<div id="middle-out">
  <div id="middle" class="wrap">
    <div id="content" class="col-left"> <!-- Tab panel -->
     
      
<!-- End Tab pabel -->
     <div id="latest" class="col-left" style="width:auto;">
        
       
   <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <div <?php post_class(); ?> id="post-<?php the_ID() ?>">
        <div class="post wrap">           <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         <p><strong> <?php the_time('d M Y') ?></strong> </p><br />     
         
          <?php the_content('<strong>Читать полностью &raquo;</strong>'); ?> 
          
          <div class="event_info"> 
           
          <p><img src="<?php bloginfo('template_url'); ?>/images/ico_cat.png" alt="" /> <strong>Опубликовано в:</strong> <?php the_category(', '); ?></p> |  
          <p><img src="<?php bloginfo('template_url'); ?>/images/ico_comment.png" alt="" /><?php comments_popup_link('Нет комментариев','1 комментарий','Комментарии(%)'); ?></p>
          
          </div>
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