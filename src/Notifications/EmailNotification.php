<?php

/**
 * Notificación por email.
 * Implementa Notification: mismo contrato que SMS, WhatsApp, etc.
 */
final class EmailNotification implements Notification
{
    public function __construct(private string $to) {}

    public function send(string $message): void
    {
        echo "[EMAIL] para {$this->to}: {$message}<br>";
    }
}