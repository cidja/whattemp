<?php

namespace App\DataFixtures;

use App\Entity\Temp; //indiqué pour dire a symfony qu'on utilise la classe qui est dans le répertoire app\entity
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TempFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $personne = ["Camille", "Baptiste", "Christian"]; //source: https://openclassrooms.com/forum/sujet/selection-aleatoire-d039-une-valeur-dans-un-array-64037
        for($i=0 ; $i < 100; $i++){
            //température du corps habituel 36,1 °C et 37,8 °C source: https://fr.wikipedia.org/wiki/Temp%C3%A9rature_corporelle_humaine
            // - de 35 hypodermie
            // >41.6 hyperthermie
            $tempMin = 35;
            $tempMax = 42.7; //source: https://sante.journaldesfemmes.fr/maux-quotidien/1025528-20-chiffres-records-en-sante/1025530-record-de-fievre-la-plus-elevee
            $nbApresVirgule = 1;
           
            $temp = new Temp();
            $temp   -> setPerson($personne[array_rand($personne)]) // pour avoir un des trois personne
                    -> setTemperature(mt_rand($tempMin * pow(10, $nbApresVirgule), $tempMax * pow(10, $nbApresVirgule)) / pow(10, $nbApresVirgule)) //source: https://php.developpez.com/faq/?page=nombres
                    -> setDoliprane(rand(0,1))
                    -> setAdvil(rand(0,1))
                    -> setCreatedAt(new \DateTime());
            $manager->persist($temp); //pour valider la requête précédente
        }
        
        $manager->flush(); // indique à manager de réellement "balancer" la requête 
    }
}
