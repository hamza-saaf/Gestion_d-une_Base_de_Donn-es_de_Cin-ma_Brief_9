<?php
class Film
{
    private $num;
    private $titre;
    private $genre;
    private $duree;
    private $dateSortie;
    private $realisateur;
    private $distribution;
    public function __construct($num, $titre, $genre, $duree, $dateSortie, $realisateur, $distribution)
    {
        $this->num = $num;
        $this->titre = $titre;
        $this->genre = $genre;
        $this->duree = $duree;
        $this->dateSortie = $dateSortie;
        $this->realisateur = $realisateur;
        $this->distribution = $distribution;
    }
    public function getNum()
    {
        return $this->num;
    }
    public function setNum($newNum)
    {
        $this->num = $newNum;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($newTitre)
    {
        $this->titre = $newTitre;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($newGenre)
    {
        $this->genre = $newGenre;
    }
    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree($newDuree)
    {
        $this->duree = $newDuree;
    }
    public function getDateSortie()
    {
        return $this->dateSortie;
    }
    public function setDateSortie($newDateSortie)
    {
        $this->dateSortie = $newDateSortie;
    }
    public function getRealisateur()
    {
        return $this->realisateur;
    }
    public function setRealisateur($newRealisateur)
    {
        $this->realisateur = $newRealisateur;
    }
    public function getDistribution()
    {
        return $this->distribution;
    }
    public function setDistribution($newDistribution)
    {
        return $this->distribution = $newDistribution;
    }
}
