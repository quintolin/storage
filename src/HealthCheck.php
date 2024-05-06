<?php

declare(strict_types=1);

namespace Quintolin\Storage;

use Override;
use Quintolin\Core\StorageHealthCheckInterface;

final class HealthCheck implements StorageHealthCheckInterface
{
    #[Override]
    public function __invoke(): bool
    {
        return true;
    }
}
