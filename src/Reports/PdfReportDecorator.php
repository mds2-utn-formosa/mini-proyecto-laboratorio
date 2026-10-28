<?php

/**
 * Decorador: agrega marca de PDF al reporte que envuelve.
 *
 * EJERCICIO 4 — Se agregó este decorador sin tocar BasicReport
 * ni DigitalSignatureDecorator ni WatermarkDecorator. Esa es la
 * prueba de que Decorator permite combinar libremente.
 */
final class PdfReportDecorator implements Report
{
    public function __construct(private Report $report) {}

    public function generate(): string
    {
        return $this->report->generate() . ' + PDF';
    }
}