<?php

declare(strict_types=1);

/*
 * This file is part of the Eloquent Viewable package.
 *
 * (c) Cyril de Wit <github@cyrildewit.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CyrildeWit\EloquentViewable;

/**
 * Class ViewsFacade.
 *
 * @author Cyril de Wit <github@cyrildewit.nl>
 */
class Views
{
    protected $viewable;
    protected $tag;

    public function __construct($viewable, $tag = null)
    {
        $this->viewable = $viewable;
    }

    public static function create($viewable, string $tag): self
    {
        return new static($viewable);
    }

    public function addView()
    {
        $this->viewable->addView();
    }

    public function count()
    {
        return $this->viewable->getViews();
    }

    public function getViewsByViewableType(string $viewableType)
    {
        return ViewTracker::getViewsCountByType($viewableType);
    }

    public function getViewsCountByTypes($viewableTypes)
    {
        return ViewTracker::getViewsByViewableTypes($viewableTypes);
    }
}
