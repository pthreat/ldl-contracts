<?php declare(strict_types=1);

namespace LDL\Framework\Contracts;

interface LockableObjectInterface{
    /**
     * Locks an object
     *
     * @throws \Exception if the object is already locked
     * @return mixed
     */
    public function lock();

    /**
     * Let's the user know if the the object is locked or not
     * @return bool
     */
    public function isLocked(): bool;
}