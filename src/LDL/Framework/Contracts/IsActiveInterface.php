<?php declare(strict_types=1);

namespace LDL\Framework\Contracts;

interface IsActiveInterface
{
    /**
     * @return bool
     */
    public function isActive() : bool;
}