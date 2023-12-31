@extends('layouts.app')
@section('title', 'Сибирские мухоморы')
@section('meta_description', 'Купить красный мухомор')
@section('content')


    <section id="billboard">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    {{--                <button class="prev slick-arrow">--}}
                    {{--                    <i class="icon icon-arrow-left"></i>--}}
                    {{--                </button>--}}

                    <div class="hero">

                        <div class="hero-content" data-aos="fade-right">
                            <h2 class="hero-title">Сибирские мухоморы</h2>
                            <p class="hero__text" >Грибы собраны в экологически чистой северной части Омской области, в конце сентября-начале октября 2022 года. Ценители знают что западная сибирь - одно из 2-х мест в мире, наряду с прибалтикой, где растут самые сильные по содержанию мускарина мухоморы.</p>
                            {{--                            <div class="btn-wrap">--}}
                            {{--                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i--}}
                            {{--                                        class="icon icon-ns-arrow-right"></i></a>--}}
                            {{--                            </div>--}}
                        </div><!--banner-content-->
                        {{--                        <img src="images/bird.png" alt="banner" class="banner-image">--}}
                        <picture class="hero-img">
                            <source type="image/avif" srcset="images/tmpimg/muhomor@1x.avif 1x, images/tmpimg/muhomor@2x.avif 2x">
                            <img class="picture" src="images/tmpimg/muhomor_fallback.png" srcset="images/tmpimg/muhomor_fallback.png 2x" alt="Мухомор" width="700" height="700">
                        </picture>


                    </div>
                </div>
            </div>

    </section>

    {{--<section id="client-holder" data-aos="fade-up">--}}

    {{--</section>--}}
    <section id="best-selling">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">

                        <a href="{{'/product/'.$buyNowProduct->slug  }}" class="col-md-6">
                            <figure class="products-thumb" data-aos="fade-right">
                                <img src="{{ Storage::url($buyNowProduct->image) }}" alt="Красный мухомор купить" class="single-image">
                            </figure>
                        </a>

                        <div class="col-md-6">
                            <div class="product-entry" data-aos="fade-left">
                                <h2 class="section-title divider">Starter pack</h2>

                                <div class="products-content">
                                    <div class="author-name">{{  $buyNowProduct->name  }}</div>
                                    <h3 class="item-title">{{  $buyNowProduct->weight  }}г.</h3>
                                    <p>{{  $buyNowProduct->description  }}</p>
                                    <div class="item-price">{{  $buyNowProduct->price  }}р.</div>
                                    <div class="btn-wrap">

                                        <a href="cart/{{  $buyNowProduct->id  }}" class="btn-accent-arrow gradient">купить сейчас <i
                                                    class="icon icon-ns-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- / row -->

                </div>

            </div>
        </div>
    </section>
    <section class="packaging">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center" data-aos="fade-up">
                        <div class="title">
                            <span>товары в наличии</span>
                        </div>
                        <h2 class="section-title">Доступные фасовки</h2>
                    </div>

                    @livewire('main-page-goods')

                </div><!--inner-content-->
            </div>

            <div class="row">
                <div class="col-md-12">

                    {{--                <div class="btn-wrap align-right ">--}}
                    {{--                    <a href="#" class="btn-accent-arrow">View all products <i class="icon icon-ns-arrow-right"></i></a>--}}
                    {{--                </div>--}}

                </div>
            </div>
        </div>
    </section>



    {{--<section id="popular-books" class="bookshelf">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-12">--}}

    {{--                <div class="section-header align-center">--}}
    {{--                    <div class="title">--}}
    {{--                        <span>Some quality items</span>--}}
    {{--                    </div>--}}
    {{--                    <h2 class="section-title">Popular Books</h2>--}}
    {{--                </div>--}}

    {{--                <ul class="tabs">--}}
    {{--                    <li data-tab-target="#all-genre" class="active tab">All Genre</li>--}}
    {{--                    <li data-tab-target="#business" class="tab">Business</li>--}}
    {{--                    <li data-tab-target="#technology" class="tab">Technology</li>--}}
    {{--                    <li data-tab-target="#romantic" class="tab">Romantic</li>--}}
    {{--                    <li data-tab-target="#adventure" class="tab">Adventure</li>--}}
    {{--                    <li data-tab-target="#fictional" class="tab">Fictional</li>--}}
    {{--                </ul>--}}

    {{--                <div class="tab-content">--}}
    {{--                    <div id="all-genre" data-tab-content class="active">--}}
    {{--                        <div class="row">--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item1.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Portrait photography</h3>--}}
    {{--                                        <p>Adam Silber</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item2.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Once upon a time</h3>--}}
    {{--                                        <p>Klien Marry</p>--}}
    {{--                                        <div class="item-price">$ 35.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item3.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Tips of simple lifestyle</h3>--}}
    {{--                                        <p>Bratt Smith</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item4.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Just felt from outside</h3>--}}
    {{--                                        <p>Nicole Wilson</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                        <div class="row">--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Peaceful Enlightment</h3>--}}
    {{--                                        <p>Marmik Lama</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item6.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Great travel at desert</h3>--}}
    {{--                                        <p>Sanchit Howdy</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Life among the pirates</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item8.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Simple way of piece life</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                    <div id="business" data-tab-content>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item2.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Peaceful Enlightment</h3>--}}
    {{--                                        <p>Marmik Lama</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item4.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Great travel at desert</h3>--}}
    {{--                                        <p>Sanchit Howdy</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item6.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Life among the pirates</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item8.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Simple way of piece life</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div id="technology" data-tab-content>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item1.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Peaceful Enlightment</h3>--}}
    {{--                                        <p>Marmik Lama</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item3.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Great travel at desert</h3>--}}
    {{--                                        <p>Sanchit Howdy</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Life among the pirates</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Simple way of piece life</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div id="romantic" data-tab-content>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item1.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Peaceful Enlightment</h3>--}}
    {{--                                        <p>Marmik Lama</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item3.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Great travel at desert</h3>--}}
    {{--                                        <p>Sanchit Howdy</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Life among the pirates</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Simple way of piece life</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div id="adventure" data-tab-content>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Life among the pirates</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Simple way of piece life</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div id="fictional" data-tab-content>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Life among the pirates</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-md-3">--}}
    {{--                                <figure class="product-style">--}}
    {{--                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">--}}
    {{--                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to--}}
    {{--                                        Cart--}}
    {{--                                    </button>--}}
    {{--                                    <figcaption>--}}
    {{--                                        <h3>Simple way of piece life</h3>--}}
    {{--                                        <p>Armor Ramsey</p>--}}
    {{--                                        <div class="item-price">$ 40.00</div>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}

    {{--            </div><!--inner-tabs-->--}}

    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}

    {{--<section id="quotation" class="align-center">--}}
    {{--    <div class="inner-content">--}}
    {{--        <h2 class="section-title divider">Quote of the day</h2>--}}
    {{--        <blockquote data-aos="fade-up">--}}
    {{--            <q>“The more that you read, the more things you will know. The more that you learn, the more places you’ll--}}
    {{--                go.”</q>--}}
    {{--            <div class="author-name">Dr. Seuss</div>--}}
    {{--        </blockquote>--}}
    {{--    </div>--}}
    {{--</section>--}}

    {{--<section id="special-offer" class="bookshelf">--}}

    {{--    <div class="section-header align-center">--}}
    {{--        <div class="title">--}}
    {{--            <span>Grab your opportunity</span>--}}
    {{--        </div>--}}
    {{--        <h2 class="section-title">Books with offer</h2>--}}
    {{--    </div>--}}

    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="inner-content">--}}
    {{--                <div class="product-list" data-aos="fade-up">--}}
    {{--                    <div class="grid product-grid">--}}
    {{--                        <figure class="product-style">--}}
    {{--                            <img src="images/product-item5.jpg" alt="Books" class="product-item">--}}
    {{--                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart--}}
    {{--                            </button>--}}
    {{--                            <figcaption>--}}
    {{--                                <h3>Simple way of piece life</h3>--}}
    {{--                                <p>Armor Ramsey</p>--}}
    {{--                                <div class="item-price">--}}
    {{--                                    <span class="prev-price">$ 50.00</span>$ 40.00--}}
    {{--                                </div>--}}
    {{--                            </figcaption>--}}
    {{--                        </figure>--}}

    {{--                        <figure class="product-style">--}}
    {{--                            <img src="images/product-item6.jpg" alt="Books" class="product-item">--}}
    {{--                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart--}}
    {{--                            </button>--}}
    {{--                            <figcaption>--}}
    {{--                                <h3>Great travel at desert</h3>--}}
    {{--                                <p>Sanchit Howdy</p>--}}
    {{--                                <div class="item-price">--}}
    {{--                                    <span class="prev-price">$ 30.00</span>$ 38.00--}}
    {{--                                </div>--}}
    {{--                            </figcaption>--}}
    {{--                        </figure>--}}

    {{--                        <figure class="product-style">--}}
    {{--                            <img src="images/product-item7.jpg" alt="Books" class="product-item">--}}
    {{--                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart--}}
    {{--                            </button>--}}
    {{--                            <figcaption>--}}
    {{--                                <h3>The lady beauty Scarlett</h3>--}}
    {{--                                <p>Arthur Doyle</p>--}}
    {{--                                <div class="item-price">--}}
    {{--                                    <span class="prev-price">$ 35.00</span>$ 45.00--}}
    {{--                                </div>--}}
    {{--                            </figcaption>--}}
    {{--                        </figure>--}}

    {{--                        <figure class="product-style">--}}
    {{--                            <img src="images/product-item8.jpg" alt="Books" class="product-item">--}}
    {{--                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart--}}
    {{--                            </button>--}}
    {{--                            <figcaption>--}}
    {{--                                <h3>Once upon a time</h3>--}}
    {{--                                <p>Klien Marry</p>--}}
    {{--                                <div class="item-price">--}}
    {{--                                    <span class="prev-price">$ 25.00</span>$ 35.00--}}
    {{--                                </div>--}}
    {{--                            </figcaption>--}}
    {{--                        </figure>--}}

    {{--                        <figure class="product-style">--}}
    {{--                            <img src="images/product-item2.jpg" alt="Books" class="product-item">--}}
    {{--                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart--}}
    {{--                            </button>--}}
    {{--                            <figcaption>--}}
    {{--                                <h3>Simple way of piece life</h3>--}}
    {{--                                <p>Armor Ramsey</p>--}}
    {{--                                <div class="item-price">$ 40.00</div>--}}
    {{--                            </figcaption>--}}
    {{--                        </figure>--}}
    {{--                    </div><!--grid-->--}}
    {{--                </div>--}}
    {{--            </div><!--inner-content-->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}

    {{--<section id="subscribe">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}

    {{--            <div class="col-md-8 col-md-offset-2">--}}
    {{--                <div class="row">--}}

    {{--                    <div class="col-md-6">--}}

    {{--                        <div class="title-element">--}}
    {{--                            <h2 class="section-title divider">Subscribe to our newsletter</h2>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                    <div class="col-md-6">--}}

    {{--                        <div class="subscribe-content" data-aos="fade-up">--}}
    {{--                            <p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit--}}
    {{--                                adipiscing enim pharetra hac.</p>--}}
    {{--                            <form id="form">--}}
    {{--                                <input type="text" name="email" placeholder="Enter your email addresss here">--}}
    {{--                                <button class="btn-subscribe">--}}
    {{--                                    <span>send</span>--}}
    {{--                                    <i class="icon icon-send"></i>--}}
    {{--                                </button>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}

    {{--<section id="latest-blog">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-12">--}}

    {{--                <div class="section-header align-center">--}}
    {{--                    <div class="title">--}}
    {{--                        <span>Read our articles</span>--}}
    {{--                    </div>--}}
    {{--                    <h2 class="section-title">Latest Articles</h2>--}}
    {{--                </div>--}}

    {{--                <div class="row">--}}

    {{--                    <div class="col-md-4">--}}

    {{--                        <article class="column" data-aos="fade-up">--}}

    {{--                            <figure>--}}
    {{--                                <a href="#" class="image-hvr-effect">--}}
    {{--                                    <img src="images/post-img1.jpg" alt="post" class="post-image">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}

    {{--                            <div class="post-item">--}}
    {{--                                <div class="meta-date">Mar 30, 2021</div>--}}
    {{--                                <h3><a href="#">Reading books always makes the moments happy</a></h3>--}}

    {{--                                <div class="links-element">--}}
    {{--                                    <div class="categories">inspiration</div>--}}
    {{--                                    <div class="social-links">--}}
    {{--                                        <ul>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-facebook"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-twitter"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-behance-square"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div><!--links-element-->--}}

    {{--                            </div>--}}
    {{--                        </article>--}}

    {{--                    </div>--}}
    {{--                    <div class="col-md-4">--}}

    {{--                        <article class="column" data-aos="fade-down">--}}
    {{--                            <figure>--}}
    {{--                                <a href="#" class="image-hvr-effect">--}}
    {{--                                    <img src="images/post-img2.jpg" alt="post" class="post-image">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}
    {{--                            <div class="post-item">--}}
    {{--                                <div class="meta-date">Mar 29, 2021</div>--}}
    {{--                                <h3><a href="#">Reading books always makes the moments happy</a></h3>--}}

    {{--                                <div class="links-element">--}}
    {{--                                    <div class="categories">inspiration</div>--}}
    {{--                                    <div class="social-links">--}}
    {{--                                        <ul>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-facebook"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-twitter"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-behance-square"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div><!--links-element-->--}}

    {{--                            </div>--}}
    {{--                        </article>--}}

    {{--                    </div>--}}
    {{--                    <div class="col-md-4">--}}

    {{--                        <article class="column" data-aos="fade-up">--}}
    {{--                            <figure>--}}
    {{--                                <a href="#" class="image-hvr-effect">--}}
    {{--                                    <img src="images/post-img3.jpg" alt="post" class="post-image">--}}
    {{--                                </a>--}}
    {{--                            </figure>--}}
    {{--                            <div class="post-item">--}}
    {{--                                <div class="meta-date">Feb 27, 2021</div>--}}
    {{--                                <h3><a href="#">Reading books always makes the moments happy</a></h3>--}}

    {{--                                <div class="links-element">--}}
    {{--                                    <div class="categories">inspiration</div>--}}
    {{--                                    <div class="social-links">--}}
    {{--                                        <ul>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-facebook"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-twitter"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#"><i class="icon icon-behance-square"></i></a>--}}
    {{--                                            </li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div><!--links-element-->--}}

    {{--                            </div>--}}
    {{--                        </article>--}}

    {{--                    </div>--}}

    {{--                </div>--}}

    {{--                <div class="row">--}}

    {{--                    <div class="btn-wrap align-center">--}}
    {{--                        <a href="#" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">Read All Articles<i--}}
    {{--                                class="icon icon-ns-arrow-right"></i></a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}

    {{--<section id="download-app" class="leaf-pattern-overlay">--}}
    {{--    <div class="corner-pattern-overlay"></div>--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-8 col-md-offset-2">--}}
    {{--                <div class="row">--}}

    {{--                    <div class="col-md-5">--}}
    {{--                        <figure>--}}
    {{--                            <img src="images/device.png" alt="phone" class="single-image">--}}
    {{--                        </figure>--}}
    {{--                    </div>--}}

    {{--                    <div class="col-md-7">--}}
    {{--                        <div class="app-info">--}}
    {{--                            <h2 class="section-title divider">Download our app now !</h2>--}}
    {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus--}}
    {{--                                nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames--}}
    {{--                                semper erat ac in suspendisse iaculis.</p>--}}
    {{--                            <div class="google-app">--}}
    {{--                                <img src="images/google-play.jpg" alt="google play">--}}
    {{--                                <img src="images/app-store.jpg" alt="app store">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}


    @include('mobile-cart')
@endsection
