<?php

declare(strict_types=1);

use App\Shared\ApplicationParams;
use Yiisoft\View\WebView;

/**
 * @var WebView $this
 * @var ApplicationParams $applicationParams
 */

$this->setTitle($applicationParams->name);
?>

<div class="text-center">
    <h1>Main Page</h1>

    <p>This main page was maden by Kevin Luciano</p>

    <p>
        <a href="https://github.com/kalg12" target="_blank" rel="noopener">
            <i>Follow me on GitHub</i>
        </a>
    </p>
</div>
