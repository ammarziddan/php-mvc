<?php

namespace AmmarZiddan\PHP\MVC\Controller;

class ProductController
{
    public function categories(string $productId, string $cagtegoryId): void
    {
        echo "PRODUCT $productId, CATEGORY $cagtegoryId";
    }
}
