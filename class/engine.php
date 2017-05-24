<?php
abstract class engine
{
    // Declaración de una propiedad
    public $url = ''; // Consulta de la url con parametros
    public $parameters =[];

    // Recorre todos los elementos de todas las paginas
    abstract public function eachItems();
    abstract public function eachItemsPages ();
    abstract public function eachPages ();

    abstract public function openPage ();
    abstract public function nextPage();
    abstract public function nextItem();

    public function url ($url) { $this->url = $url;}

    public setParameter ($nameParameter, $valueParameter)
    { $this->parameters[$nameParameter] = $valueParameter; }

    public getParameter ($nameParameter)
    { return $this->parameters[$nameParameter]; }



}
?>
