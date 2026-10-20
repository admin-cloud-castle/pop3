<?php

declare(strict_types=1);

namespace CloudCastle\Pop3\Tests\Unit;

use CloudCastle\Pop3\Exception\Pop3Exception;
use CloudCastle\Pop3\Pop3;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * Модульные тесты заглушки Pop3.
 */
#[CoversClass(Pop3::class)]
final class Pop3Test extends TestCase
{
    /**
     * Проверяет, что name() возвращает composer-имя пакета.
     */
    public function testNameReturnsComposerPackageName(): void
    {
        $package = new Pop3();

        self::assertSame('cloud-castle/pop3', $package->name());
    }

    /**
     * Проверяет, что abort() бросает Pop3Exception.
     */
    public function testAbortThrowsPop3Exception(): void
    {
        $package = new Pop3();

        $this->expectException(Pop3Exception::class);
        $this->expectExceptionMessage('тест');

        $package->abort('тест');
    }
}
