<?php
/**
 * Contrato comun de todos los algoritmos de calculo de precio.
 * PriceCalculator depende de esta interfaz, nunca de una clase concreta.
 */
interface PricingStrategy
{
    public function calculate(float $amount): float;
}