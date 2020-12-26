<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\ProductCategory;

class ProductCategoryForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function persist(ProductCategory $productCategory)
    {
        $productCategory->name = $this->name;
        $productCategory->parent_id = intval($this->parent) > 0 ? $this->parent : null;
        $productCategory->save();
    }


}
