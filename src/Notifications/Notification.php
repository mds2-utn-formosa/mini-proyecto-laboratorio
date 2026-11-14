<?php

/**
 * Contrato común para todas las notificaciones.
 *
 * Cualquier canal nuevo (WhatsApp, Telegram, push) implementa esta interfaz.
 * NotificationFactory depende de esta abstracción, no de clases concretas.
 */
interface Notification
{
    public function send(string $message): void;
}