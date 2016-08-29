<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // TODO : add image by Fixture
        // Product 1
        $phone1 = new Product();
        $phone1->setName('Iphone');
        $phone1->setPrice(1500);
        $phone1->setWeight(1);
        $phone1->setDescription('Iphone des1');
        $phone1->setVisiblity(true);
        // $phone1->setImage("dada");
        $phone1->setCategory($this->getReference('admin-tag1'));
        $manager->persist($phone1);

        // Product 2
        $phone2 = new Product();
        $phone2->setName('Samsung');
        $phone2->setPrice(1500);
        $phone2->setWeight(1);
        $phone2->setDescription('Iphone des1');
        $phone2->setVisiblity(true);
        // $phone1->setImage("dada");
        $phone2->setCategory($this->getReference('admin-tag1'));
        $manager->persist($phone2);

        // Product 3
        $phone3 = new Product();
        $phone3->setName('LG');
        $phone3->setPrice(1500);
        $phone3->setWeight(1);
        $phone3->setDescription('Iphone des1');
        $phone3->setVisiblity(true);
        // $phone1->setImage("dada");
        $phone3->setCategory($this->getReference('admin-tag1'));
        $manager->persist($phone3);

        // Product 4
        $phone4 = new Product();
        $phone4->setName('Nokia');
        $phone4->setPrice(1500);
        $phone4->setWeight(1);
        $phone4->setDescription('Iphone des1');
        $phone4->setVisiblity(true);
        // $phone1->setImage("dada");
        $phone4->setCategory($this->getReference('admin-tag1'));
        $manager->persist($phone4);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
