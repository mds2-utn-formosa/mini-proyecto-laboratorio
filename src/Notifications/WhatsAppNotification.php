<?php

/**
 * Notificación por WhatsApp.
 *
 * EJERCICIO 2 — Este archivo es la prueba del patrón:
 * se agregó un canal nuevo SIN tocar NotificationSender ni
 * OrderService ni OrderController. Solo se creó esta clase
 * y se registró en NotificationFactory.
 */
final class WhatsAppNotification implements Notification
{
    public function __construct(private string $phone) {}

    public function send(string $message): void
    {
        echo "[WHATSAPP] a {$this->phone}: {$message}<br>";
    }
}