<?php

namespace App\DataFixtures;

use App\Entity\SfUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\NativePasswordEncoder;

class AppFixtures extends Fixture
{
    public function load (ObjectManager $manager)
    {
        $sfUser = new SfUser();
        $sfUser->setEmail('bvwyngaard@gmail.com');
        $sfUser->setRoles(['ROLE_ADMIN']);
        $encoder = new NativePasswordEncoder();
        $sfUser->setPassword($encoder->encodePassword('password', ''));
        $manager->persist($sfUser);
        $manager->flush();

    }
}