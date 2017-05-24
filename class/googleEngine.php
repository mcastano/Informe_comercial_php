<?php
abstract class googleEngine extends engine
{

    // Recorre todos los elementos de todas las paginas
    abstract public function eachItems();
    abstract public function eachItemsPages ();
    abstract public function eachPages ();

    abstract public function nextPage();
    abstract public function nextItem();

}
?>
