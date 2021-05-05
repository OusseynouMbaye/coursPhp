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
         
        /**
     * @param class_name permet de chercher le nom de la classe
     * et le charger
     */
        static function autoload($class){
           //$class = str_replace(__NAMESPACE__.'\\','',$class);
           //$class = str_replace('\\','/',$class);
           
            require_once  'class/'.$class.'.php';
        }
}