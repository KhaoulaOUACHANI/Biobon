<?php
class Produit {
    private int $id;
    private  $image;
    private $nom;
    private $prix;

    public function __construct($id, $image, $nom, $prix) {
        $this->id = $id;
        $this->image = $image;
        $this->nom = $nom;
        $this->prix = (float) $prix; // Assurez-vous que $prix est traité comme un float
    }

}
