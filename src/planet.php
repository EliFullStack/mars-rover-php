<?php

class Planet {

    private $name;
    private $mars_size;

    public function __construct () {
        $this->name = 'Mars';
        $this->mars_size = $this->create_mars_squareboard();

    }

    public function getName(){
        return $this->name;
    }

    public function getMarsSize(){
        return $this->mars_size;
    }
        
    public function create_mars_squareboard() {
        $mars_squareboard = array();

        for ($row=0; $row <= 200 ; $row++) {
            $mars_squareboard[0] = []; 

            for ($col = 0; $col < count($mars_squareboard[$row]); $col++) { 
                array_push($mars_squareboard[0], $row);
            }
            array_push($mars_squareboard[1], $col);

        return $mars_squareboard;
        }
    }
}

?>