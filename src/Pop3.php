<?php

declare(strict_types=1);

namespace CloudCastle\Pop3;

use CloudCastle\Pop3\Contract\Pop3Interface;
use CloudCastle\Pop3\Exception\Pop3Exception;

/**
 * Точка входа пакета Pop3.
 *
 * Заглушка скаффолда: замените на реальный публичный API.
 */
final class Pop3 implements Pop3Interface
{
    /**
     * Версия пакета для диагностики.
     */
    public const VERSION = '0.1.0';

    /**
     * Возвращает идентификатор пакета Composer.
     */
    #[\Override]
    public function name(): string
    {
        return 'cloud-castle/pop3';
    }

    /**
     * Завершает работу с ошибкой пакета.
     *
     * @throws Pop3Exception
     */
    public function abort(string $message): never
    {
        throw new Pop3Exception($message);
    }
}
