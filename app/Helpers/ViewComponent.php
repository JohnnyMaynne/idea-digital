<?php

namespace App\Helpers;

use Illuminate\Contracts\View\View;
use Illuminate\View\ComponentAttributeBag;

class ViewComponent
{
    /**
     * Render a blade component.
     * @param string $name Component name, exclude component folder (i.e use "card" instead of "components.card")
     * @param array $props Component properties
     * @param array $attributes Component attributes
     * @return View
     */
    public static function render(string $name, array $props = [], array $attributes = []): View
    {
        $className = collect(explode('.', $name))->map(function($part) {
            return \Str::studly($part);
        })->join('\\');
        $className = "App\\View\\Components\\{$className}";
        if(class_exists($className)) {
            $reflection = (new \ReflectionClass($className))->getConstructor();
            $parameters = [];
            foreach ($reflection->getParameters() as $param) {
                $parameters[] = $props[$param->name] ?? $param->getDefaultValue();
            }
            $component = new $className(...$parameters);
            $component->withAttributes($attributes);
            return $component->render()->with($component->data());
        }

        $props['attributes'] = new ComponentAttributeBag($attributes);
        return view("components.$name", $props);
    }

}
