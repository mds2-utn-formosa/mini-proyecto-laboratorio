<?php

/**
 * Paciente con prepaga: 15% de descuento por defecto.
 *
 * EJERCICIO 1 — Este archivo es la prueba del patrón:
 * se agregó un tipo de paciente nuevo SIN tocar PriceCalculator.
 * Si hubiera que modificar PriceCalculator para que esto funcione,
 * Strategy estaría mal aplicado.
 */
final class PrepaidStrategy implements PricingStrategy
{
    public function __construct(private float $discount = 0.15) {}

    public function calculate(float $amount): float
    {
        return $amount * (1 - $this->discount);
    }
}