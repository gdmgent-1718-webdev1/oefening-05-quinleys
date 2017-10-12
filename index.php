<?php



function leeftijdTest($leeftijd){

    if($leeftijd <= 16){
        echo "${leeftijd} jaar is te jong voor deze film";

    }elseif ($leeftijd>= 18){
        echo "Je bent al ${leeftijd} jaar. Geniet van de film!";

    } else {
        echo "${$leefijtd}jaar, je hebt ouderlijk toezicht nodig";
    }

};

echo leeftijdTest(16);