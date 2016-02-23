<?php
defined('_JEXEC') or die('Restricted access');
$catid = $articulos[0]->catid;
?>
<div class="slider">
    <br><br>
    <script>
        jQuery(function () {
                        jQuery("#camera_wrap_1").camera({thumbnails: !0, height: "411px", hover: !1, pagination: !1,onStartLoading: function() { jQuery(".imgLoaded").addClass("fixwimg"); }})
        });


	
    </script>
    <div class="camera_wrap camera_azure_skin fixh" id="camera_wrap_1">
        
        <?php
        //Recorre el array para buscar articulos destacados y agregarlos al principio del carrusel
        foreach ($articulos as $item):
            $slug = $item->id . ':' . $item->alias;
            ?>
            <?php
            if ($item->featured == 1) {
                ?>
                <div data-link="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>" data-thumb="<?php echo JURI::root() . 'media/k2/items/cache/' . md5("Image" . $item->id) . '_S.jpg'; ?>" data-src="<?php echo JURI::root() . 'media/k2/items/cache/' . md5("Image" . $item->id) . '_XL.jpg'; ?>">

                    <div class="camera_caption fadeFromBottom">
                        <a   href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>">  <?php echo $item->title; ?></a>
                    </div>

                </div>
            <?php } ?>
        <?php endforeach; 
        /****************************************************************************************/
        ?>
        
        <?php foreach ($articulos as $item):
             if ($item->featured !=1) {
            
            ?>
           
            <?php
            $slug = $item->id . ':' . $item->alias;

            ?>

            <div data-link="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>" data-thumb="<?php echo JURI::root() . 'media/k2/items/cache/' . md5("Image" . $item->id) . '_S.jpg'; ?>" data-src="<?php echo JURI::root() . 'media/k2/items/cache/' . md5("Image" . $item->id) . '_XL.jpg'; ?>">

                <div class="camera_caption fadeFromBottom">
                    <a   href="<?php echo JRoute::_(K2HelperRoute::getItemRoute($slug)); ?>">  <?php echo $item->title; ?></a>
                </div>
                
            </div>

             <?php } endforeach; ?>

    </div>
</div>
<div class="more"><a href="<?php echo JRoute::_(K2HelperRoute::getCategoryRoute($catid)); ?>"> Ver todas</a></div>