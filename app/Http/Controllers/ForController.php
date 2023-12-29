<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\LinesOfCode\Counter;

class ForController extends Controller
{
    public function for1($k,$n){
        for($i = 0; $i<$n; $i++){
            echo ($i+1).".".$k."<br>";
        }
    }

    public function for2($a,$b){
        $counter=0;
        for($i = $b;$i<=$a;$i++){
            $counter++;
            echo $i."<br>";
        }
        echo $a." va ".$b." raqamlar orasidagi raqamlar soni: ".$counter;
    }

    public function for3($x,$y){
        $counter=0;
        for($i = $x;$i<$y;$i--){
            $counter++;
            echo $i."<br>";
        }
        // echo $a." va ".$b." raqamlar orasidagi raqamlar soni: ".$counter;
    }

    public function for4($qand){

        for($i = 1; $i<=10;$i++){
            echo $i." kg qandning narxi: ".$qand*$i."$<br>";
        }
    }

    public function for5($konfet){

        for($i = 1; $i<=10;$i++){
            echo ($i/10)." kg qandning narxi: ".$konfet*($i/10)."$<br>";
        }
    }

    public function for6($cand){

        for($i = 1; $i<=2;$i+=0.2){
            echo $i."kg konfetning narxi: ".$cand*$i."<br>" ;
        }
    }

    public function for7($a,$b){
        $sum=0;
        for($i = $b; $i<=$a; $i++){
            $sum+=$i;
        }

        echo $a." dan ".$b." gacha sonlar yig'indisi: ".$sum;
    }

    public function for8($a,$b){
        $sum=1;
        for($i = $b; $i<=$a; $i++){
            $sum*=$i;
        }

        echo $a." dan ".$b." gacha sonlar ko'paytmasi: ".$sum;
    }

    public function for9($a,$b){
        $sum=0;
        for($i = $b; $i<=$a; $i++){
            $sum+=(pow($i,2));
        }

        echo $a." dan ".$b." gacha sonlar kvadratlarining yig'indisi : ".$sum;
    }

    public function for10($n){
        $S = 1;
        for($i = 0; $i<=$n; $i++){
            $S+=1/$n;
        }

        echo "Yig'indi: ".$S;
    }

    public function for11($n){
        $S = 0;
        for($i = 1; $i<=$n; $i++){
            $S+=pow($n,2);
            $S+=pow(($n+$i),2);
        }

        echo "Yig'indi: ".$S;
    }

    // public function f12($n){
    //     $summa=0;
    //     for($i = 1; $i<=$n; $i++){
    //         $summa+=1.$i*1$i;
    //     }
    // }





    public function bol1($a){

        $check=true;
        if($a>0){
           return  $check=true;
        }else
            return $check=false;

            echo $check;
    }


    public function bol2($a){

        $odd=true;
        if($a%2==1){
           return  $odd=true;
        }else
            return $odd=false;

            echo $odd;
    }

    public function bol3($a){

        $even=true;
        if($a%2==0){
           return  $even=true;
        }else
            return $even=false;

            echo $even;
    }

    public function bol4($a,$b){

        $result=true;
        if($a>2 && $b<=3){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol5($a,$b){

        $result=true;
        if($a>=0 && $b<-2){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol6($a,$b,$c){

        $result=true;
        if($a<=$b && $b<=$c){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol7($a,$b,$c){

        $result=true;
        if($a<$b && $b<$c){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol8($a,$b){

        $result=true;
        if($a%2==1 && $b%2==1 ){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol9($a,$b){

        $result=true;
        if($a%2==1 || $b%2==1 ){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol10($a,$b){

        $result=true;
        if($a%2==1 && $b%2==1 || $a%2==1 && $b%2==0){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol11($a,$b){

        $result=true;
        if($a%2==1 && $b%2==1 || $a%2==0 && $b%2==0){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol12($a,$b,$c){

        $result=true;
        if($a>0 && $b>0 && $c>0){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol13($a,$b,$c){

        $result=true;
        if($a>0 || $b>0 || $c>0){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }

    public function bol14($a,$b,$c){

        $result=true;
        if($a>0 && $b<0 && $c<0 || $a<0 && $b>0 && $c<0 || $a<0 && $b<0 && $c>0 ){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }


    public function bol15($a,$b,$c){

        $result=true;
        if($a>0 && $b>0 && $c<0 || $a>0 && $b>0 && $c>0 || $a<0 && $b>0 && $c>0 ){
           return  $result=true;
        }else
            return $result=false;

            echo $result;
    }


}
