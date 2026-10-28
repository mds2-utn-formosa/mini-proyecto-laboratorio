<?php

/**
 * Decorador: agrega firma digital al reporte que envuelve.
 *
 * Recibe CUALQUIER Report (base u otro decorador) y le suma la firma.
 * No sabe ni le importa qué hay adentro.
 */
final class DigitalSignatureDecorator implements Report
{
    public function __construct(private Report $report) {}

    public function generate(): string
    {
        return $this->report->generate() . ' + firma digital';
    }
}