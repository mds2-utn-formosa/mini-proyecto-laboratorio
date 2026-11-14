<?php

/**
 * Servicio de envío de notificaciones.
 *
 * Antes: un if por tipo de notificación (conocía las clases concretas).
 * Ahora: delega en NotificationFactory. No conoce ninguna clase concreta.
 *
 * Agregar WhatsApp no modificó este archivo.
 */
final class NotificationSender
{
    public function enviar(string $tipo, string $destino, string $mensaje): void
    {
        $notification = NotificationFactory::create($tipo, $destino);
        $notification->send($mensaje);
    }
}