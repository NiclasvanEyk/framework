<?php

namespace Illuminate\Database\Eloquent\Factories;

trait HasRealTimeFactory
{
    /**
     * Get a new factory instance for the model.
     *
     * @param  callable|array|int|null  $count
     * @param  callable|array  $state
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    public static function factory($count = null, $state = [])
    {
        return (new RealTimeFactory)
            ->forModel(static::class)
            ->configure()
            ->count(is_numeric($count) ? $count : null)
            ->state(is_callable($count) || is_array($count) ? $count : $state);
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return (new RealTimeFactory)
            ->forModel(get_called_class())
            ->configure();
    }
}
