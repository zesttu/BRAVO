<?php
/**
* Standard controller layout.
*
* @package BravoCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $br;
      $br->data['title'] = "The Index Controller";
   }

} 
