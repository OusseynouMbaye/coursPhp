<?php 

    class Utile{

        public static function manageTitleLevel1($title){
            return '<h2 style="background-color:red" class="text-center text-white p-2 mt-2 rounded-sm
             border border-dark"> <b> '.$title.' </b> </h2>';
        }

        public static function manageTitleLevel2($title){
            return '<h2 class="perso_backgroundcolorlight text-center text-white p-2 mt-2 rounded-sm
             border border-dark"> <b> '.$title.' </b> </h2>';
        }

        public static function buttonModifier(){
            
        }
    }