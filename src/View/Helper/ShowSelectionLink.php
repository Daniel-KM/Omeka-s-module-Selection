<?php declare(strict_types=1);

namespace Selection\View\Helper;

use Laminas\View\Helper\AbstractHelper;

class ShowSelectionLink extends AbstractHelper
{
    /**
     * The default partial view script.
     */
    const PARTIAL_NAME = 'common/selection-link';

    /**
     * Get the link to the user selection.
     *
     * @param array $options Options for the partial.
     * @return string
     */
    public function __invoke(array $options = [])
    {
        $view = $this->getView();
        $template = $options['template'] ?? self::PARTIAL_NAME;
        unset($options['template']);
        return $view->partial($template, $options);
    }
}
