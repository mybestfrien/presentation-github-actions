<?php

namespace App\Tests;

use App\Personnage;
use PHPUnit\Framework\TestCase;

class PersonnageTest extends TestCase
{
    public function test_personnage(): void
    {
        $perso = new Personnage("Jean-Yves", "Martin");

        self::assertInstanceOf(Personnage::class, $perso);
    }

    public function test_personnage_name(): void
    {
        $prenom = "Hubert";
        $nom = "Duchemin";
        $perso = new Personnage($prenom, $nom);

        self::assertEquals($prenom, $perso->getPrenom());
        self::assertEquals($nom, $perso->getNom());
    }
}
