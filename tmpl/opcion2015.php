<?php
defined('_JEXEC') or die('Restricted access');
$document->addStyleSheet(JURI::root(true). '/modules/'.$module->module.'/assets/owl.carousel.min.css');
$document->addScript( JURI::root(true). '/modules/'.$module->module.'/assets/owl.carousel.min.js' );
$catid = $articulos[0]->catid;
?>


<script type="text/javascript">
    jQuery(document).ready(function(){jQuery("#publicaciones-carrusel").owlCarousel({navigation:!1,slideSpeed:300,paginationSpeed:800,pagination:!1,autoPlay:5e3,singleItem:!0}),jQuery(".anterior").click(function(){jQuery("#publicaciones-carrusel").trigger("owl.prev")}),jQuery(".siguiente").click(function(){jQuery("#publicaciones-carrusel").trigger("owl.next")})});

</script>

<div class="slide">
<style scoped>
    #publicaciones-carrusel .item img{
        display: block;
        width: 100%;
        height: 358px;
    }
</style>
 <div class="anterior"><img src="<?php echo JURI::root(true). '/modules/'.$module->module; ?>/images/anterior.jpg"></div>
 <div class="siguiente"><img src="<?php echo JURI::root(true). '/modules/'.$module->module; ?>/images/siguiente.jpg"></div>

    <div id="publicaciones-carrusel" class="owl-carousel owl-theme">
       

        <?php
		//print_r($articulos[2]->extra_fields);
		/*$data=json_decode($articulos[2]->extra_fields);
		echo $data[0]->value*;*/
        foreach ($articulos as $item):

			$data=json_decode($item->extra_fields);
			if(isset($data[0]->value))
			{
				//$data=json_decode($item[$item->id]->extra_fields);
				//echo $data[0]->value;
				//print_r($item);
				$data=json_decode($item->extra_fields);
				//if ( $data[0]->value == "carrusel")
				//{
				//echo $mostrar=$data[0]->value;
				//}
				//echo $data[0]->value;
				//echo $item->extra_fields;
			
			
            $slug = $item->id . ':' . $item->alias;
            //Revisa los articulos destacados para no agregarlo al carrusel
			if($data[0]->value == 1){
				?>
                <div class="item">
                    <div class="cont-info">
                        <div class="owl-titulo"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>"><?php echo $item->title; ?></a></div>
                        <div class="owl-enlace"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>">VER MÁS ..</a></div>
                    </div>
                    <div class="owl-banner"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>"><img src="<?php echo JURI::root() . 'media/k2/items/cache/' . md5("Image" . $item->id) . '_L.jpg'; ?>" alt="banner"></a>
                    </div>
                </div>	
			
			<?php 
			
			}
			}
			
            if ($item->featured != 1 ) {
                ?>

                <div class="item">
                    <div class="cont-info">
                        <div class="owl-titulo"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>"><?php echo $item->title; ?></a></div>
                        <div class="owl-enlace"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>">VER MÁS ..</a></div>
                    </div>
                    <div class="owl-banner"><a href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>"><img src="<?php echo JURI::root() . 'media/k2/items/cache/' . md5("Image" . $item->id) . '_L.jpg'; ?>" alt="banner"></a>
                    </div>
                </div>


    <?php } endforeach;
?>




    </div>


    <div class="more"><a href="<?php echo JRoute::_(K2HelperRoute::getCategoryRoute($catid)); ?>">VER TODAS LAS PUBLICACIONES</a></div>

</div>


