<?php
declare(strict_types=1);

namespace App\Format;

interface FormatInterface {
    public function convert(): string;
    public function setData(array $data): void;
}