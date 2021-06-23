<?php
require_once "koneksi.php";
class Puskes
{
 
   public  function get_pkss()
   {
      global $mysqli;
      $query="SELECT * FROM puskesmas";
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 'success',
                     'code' =>'200',
                     'count' => '2',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   public function get_pks($id=0)
   {
      global $mysqli;
      $query="SELECT * FROM provinsi";
      if($id != 0)
      {
         $query.=" WHERE id=".$id." LIMIT 1";
      }
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     
                     'provinsi' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }
 
  
}
 
 ?>