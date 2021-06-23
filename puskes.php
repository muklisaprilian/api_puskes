<?php
require_once "method.php";
$pks = new Puskes();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            $pks->get_pks($id);
         }
         else
         {
            $pks->get_pkss();
         }
         break;
   case 'POST':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            $pks->update_pks($id);
         }
         else
         {
            $pks->insert_pks();
         }     
         break; 
   case 'DELETE':
          $id=intval($_GET["id"]);
            $pks->delete_pks($id);
            break;
   default:
      // Invalid Request Method
         header("HTTP/1.0 405 Method Not Allowed");
         break;
      break;
}
 
 
 
 
?>