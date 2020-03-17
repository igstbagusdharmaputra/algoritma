<?php
    class CoinChange{
        public $coin = array();
        public $table = array();
        public $amount;
        public function __construct($amount,$coin)
        {
            $this->amount = $amount;
            $this->coin = $coin;
            
        }
        public function getdata(){
           $total = $this->amount;
           for($i=0;$i<=$total;$i++){
               $table[$i]=0;
           }
           $table[0]=1;
           for($i=0; $i<sizeof($this->coin);$i++){
               $nilai_koin = $this->coin[$i];
                for($j=1;$j<=$total;$j++){
                    if($j>=$nilai_koin){
                        $hasil = $j-$nilai_koin;
                        $table[$j]+=$table[$hasil];
                    }
                }
           }
           return $table;
        }
        public function hasil($datahasil){
            for($i=0;$i<count($datahasil);$i++){
                echo " ".$datahasil[$i];
            }
        }   
        
    }
    $dataarray= array(1,2,5);
    $dp = new CoinChange(5,$dataarray);
    $getData = $dp->getdata();
    $dp->hasil($getData);
    echo " Total:".$getData[5];
?>