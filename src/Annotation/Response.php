<?php

namespace Afroware\Blueprint\Annotation;

/**
 * @Annotation
 */
class Response
{
    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $contentType = 'application/json';

    /**
     * @var mixed
     */
    public $body;

    /**
     * @var array
     */
    public $headers = [];

    /**
     * @var array<Afroware\Blueprint\Annotation\Attribute>
     */
    public $attributes;
}
