<?php

/**
 * Decorador: agrega marca de agua al reporte que envuelve.
 *
 * Mismo contrato Report que los demás. Se puede encadenar antes o
 * después de cualquier otro decorador.
 */
final class WatermarkDecorator implements Report
{
    public function __construct(private Report $report) {}

    public function generate(): string
    {
        return $this->report->generate() . ' + marca de agua';
    }
}