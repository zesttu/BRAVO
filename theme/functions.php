<?php
/**
    * Print debuginformation from the framework.
    */
    function get_debug() {
      $br = CBravo::Instance();
      $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($br->config, true)) . "</pre>";
      $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($br->data, true)) . "</pre>";
      $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($br->request, true)) . "</pre>";
      return $html;
    }
    
    
    /**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return $br->request->base_url . trim($url, '/');
}


/**
* Return the current url.
*/
function current_url() {
  return $br->request->current_url;
}
    ?>
    
