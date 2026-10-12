<?php

/**
 * PriceCalculator ya NO decide el algoritmo de precio.
 * Recibe una PricingStrategy por composición y le delega el cálculo.
 *
 * Antes: un switch con un case por tipo de paciente (violaba OCP y SRP).
 * Ahora: una sola línea que delega en la estrategia inyectada.
 *
 * Agregar un tipo nuevo (ej: prepaga) NO modifica esta clase.
 * Se agrega una clase nueva que implemente PricingStrategy.
 */
final class PriceCalculator
{
    public function __construct(private PricingStrategy $strategy) {}

    public function calculate(float $amount): float
    {
        return $this->strategy->calculate($amount);
    }

    /**
     * El IVA se aplica sobre el total ya calculado.
     * La duplicación de calcularConIva() desapareció:
     * el descuento vive en la estrategia, el IVA vive acá.
     */
    public function calculateWithVat(float $amount, float $vat = 1.21): float
    {
        return $this->calculate($amount) * $vat;
    }
}