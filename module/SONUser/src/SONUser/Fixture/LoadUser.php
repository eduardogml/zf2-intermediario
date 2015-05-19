<?php

namespace SONUser\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use SONUser\Entity\User;

class LoadUser extends AbstractFixture {
    
    public function load(ObjectManager $manager) {
        $user = new User();
        $user->setNome("Eduardo")
                ->setEmail("eduardo@email.com")
                ->setPassword("123456")
                ->setActive(true);
        $manager->persist($user);
        $manager->flush();
    }

}
