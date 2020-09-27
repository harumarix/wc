<?php 
foreach ($services as $key => $service){
    echo $this->render('_service_item',compact('service'));
}
?>