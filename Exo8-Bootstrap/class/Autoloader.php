<?php 

    //namespace App;
/**
 *  class qui permet de loader les class automatiquement
 * 
 */
    class Autoloader{
      
   static function register(){
    spl_autoload_register(array(__CLASS__,'autoload'));

   }
   static function commons(){
      spl_autoload_register(array(__CLASS__,'autoloadCommon'));
  
     }
         
        /**
     * @param class_name permet de chercher le nom de la classe
     * et le charger
     */
        static function autoload($class_name){
           //$class = str_replace(__NAMESPACE__.'\\','',$class);
           //$class = str_replace('\\','/',$class);
           
            require_once  'class/'.$class_name.'.php';
        }

        static function autoloadCommon($common_name){
         //$class = str_replace(__NAMESPACE__.'\\','',$class);
         //$class = str_replace('\\','/',$class);
         
          include './Exo8-Bootstrap/common/' .$common_name. '.php';
      }
}