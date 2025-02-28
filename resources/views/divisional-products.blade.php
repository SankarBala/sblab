 @extends('layouts.app')
 @section('content')
     <x-breadcrumb title="{!!$division->name!!}" />
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
                 @foreach ($products as $product)
                     <div class="col-lg-3 col-md-6">
                         <div class="single-products-box">
                             <!-- products thumb -->
                             <div class="products-thumb">
                                 <a href="{{ route('product', $product) }}">
                                     <img src="https://image01-in.oneplus.net/media/202406/19/ec64eb41a8e787a798be1b71c13a51bb.png?x-amz-process=image/format,webp/quality,Q_80"
                                         alt="">
                                 </a>
                                 <!-- product sale -->
                                 <div class="product-sale">
                                     <span> BDT {{ number_format($product->price, 2) }} Tk. </span>
                                 </div>
                                 <!-- product thumb -->
                                 {{-- <div class="product-thumb-icon">
                                     <a href="cart.html"> <i class="bi bi-cart3"></i> </a>
                                     <a href="shop-details.html"> <i class="bi bi-suit-heart"></i> </a>
                                 </div> --}}
                             </div>
                             <!-- products content -->
                             <div class="product-content text-start">
                                 <!-- product list -->
                                 {{-- <ul class="product-rating">
                                     <li><i class="bi bi-star-fill"></i></li>
                                     <li><i class="bi bi-star-fill"></i></li>
                                     <li><i class="bi bi-star-fill"></i></li>
                                     <li><i class="bi bi-star-fill"></i></li>
                                     <li><i class="bi bi-star-half"></i></li>
                                 </ul> --}}
                                 <div class="product-title">
                                     <a href="{{ route('product', $product) }}">
                                         <h6 class=""> {{ $product->name }} </h6>
                                     </a>
                                 </div>
                                 <!-- product text -->
                                 <div class="product-price">
                                     <a href="{{ route('division', $product->division) }}">
                                         <p class="fw-bold">{{ $product->division->name }}</p>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
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
