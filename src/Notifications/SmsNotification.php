<?php

/**
 * Notificación por SMS.
 * Implementa Notification: mismo contrato que Email, WhatsApp, etc.
 */
final class SmsNotification implements Notification
{
    public function __construct(private string $phone) {}

    public function send(string $message): void
    {
        echo "[SMS] a {$this->phone}: {$message}<br>";
    }
}
