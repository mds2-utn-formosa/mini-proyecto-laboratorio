<?php

/**
 * Reporte base: imprime solo el contenido, sin agregados.
 *
 * Este es el "núcleo" que los decoradores envuelven.
 * Comparado con el switch viejo, hace exactamente lo mínimo:
 * armar el texto base.
 */
final class BasicReport implements Report
{
    public function __construct(private string $contenido) {}

    public function generate(): string
    {
        return "Reporte: {$this->contenido}";
    }
}