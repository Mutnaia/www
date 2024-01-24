<?php

class Plant {
    private $pavadinimas;
    private $lotiniskasPavadinimas;
    private $booleanVianmetis;
    private $kokiamZzemyneAuga;
    private $suagusioAugaloAukstisMetrais;
    private $arValgomas;

    public function __construct($pavadinimas = '', $lotiniskasPavadinimas = '',$booleanVianmetis = false,$kokiamZzemyneAuga = '',$suagusioAugaloAukstisMetrais = 0,$arValgomas = false) {
    $this->pavadinimas =  $pavadinimas;
    $this->lotiniskasPavadinimas = $lotiniskasPavadinimas;
    $this->booleanVianmetis = $booleanVianmetis;
    $this->kokiamZzemyneAuga = $kokiamZzemyneAuga;
    $this->suagusioAugaloAukstisMetrais = $suagusioAugaloAukstisMetrais;
    $this->arValgomas = $arValgomas;
}

public function getPavadinimas() {
    return $this->pavadinimas;
}

public function getLotiniskasPavadinimas() {
    return $this->lotiniskasPavadinimas;
}

public function getBooleanVianmetis() {
    return $this->booleanVianmetis;
}

public function getKokiamZzemyneAuga() {
    return $this->kokiamZzemyneAuga;
}

public function getSuagusioAugaloAukstisMetrais() {
    return $this->suagusioAugaloAukstisMetrais;
}

public function getArValgomas() {
    return $this->arValgomas;
}



public function setPavadinimas($pavadinimas) {
    $this->pavadinimas = $pavadinimas;
}

public function setLotiniskasPavadinimas($lotiniskasPavadinimas) {
    $this->lotiniskasPavadinimas = $lotiniskasPavadinimas;
}

public function setBooleanVianmetis($booleanVianmetis) {
    $this->booleanVianmetis = $booleanVianmetis;
}

public function setKokiamZzemyneAuga($kokiamZzemyneAuga) {
    $this->kokiamZzemyneAuga = $kokiamZzemyneAuga;
}

public function setSuagusioAugaloAukstisMetrais($suagusioAugaloAukstisMetrais) {
    $this->suagusioAugaloAukstisMetraist = $suagusioAugaloAukstisMetrais;
}

public function setArValgomas($arValgomas) {
    $this->arValgomas = $arValgomas;
}


public function __toString() {
    return 
    "Pavadinimas: <strong> {$this->pavadinimas} </strong><br>-
     Lotiniskas pavadinimas: <strong> {$this->lotiniskasPavadinimas}</strong><br>-
      Vianmetis: <strong> " . ($this->booleanVianmetis ? 'Yes' : 'No') . "</strong><br>-
       Kokiam zemyne auga: <strong> {$this->kokiamZzemyneAuga}<br></strong>-
        Saugusios augalo aukstis metrais : <strong>{$this->suagusioAugaloAukstisMetrais}</strong><br>-
         Ar valgomas: " .  ($this->arValgomas ? '<strong>Yes</strong>' : '<strong>No</strong>');
}
}
?>