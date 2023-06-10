<?php

class auto {
    private $id;
    private $marca;
    private $modelo;
    private $version;
    private $anio;

    public function getid()
    {
        return $this-> id;
     }

     public function setid ($id)
     {
        $this->id = $id; 
     }
     
     public function getmarca()
     {
         return $this-> marca;
      }
 
      public function setmarca ($marca)
      {
         $this->marca = $marca; 
      }

      public function getmodelo()
     {
         return $this-> modelo;
      }
 
      public function setmodelo ($modelo)
      {
         $this->modelo = $modelo;
        }

        public function getversion()
        {
            return $this-> version;
         }
    
         public function setversion ($version)
         {
            $this->version = $version;
           }

           public function getanio()
        {
            return $this-> anio;
         }
    
         public function setanio ($anio)
         {
            $this->anio = $anio; 


            public function MostrarDatos()
            {
                echo 'id' . $this->getid() . '<br>';
                echo 'marca' . $this->getmarca() . '<br>';
                echo 'modelo' . $this->getmodelo() . '<br>';
                echo 'version' . $this->getversion() . '<br>';
                echo 'anio' . $this->getanio() . '<br>';


            }








}
