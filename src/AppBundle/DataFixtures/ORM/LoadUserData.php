<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new Category();
        $userAdmin->setUserName('admin');
        $userAdmin->setEmail('admin@gmail.com');
        $userAdmin->setPassword('admin');
        $manager->persist($userAdmin);
    }

    public function getOrder()
    {
        return 3;
    }
}
