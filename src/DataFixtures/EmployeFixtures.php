<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Employe;

class EmployeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $service = new Employe("testemploye");
        $employe = new Service();
        $employe->addLibelle($service);
                
            $manager->persist($employe);

        $manager->flush();
    }

}
