<?php get_header(); ?>
<div id="middle-out">
  <div id="middle" class="wrap">
    <div id="content" class="col-left"> <!-- Tab panel -->
     
      
<!-- End Tab pabel -->
     <div id="latest" class="col-left" style="width:auto;">
        
       
   <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <div <?php post_class(); ?> id="post-<?php the_ID() ?>"> 
        <div class="post wrap"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         <p><strong> <?php the_time('d M Y') ?></strong> </p><br />     
         
          <?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?> 
          
         
          
          
          </div>
          
          </div>
        
   <?php endwhile; ?>
		
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