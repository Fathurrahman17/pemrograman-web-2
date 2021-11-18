<?php
	
	 for($no=1;$no<=100;$no++)
        {
            if($no % 2 == 0)
                {echo "Perulangan Ke-$no <br>";}
            else
                {echo "Perulangan Ke-$no <br>";}
        }
	$data = array();
for ($i=0; $i <= 100; $i++) { 
    array_push($data,rand(1,100));
}
echo "<br> Nilai Genap Dari Data Array  <br>";
    foreach ($data as $key=> $value) 
    {
        if($value % 2 == 0){
            echo $value. ", ";
        };
    };
?>