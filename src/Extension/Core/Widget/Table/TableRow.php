<?php

declare(strict_types=1);

namespace PhpTui\Tui\Extension\Core\Widget\Table;

use PhpTui\Tui\Model\Style;

final class TableRow
{
    /**
     * @param list<TableCell> $cells
     */
    private function __construct(
        public array $cells,
        public int $height,
        public int $bottomMargin,
        public Style $style,
    ) {
    }

    public static function fromCells(TableCell ...$cells): self
    {
        return new self(array_values($cells), 1, 0, Style::default());
    }

    public static function fromStrings(string ...$strings): self
    {
        return new self(array_map(function (string $string) {
            return TableCell::fromString($string);
        }, array_values($strings)), 1, 0, Style::default());
    }

    public function totalHeight(): int
    {
        return $this->height + $this->bottomMargin;
    }

    public function getCell(int $index): ?TableCell
    {
        if (!isset($this->cells[$index])) {
            return null;
        }

        return $this->cells[$index];
    }

    public function bottomMargin(int $bottomMargin): self
    {
        $this->bottomMargin = $bottomMargin;

        return $this;
    }

    public function height(int $height): self
    {
        $this->height = $height;

        return $this;
    }
}
