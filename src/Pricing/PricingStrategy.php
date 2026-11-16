<?php

/**
 * Contrato común para todos los algoritmos de precio.
 *
 * Cualquier tipo de paciente nuevo implementa esta interfaz.
 * PriceCalculator depende de esta abstracción, no de clases concretas
 * (Dependency Inversion Principle).
 */
interface PricingStrategy
{
    public function calculate(float $amount): float;
}