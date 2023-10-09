<?php

namespace DTL\PhpTui\Model;

final class Cell
{
    public function __construct(
        public string $char,
        public Color $fg,
        public Color $bg,
        public Color $underline,
        public Modifiers $modifier
    ) {
    }

    public static function empty(): self
    {
        return new self(' ', AnsiColor::Reset, AnsiColor::Reset, AnsiColor::Reset, Modifiers::None);
    }

    public static function fromChar(string $char): self
    {
        return new self($char, AnsiColor::Reset, AnsiColor::Reset, AnsiColor::Reset, Modifiers::None);
    }

    public function setChar(string $char): void
    {
        $this->char = $char;
    }

    public function setStyle(Style $style): void
    {
        if ($style->fg) {
            $this->fg = $style->fg;
        }
        if ($style->bg) {
            $this->bg = $style->bg;
        }
        if ($style->underline) {
            $this->underline = $style->underline;
        }
        $this->modifier->add($style->addModifier);
        $this->modifier->sub($style->subModifier);
    }
}
