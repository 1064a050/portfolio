<?php

include_once  "../base.php";

// dd($_POST);
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}

        $data['name']=$_POST['name'];
        $data['text']=$_POST['text'];
        $data['link']=$_POST['link'];
        $data['sh']=1;
   
// dd($data);
$Append->save($data);
to("../back/back.php");
?>