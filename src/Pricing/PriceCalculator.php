<?php
/**
 * ============================================================================
 *  CALCULO DE PRECIOS — Patron STRATEGY
 * ============================================================================
 *
 *  PriceCalculator no conoce los algoritmos de precio: recibe una
 *  PricingStrategy por constructor y le delega el calculo (composicion).
 *  Agregar un tipo de paciente = agregar una clase que implemente
 *  PricingStrategy. Esta clase no se modifica.
 * ============================================================================
 */

final class PriceCalculator
{
    private const IVA = 1.21;

    public function __construct(private PricingStrategy $strategy) {}

    public function calculate(float $amount): float
    {
        return $this->strategy->calculate($amount);
    }

    public function calculateWithIva(float $amount): float
    {
        return $this->calculate($amount) * self::IVA;
    }
}