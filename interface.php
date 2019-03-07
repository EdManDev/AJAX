<?php
    if(!empty($_POST['range'])){
        if($_POST['range']=='all'){
            echo json_encode(['brand_value'=>' Toyota.','model_value'=>' EdMan.']);
        }
    }
?>