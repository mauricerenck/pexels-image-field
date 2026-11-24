<?php

namespace mauricerenck\PexelsImageField;

use Kirby\Form\Field\InputField;
use Kirby\Reflection\Attributes\Prop;

class PexelsField extends InputField
{
    #[Prop]
    protected string|null $downloadSize = null;

    #[Prop(computed: true)]
    protected string|null $pageId = null;

    protected string $value = '';

    public function downloadSize(): string
    {
        return $this->downloadSize
            ?? $this->kirby()->option('mauricerenck.PexelsImageField.downloadSize', 'large');
    }

    public function pageId(): string
    {
        return $this->model()->id();
    }
}
