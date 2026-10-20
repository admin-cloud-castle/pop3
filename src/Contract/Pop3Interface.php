<?php

declare(strict_types=1);

namespace CloudCastle\Pop3\Contract;

/**
 * Контракт публичного API пакета Pop3.
 */
interface Pop3Interface
{
    /**
     * Возвращает идентификатор пакета Composer.
     */
    public function name(): string;
}
