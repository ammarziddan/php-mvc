<?php

namespace AmmarZiddan\PHP\MVC\Middleware;

interface Middleware
{
    public function before(): void;
}
