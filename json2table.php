function objectToTable( $var ){
    if(count($var)==0){
        return;

    }else if(is_object($var)){

        echo "<table border><tr>";

        foreach ($var as $key => $value){
            echo"<th>";
            echo $key;
            echo "</th>";
        }
        echo "</tr>";
        echo "<tr>";
       
        foreach ($var as $key => $value){
            echo "<td>";

            //print_r($value);
            objectToTable($value);
            echo "</td>";
        }
        echo "</tr></table>";

    }else if(is_array($var)){
        echo "<table border>";
        ;
       
        foreach ($var as $value){
            echo "<tr><td>";

            //print_r($value);
            objectToTable($value);
            echo "</td></tr>";
        }
        echo "</table>";

    }else{
        echo $var;
    }
}
