<?php


namespace App\Controllers;

use App\Core\MVC\Controller;

use App\Models\MBikes;

class CBike extends Controller {

    //construct
    function onInit(){}

  
  function GetBikes(){
	  $db=new MBikes();
      $db->GetBikes();
  }
} 