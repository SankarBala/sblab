@foreach ($categories as $category)
    <div class="custom-control custom-checkbox py-1">
        <input class="custom-control-input category-checkbox" type="checkbox" id="category_{{ $category->id }}"
            name="categories[]" value="{{ $category->id }}"
            {{ in_array($category->id, $selectedCategories ?? []) ? 'checked' : '' }} />
        <label for="category_{{ $category->id }}" class="custom-control-label text-uppercase">
            {{ $category->name }}
        </label>
    </div>

    @if ($category->children->isNotEmpty() && $depth > 0)
        <div class="pl-4 child-categories">
            @include('admin.partials.category-select', [
                'categories' => $category->children,
                'depth' => $depth - 1,
            ])
        </div>
    @endif
@endforeach

@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-multiselect.css') }}">
        <style>
            .category_input_wrapper {
                max-height: 300px;
                overflow-y: hidden;
                border: 1px dashed gray;
                overflow: auto;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .category-checkbox {
                position: relative;
                z-index: -1;
                width: 1rem;
                height: 1.25rem;
                opacity: 0;

            }
        </style>
    @endpush

    @push('scripts')
        <script src="{{ asset('dist/js/bootstrap-multiselect.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#multiple-checkboxes').multiselect({
                    includeSelectAllOption: false,
                });
            });
        </script>
    @endpush
@endonce
