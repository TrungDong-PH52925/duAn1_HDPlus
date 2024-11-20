<?php 
 require '../../../../duAn1_HDPlus/Web/Views/Admin/adminHeader.php';
 require '../../../../duAn1_HDPlus/Web/Views/Admin/adminMain.php';
 require '../../../../duAn1_HDPlus/Web/Views/Admin/adminFooter.php';
 require "Web/Config/dbconnect.php";

 //  include "Web/Views/Admin/adminHeader.php";
 
 if(isset($_GET['act'])&&($_GET['act'])!=""){
 $act=$_GET['act'];
 switch ($act) {
     case 'addsp':
         include "Web/Views/Admin/product/add.php";
         break;
     case 'editsp':
         include "Web/Views/Admin/product/edit.php";
         break;
         case 'listsp':
             include "Web/Views/Admin/product/list.php";
             break;
             case 'delete':
                
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                        include "Web/Views/Admin/product/list.php";
                  }
                 case 'chitiet':
             include "Web/Views/Admin/product/chitiet.php";
                 break;   
         
 }
 }else{
     include "Web/Views/Admin/product/list.php";
 }
 // include "Web/Views/Admin/adminFooter.php"
 ?>
