 @extends('layouts.app')
 @section('content')
     <x-breadcrumb title="{!! $division->name !!}" />
     <div class="shops-section">
         <div class="container">
             <div class="row mb-3">

                 <div class="d-flex justify-content-between">
                     <div class="widget">
                         <form action="{{ route('division', $division) }}" method="get">
                             <div class="input-group mb-3 d-flex justify-content-between">
                                 <input id="search" type="search" class="form-control flex-grow-1 search-input"
                                     placeholder="Search Here" name="search" size="60"
                                     value="{{ request('search') }}" />
                                 <button class="btn btn-info px-3" type="search">Search</button>
                             </div>
                         </form>
                     </div>

                     <div class="widget">
                         <select name="sort" id="sort">
                             <option value="name~asc" {{ request('sort') == 'name~asc' ? 'selected' : '' }}>Sort by Name
                                 (A-Z)</option>
                             <option value="name~desc" {{ request('sort') == 'name~desc' ? 'selected' : '' }}>Sort by Name
                                 (Z-A)</option>
                             <option value="date~asc" {{ request('sort') == 'date~asc' ? 'selected' : '' }}>Sort by Date
                                 (Latest-Oldest)</option>
                             <option value="date~desc" {{ request('sort') == 'date~desc' ? 'selected' : '' }}>Sort by Date
                                 (Oldest-Latest)</option>
                         </select>
                     </div>
                 </div>
             </div>


             <div class="row">
                 @if (count($products) == 0)
                     <div class="col-12">
                         <div class="alert alert-danger">No product found</div>
                     </div>
                 @endif
                 @foreach ($products as $product)
                     @include('components.product', ['product' => $product])
                 @endforeach
             </div>
             <div class="row">
                 <div class="col-12 d-flex justify-content-end">
                     {{ $products->links() }}
                 </div>
             </div>

         </div>
     </div>
 @endsection

 @push('styles')
     <style>
         .search-input {
             color: black !important;
         }
     </style>
 @endpush

 @push('scripts')
     <script>
         $(document).ready(function() {
             $('#sort').change(function() {
                 let search = $('#search').val();
                 let sort = $(this).val();
                 let url = "{{ route('division', $division) }}";
                 if (search) {
                     url += "?search=" + encodeURIComponent(search);
                 }
                 url += (search ? '&' : '?') + "sort=" + encodeURIComponent(sort);
                 window.location.href = url;
             });
         });
     </script>
 @endpush
