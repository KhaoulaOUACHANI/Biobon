<?php

class Produit
{
    public function __construct(
        private int     $id,
        private string  $image,
        private string  $nom,
        private int     $prix
    ) {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImage(): string
    {
        return $this->image;
    }
    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrix(): string
    {
        return $this->prix;
    }
    public function setPrix(int $prix): self
    {
        $this->prix = $prix;
        return $this;
    }
}