<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert extends Component
{
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                break;
            case 'danger':
                $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
                break;
            case 'success':
                $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
                break;
            case 'warning':
                $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
                break;
            default:
                $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-400';
                break;
        }
        $this->class = $class;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
