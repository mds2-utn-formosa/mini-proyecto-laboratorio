<?php

/**
 * Paciente con obra social: 30% de descuento por defecto.
 *
 * El descuento llega por constructor. Si el laboratorio lo cambia al 25%,
 * se toca UN solo lugar: el punto donde se instancia esta clase.
 */
final class InsuranceStrategy implements PricingStrategy
{
    public function __construct(private float $discount = 0.30) {}

    public function calculate(float $amount): float
    {
        return $amount * (1 - $this->discount);
    }
}