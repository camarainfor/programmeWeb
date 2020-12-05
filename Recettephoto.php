<!Doctype html>
<head>

    <style>


    </style>
</head>
<html>
<body>
<pre>
<?php
function ele($titre){
    $name=ucfirst(strtolower($titre));
    $name=str_replace(' ', '_', $name);
    echo $name;
  }
transformTitle("AB i");
?>

</pre>

</body>
</html>