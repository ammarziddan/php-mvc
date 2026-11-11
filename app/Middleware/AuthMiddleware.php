<?php

namespace AmmarZiddan\PHP\MVC\Middleware;

use Override;

class AuthMiddleware implements Middleware
{
    #[Override]
    public function before(): void
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}
