<?php declare(strict_types=1);

namespace LDL\Framework\Contracts;

interface NamespaceInterface
{
    /**
     * @return string
     */
    public function getNamespace() : string;

    /**
     * @return string
     */
    public function getName() : string;
}