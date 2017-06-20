<?php global $smof_data; ?>
             <?php if( $smof_data['rnr_enable_googlemap']) { ?>          
              <div  class="row contact-map">
             <iframe width="100%" height="400" src="http://works.80h-tv.com/baidu_map.html"></iframe>
             </div>        
             <?php } ?> 

       <div class="container">
            <div class="row">				
              <div class="sixteen columns">
                <?php  the_content(); ?>
              </div>
             </div>
            </div><!-- END OF CONTAINER -->                  
