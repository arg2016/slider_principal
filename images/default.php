<?php
defined('_JEXEC') or die('Restricted access');
$catid = $articulos[0]->catid;
?>
     <style>
        #owl-demo .item img{
              display: block;
              width: 100%;
              height: auto;
            }
        </style>
        
        <script type="text/javascript">
jQuery(document).ready(function() {

jQuery("#owl-demo").owlCarousel({

    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 800,
	pagination:false,
	autoPlay: 5000,

    singleItem:true
// autoPlay: 3000,
    // "singleItem:true" is a shortcut for:
    // items : 1,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false
});
});
</script>
        
<div class="slide">
    

    
                  <div id="owl-demo" class="owl-carousel owl-theme">
                      
                              <?php
        //Recorre el array para buscar articulos destacados y agregarlos al principio del carrusel
        foreach ($articulos as $item):
            $slug = $item->id . ':' . $item->alias;
            ?>
             
                <div class="item">
                  <div class="cont-info">
				  <div class="owl-titulo"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>"><?php echo $item->title; ?></a></div>
				<div class="owl-enlace"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>">VER MÁS ..</a></div>
				  
				   
				  </div>
				  <div class="owl-banner"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>"><img src="<?php echo JURI::root() . 'media/k2/items/cache/' . md5("Image" . $item->id) . '_L.jpg'; ?>" alt="banner"></a>
                  </div>
                </div>

           
        <?php endforeach; 
        /****************************************************************************************/
        ?>
                      

          

                </div>
    
    
<div class="more"><a href="<?php echo JRoute::_(K2HelperRoute::getCategoryRoute($catid)); ?>">VER TODAS LAS PUBLICACIONES</a></div>
   
    </div>


