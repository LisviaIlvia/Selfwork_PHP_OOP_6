<?php

// Definizione dell'interfaccia per le categorie
abstract class Categoria
{

    abstract function getMyCategory(): string; // type hinting
}

// Definizione delle classi specifiche per ogni categoria
class Attualita extends Categoria
{
    function getMyCategory(): string
    {
        return " Attualità";
    }
}

class Sport extends Categoria
{
    function getMyCategory(): string
    {
        return " Sport";
    }
}

class Gossip extends Categoria
{
    function getMyCategory(): string
    {
       return " Gossip";

    }
}

class Storia extends Categoria
{
    function getMyCategory(): string
    {
        return " Storia";
    }
}


// Classe Post 
class Post {
    public $titolo;
    public $categoria;
    public $tag;

     // Costruttore che accetta titolo, categoria (come oggetto) e tag
    public function __construct(string $_titolo, Categoria $_categoria, string $_tag)
    {
       $this->titolo = $_titolo;
       $this->categoria = $_categoria;
       $this->tag = $_tag; 
    }

    // Metodo per visualizzare l'articolo
    public function visualizzaArticolo() {

       echo "Titolo: $this->titolo\nCatagoria:". $this->categoria->getMyCategory()."\nTag: $this->tag";
    }
}


// Creo alcune istanze di classe Post iniettando la dipendenze Categoria all’interno dell’attributo dedicato
$post1 = new Post("Chi ha ucciso l'uomo ragno?", new Gossip(), "#hannouccisoluomoragno");
$post2 = new Post("Le ultime notizie sul cambiamento climatico", new Attualita(), "#climatechange");
$post3 = new Post("Il grande evento sportivo del 2024", new Sport(), "#sports2024");

// Visualizzo gli articoli
$post1->visualizzaArticolo();
echo "\n\n";
$post2->visualizzaArticolo();
echo "\n\n";
$post3->visualizzaArticolo();