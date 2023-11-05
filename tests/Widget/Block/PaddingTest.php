<?php

namespace PhpTui\Tui\Tests\Widget\Block;

use PHPUnit\Framework\TestCase;
use PhpTui\Tui\Widget\Block\Padding;

class PaddingTest extends TestCase
{
    public function testAll(): void
    {
        $all = Padding::all(2);
        self::assertEquals(2, $all->top);
        self::assertEquals(2, $all->bottom);
        self::assertEquals(2, $all->left);
        self::assertEquals(2, $all->right);
    }
}