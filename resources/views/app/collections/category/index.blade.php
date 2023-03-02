@extends('layouts.frontend')

@section('title')
    Kategoriler
@endsection

@section('css')
@endsection

@section('style')
@endsection



@section('content')


    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->


        <!-- Start shop section -->
        <section class="shop__section section--padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div
                            class="shop__header shop__header--style2 bg__gray--color d-flex align-items-center justify-content-between mb-30">

                            <div class="product__view--mode__list">
                                <div
                                    class="product__tab--one product__grid--column__buttons d-flex justify-content-center">

                                    <p class="product__showing--count"><b>{{$categories->count()}} </b> Kategori Bulunmaktadır.</p>
                                
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="shop__product--wrapper">
                        <div class="tab_content">
                            <div id="product_grid" class="tab_pane active show">
                                <div class="product__section--inner product__grid--inner">
                                    <div class="row row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-2 mb--n30">
                                        @if ($categories)
                                            @foreach ($categories as $category)
                                                <div class="col custom-col-2 mb-30">
                                                    <article class="product__card">
                                                        <div class="product__card--thumbnail">
                                                            <a class="product__card--thumbnail__link display-block"
                                                                href="#">
                                                                <img class="product__card--thumbnail__img product__primary--img display-block"
                                                                    src="{{asset('uploads/category/'.$category->image)}}"
                                                                    alt="product-img">
                                                                <img class="product__card--thumbnail__img product__secondary--img display-block"
                                                                    src="{{asset('uploads/category/'.$category->image)}}"
                                                                    alt="product-img">
                                                            </a>
                                                            <ul
                                                                class="product__card--action d-flex align-items-center justify-content-center">
                                                            
                                                                
                                                            </ul>
                                                         
                                                        </div>
                                                        <div class="product__card--content text-center">
                                                            <span class="product__card--meta__tag"></span>
                                                            <h3 class="product__card--title"><a
                                                                    href="{{route('list.category.app',$category->slug)}}">{{$category->name}} </a></h3>
                                                            <div class="product__card--price">
                                                            
                                                            </div>
                                                            <a class="product__card--btn primary__btn" href="{{route('list.category.app',$category->slug)}}">Kategoriyi Gör</a>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-12">
                                                <div
                                                    class="shop__header shop__header--style2 bg__gray--color d-flex align-items-center justify-content-between mb-30">

                                                    <div class="product__view--mode__list">
                                                        <div
                                                            class="product__tab--one product__grid--column__buttons d-flex justify-content-center">

                                                            <div class="alert alert-danger"> No Result</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif




                                    </div>
                                    <div class="pagination__area bg__gray--color">
                                        <nav class="pagination justify-content-center">
                                            <ul
                                                class="pagination__wrapper d-flex align-items-center justify-content-center">
                                                <li class="pagination__list">
                                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="48"
                                                                d="M244 400L100 256l144-144M120 256h292" />
                                                        </svg>
                                                        <span class="visually-hidden">pagination arrow</span>
                                                    </a>
                                                <li>
                                                <li class="pagination__list"><span
                                                        class="pagination__item pagination__item--current">1</span></li>
                                                <li class="pagination__list"><a href="shop.html"
                                                        class="pagination__item link">2</a></li>
                                                <li class="pagination__list"><a href="shop.html"
                                                        class="pagination__item link">3</a></li>
                                                <li class="pagination__list"><a href="shop.html"
                                                        class="pagination__item link">4</a></li>
                                                <li class="pagination__list">
                                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="48"
                                                                d="M268 112l144 144-144 144M392 256H100" />
                                                        </svg>
                                                        <span class="visually-hidden">pagination arrow</span>
                                                    </a>
                                                <li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- End shop section -->

    </main>




@endsection







@section('js')
@endsection


@section('script')
@endsection
