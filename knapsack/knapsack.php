<?php
    class knapsack{
        public $w;
        public $n;
        public $weight = array();
        public $value = array(); 
        public $table = array(array());
        public function __construct($w,$n,$weight,$value)
        {
            $this->w = $w;
            $this->n = $n;
            $this->weight = $weight;
            $this->value = $value;
        }
        public function hasil(){
            for($i = 0 ; $i <= $this->w; $i++){
                $table[0][$i] = 0;
            }
            for($i = 0 ; $i <= $this->n; $i++){
                $table[$i][0] = 0;
            }
            for($i = 1 ; $i <= $this->n; $i++){
                for($j = 1; $j <= $this->w; $j++){
                    if($this->weight[$i-1] > $j){
                        $table[$i][$j] = $table[$i-1][$j];
                    }else if ($this->weight[$i-1]<=$j){
                        $temp = $this->value[$i-1]+$table[$i-1][$j-$this->weight[$i-1]];
                        $table[$i][$j] = max($table[$i-1][$j],$temp);
                    }
                }
            }
            return $table;
        }
    }
    $data_weight = array(0,10,20,30,40,50);
    $data_value = array(0,30,20,60,80,10);
    $knp = new knapsack(80,5,$data_weight,$data_value);
    $temp = $knp->hasil();
    echo " ".$temp[5][80];
    
?>