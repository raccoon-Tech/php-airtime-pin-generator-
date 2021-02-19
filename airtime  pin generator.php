<?php
//create function to generate 12 random numbers

   function generate_pin(){
   //declear varables
   $limit=11;
   $pin = '';
   //for loop to loop 12 random numbers
   
   for ($i=0; $i <= $limit; $i++){
   //assigning varable pin to mt_rand() function to get random number from 0 to 9
   
       $pin .= mt_rand(0 , 9);
       }
       //retun Result
      return  $pin;
      
   }
   //loop to display generate_pin() function 200 times
   for($x=0; $x<200; $x++){
  
    //display function  generate_pin   g    
  
  
   echo $x;
    echo " ------ ";
   echo  generate_pin() ;
   echo"<br>";
    }
    //end 
    
?>
