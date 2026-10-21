<?php
/**
 * Paciente con obra social: descuento del 30%.
 * El porcentaje vive en un unico lugar del sistema: esta clase.
 */
final class InsuranceStrategy implements PricingStrategy
{
    public function __construct(private float $discount = 0.30) {}

    public function calculate(float $amount): float
    {
        return $amount * (1 - $this->discount);
    }
}