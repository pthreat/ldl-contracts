<?php declare(strict_types=1);

namespace LDL\Framework\Contracts;

interface PriorityInterface
{
    public function getPriority() : int;
}