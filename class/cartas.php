<?php
    class Cartas extends Usuario {
    private int $id;
    private string $name;
    private string $ki;
    private string $maxKi;
    private string $race;
    private string $gender;
    private string $description;
    private string $image;
    private string $affiliation;
    private dateTime $deletedAt;

    public function __construct($id_usuario, $id, $name, $ki, $maxKi, $race, $gender, $description, $image, $affiliation, $deletedAt){
        parent ::__construct($id_usuario);  
        $this->id = $id;
        $this->name = $name;
        $this->ki = $ki;
        $this->maxKi = $maxKi;  
        $this->race = $race;
        $this->gender=$gender;
        $this->description=$description;
        $this->image=$image;
        $this->affiliation=$affiliation;
        $this->deletedAt=$deletedAt;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getKi() {
        return $this->ki;
    }

    public function getMaxKi() {
        return $this->maxKi;
    }

    public function getRace() {
        return $this->race;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }

    public function getAffiliation() {
        return $this->affiliation;
    }

    public function getDeletedAt() {
        return $this->deletedAt;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setKi($ki) {
        $this->ki = $ki;
    }

    public function setMaxKi($maxKi) {
        $this->maxKi = $maxKi;
    }

    public function setRace($race) {
        $this->race = $race;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setAffiliation($affiliation) {
        $this->affiliation = $affiliation;
    }

    public function setDeletedAt($deletedAt) {
        $this->deletedAt = $deletedAt;
    }
}

?>