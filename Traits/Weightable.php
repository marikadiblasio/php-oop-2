<?php 
trait Weightable{
    protected $weight;
    public function setWeight($weight, $int){
        if(!is_numeric($weight)){
            throw new Exception('Is not a number');
        }
        $this->weight = $weight.$int;
    }
    public function getWeight(){
        return $this->weight;
    }
}