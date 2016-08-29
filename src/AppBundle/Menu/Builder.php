<?php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));


        $menu->addChild('Products', array('route' => 'product_index'));
        $menu->addChild('Category', array('route' => 'category_index'));
        // $menu->addChild('Edit profile', array('route' => 'fos_user_profile_edit'));

        // ... add more children

        return $menu;
    }
}
