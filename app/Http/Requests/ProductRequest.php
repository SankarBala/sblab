<?php

namespace App\Http\Requests;

use HTMLPurifier;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {

        //=================================================================
        // Sanitize the tags input
        // Ensure tags is always an array
        $tags = is_array($this->tags) ? $this->tags : json_decode($this->tags, true);

        // If decoding fails, set to empty array
        if (!is_array($tags)) {
            $tags = [];
        }

        // Sanitize and remove empty tags or unwanted content
        $tags = array_map(function ($tag) {
            $tag = strip_tags($tag);
            $filtered = preg_replace('/[^a-zA-Z0-9\s.\-_?&@!()+\/]/', '', $tag);
            return trim($filtered);
        }, $tags);

        // Remove empty tags
        $tags = array_filter($tags, fn($tag) => !empty($tag));

        // Reindex the array and merge back into request
        $this->merge(['tags' => array_values($tags)]);
        //==================================================================

        // =================================================================
        // Sanitize the description input
        // $this->merge(['description' => (new HTMLPurifier())->purify($this->description)]);
        //==================================================================
    }




    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'division' => 'nullable|integer|exists:divisions,id',
            'short_description' => 'nullable|string|max:1000',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => ['nullable', 'array'],
            'categories.*' => ['integer', 'exists:categories,id'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['string', 'min:1', 'max:255'],
            'active' => 'boolean'
        ];
    }
}
