<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // cat1
        $cat1 = new Category();
        $cat1->setName('tag1');
        $manager->persist($cat1);

        // cat2
        $cat2 = new Category();
        $cat2->setName('tag2');
        $manager->persist($cat2);

        $manager->flush();

        // set reference
        $this->addReference('admin-tag1', $cat1);
        $this->addReference('admin-tag2', $cat2);
    }

    public function getOrder()
    {
        return 1;
    }
}
