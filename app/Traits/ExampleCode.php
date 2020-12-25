<?php
 namespace App\Traits;
 trait ExampleCode
 {
     public function printThis()
     {
         echo "Trait Execute";
         dd($this);
     }

     public function anotherMethod()
     {
         echo "Trait - anotherMethod() executed";
     }
 }
