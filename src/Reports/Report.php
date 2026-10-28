<?php

/**
 * Contrato común para todos los reportes y decoradores.
 *
 * Tanto el reporte base como cada decorador implementan esta interfaz.
 * Los decoradores pueden envolver a otros decoradores porque todos
 * hablan el mismo idioma.
 */
interface Report
{
    public function generate(): string;
}