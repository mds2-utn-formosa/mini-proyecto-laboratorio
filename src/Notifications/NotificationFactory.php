<?php

/**
 * Fábrica de notificaciones.
 *
 * Único lugar del sistema que conoce las clases concretas de Notification.
 * El resto del código solo pide un canal por nombre y recibe la abstracción.
 *
 * Agregar un canal nuevo = agregar una clase + agregar una línea acá.
 * Ni el controlador ni el servicio ni NotificationSender se tocan.
 */
final class NotificationFactory
{
    /**
     * @throws InvalidArgumentException si el tipo no está soportado
     */
    public static function create(string $type, string $destination): Notification
    {
        return match ($type) {
            'email'    => new EmailNotification($destination),
            'sms'      => new SmsNotification($destination),
            'whatsapp' => new WhatsAppNotification($destination),
            default    => throw new InvalidArgumentException(
                "Tipo de notificacion no soportado: {$type}"
            ),
        };
    }
}