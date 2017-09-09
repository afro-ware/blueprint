<?php

namespace Afroware\Blueprint\Annotation;

/**
 * @Annotation
 */
class Request
{
    /**
     * @var mixed
     */
    public $body;

    /**
     * @var string
     */
    public $contentType = 'application/json';

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var array
     */
    public $headers = [];

    /**
     * @var array<Afroware\Blueprint\Annotation\Attribute>
     */
    public $attributes;
}
