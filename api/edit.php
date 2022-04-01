<?php
include_once "../base.php";

// dd($_POST);
foreach($_POST['id'] as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $Append->del($id);
    }else{
        $data=$Append->find($id);

        $data['name']=$_POST['name'][$key];
        $data['text']=$_POST['text'][$key];    
        // $data['img']=$_POST['img'][$key];        
        $data['link']=$_POST['link'][$key];
        $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        // dd($data);
        $Append->save($data);    
    }

}


to("../back/back.php");
// to("../back.php");
?>      