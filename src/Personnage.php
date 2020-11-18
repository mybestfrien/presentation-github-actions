<?php

namespace App;

class Personnage
{
    private string $nom;
    private string $prenom;

    /**
     * Personnage constructor.
     * @param string $nom
     * @param string $prenom
     */
    public function __construct(string $prenom, string $nom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }


}