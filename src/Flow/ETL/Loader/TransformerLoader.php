<?php

declare(strict_types=1);

namespace Flow\ETL\Loader;

use Flow\ETL\Loader;
use Flow\ETL\Rows;
use Flow\ETL\Transformer;

final class TransformerLoader implements Loader
{
    private Transformer $transformer;

    private Loader $loader;

    public function __construct(Transformer $transformer, Loader $loader)
    {
        $this->transformer = $transformer;
        $this->loader = $loader;
    }

    public function load(Rows $rows) : void
    {
        $this->loader->load($this->transformer->transform($rows));
    }
}
