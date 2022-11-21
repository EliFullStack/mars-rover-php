<?php

class Rover 
{
    private $point_x;
    private $point_y;
    private $cardinal_direction;
    private $name;

    public function __construct($name, Point $x, Point $y, Direction $direction)
    {
        $this->point_x = $x;
        $this->point_y = $y;
        $this->name = $name;
        $this->cardinal_direction = $direction;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function getCardinalDirection() 
    {
        return $this->cardinal_direction;
    }

    public function getPoint_x() 
    {
        return $this->point_x;
    }

    public function getPoint_y() 
    {
        return $this->point_y;
    }

    public function receive_commands (array $commands, $cardinal_direction, $actual_position) 
    {
        foreach ($commands as $command) {
            if (!in_array($command, $commands)) {

                return "This is not a valid command";

            } else {
                if ($command == 'f')
                {
                    return $this->move_forward($cardinal_direction, $actual_position);
                } 
                elseif ($command == 'l') 
                {
                    return $this->move_left($cardinal_direction, $actual_position);
                }
                elseif ($command == 'r')
                {
                    return $this->move_right($cardinal_direction, $actual_position);
                }

            }
        }
    }

    public function move_forward($cardinal_direction, $actual_position)
    {
        if($this->detect_obstacle() == false) 
        {
            switch ($cardinal_direction) {
                case 'N':
                    $new_position = $actual_position [0] [1 + 1];
                    return $new_position;
                    break;
                case 'S':
                    $new_position = $actual_position [0] [1 - 1];
                    return $new_position;
                    break;
                case 'E':
                    $new_position = $actual_position [0 + 1] [1];
                    return $new_position;
                    break;
                case 'W':
                    $new_position = $actual_position [0 - 1] [1];
                    return $new_position;
                    break;
                
            }
        } else {
            $new_position = $actual_position;
            echo "An obstacle has been detected";
        }
    }

    public function move_left($cardinal_direction, $actual_position)
    {
        if($this->detect_obstacle() == false)
        {
            switch ($cardinal_direction) {
                case 'N':
                    $new_position = $actual_position [0 - 1] [1];
                    return $new_position;
                    break;
                case 'S':
                    $new_position = $actual_position [0 + 1] [1];
                    return $new_position;
                    break;
                case 'E':
                    $new_position = $actual_position [0] [1 + 1];
                    return $new_position;
                    break;
                case 'W':
                    $new_position = $actual_position [0] [1 - 1];
                    return $new_position;
                    break;
            }
        } else {
            $new_position = $actual_position;
            echo "An obstacle has been detected";
        }
    }

    public function move_right($cardinal_direction, $actual_position)
    {
        if($this->detect_obstacle() == false)
        {
            switch ($cardinal_direction) {
                case 'N':
                    $new_position = $actual_position [0 + 1] [1];
                    return $new_position;
                    break;
                case 'S':
                    $new_position = $actual_position [0 - 1] [1];
                    return $new_position;
                    break;
                case 'E':
                    $new_position = $actual_position [0] [1 - 1];
                    return $new_position;
                    break;
                case 'W':
                    $new_position = $actual_position [0] [1 + 1];
                    return $new_position;
                    break;
            }
        } else {
            $new_position = $actual_position;
            echo "An obstacle has been detected";
        }
    }

    public function detect_obstacle() {
        
    }



}