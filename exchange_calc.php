
<?php
    $amount = 0;  //  variable $amount for USD amount of each

    function BuyingRate($amount){  
        $usd = $amount * 3740;    
        if($usd > 1000000){
            $usd = $usd - ($usd * 0.02);  
        echo number_format($usd);    
      
    }else {
        echo number_format($usd); 
    }
}

    echo "<h1>Amount of money for  each person:</h1>";


    echo "John = USD ";
    BuyingRate(100);
    echo '<br>';

    echo "Mark = USD ";
    BuyingRate(150);
    echo '<br>';
    
    
    echo "Slyvia = USD ";
    BuyingRate(1100);
    echo '<br>';


    echo "Juma = USD ";
    BuyingRate(3500);
    echo '<br>';

    echo "Mike = USD ";
    BuyingRate(600);
    echo '<br>';

    echo "Sana = USD ";
    BuyingRate(50);
    echo '<br>';

    echo "Linda = UGX ";
    BuyingRate(8000);
    echo '<br>';
?>
