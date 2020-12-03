<!Doctype html>
<head>

    <style>


    </style>
</head>
<html>
<body>
<pre>
<?php


function trou($value){
    include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");

  foreach ($Hierarchie as $item1 => $value1) {
      // si ts les indices existent $Hierarchie[Epice]['super-categorie']
      // je compare lindice que je recois dans mon tableau
      if(isset($Hierarchie[$item1]['super-categorie'])&&in_array($value, $Hierarchie[$item1]['super-categorie'])){

          foreach($Hierarchie[$item1]['sous-categorie'] as $key1 => $value2){

              echo $value2 ."</br>";
              echo" Recettes";
              echo "</br>";
              foreach ($Recettes as $item3 => $value3){
                  //echo "3";

                  foreach ($value3 as $item4=>$value4){
                      if(in_array($value2, $Recettes[$item3]["index"])){
                      print_r($value3["titre"]);
                      echo "</br>";;
                  }
                  }
                  //echo $Recettes[$item3]["titre"];
                  echo "</br>";
              }
             /* foreach ($Recettes as $item3 => $value3){
                  foreach ($value3 as $item4=>$value4){
                    if(in_array(value2, $Recettes[$item3]["index"])){
                       echo $Recettes[$item1]["titre"];
                    }
                  }


              }*/


          }

   echo "<br/>";

  }

  }

//foreach ($Hierarchie as $item1 => $value1) {
    //if(isset($Hierarchie[$item1]['super-categorie'])&&($Hierarchie[$item1]['super-categorie']==$value)){
      //  foreach ($Hierarchie as $item => $value1){
            //echo "bien";
            //print_r($value1);
            /* foreach ($value1["sous-c

            tegorie"] as $key => $elemnt){
                 foreach($Recettes as $index => $val){
                     if(in_array($elemnt,$val["index"])){
                         echo $val["titre"];
                     }

                 }
             }*/


        //}





}
trou("Fruit");
?>
</pre>

</body>
</html>