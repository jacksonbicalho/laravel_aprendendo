<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class SelectComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($empty, $options, $label, $value, $selected = null)
    {
        $this->selected = $selected;

        if (is_array($selected)) {
            $_values = ${$selected[0]};
            $campo = $selected[1];

            foreach ($_values as $_value) {
                if (!is_null($_value->$campo)) {
                    $this->selected = $_value->$campo;
                    break;
                }

            }
        }

        $this->empty = $empty;
        $this->options = $options;
        $this->label = $label;
        $this->value = $value;

    }

    /**
     * Determine if the given option is the current selected option.
     *
     * @param  string  $option
     * @return bool
     */
    public function isSelected($option)
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.select', [
            'options' => $this->options,
            'label' => $this->label,
            'value' => $this->value
        ]);
    }
}
