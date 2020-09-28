@php Theme::layout('no-sidebar') @endphp
<section>
    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('themes/ripple/images/img_bg.jpg')">
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
            </div>
        </div>
        <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-2 py-50">
                <div class="left-sidebar">
                    <div class="category py-3">
                        <h2 class="text-uppercase mb-0">Danh mục sản phẩm</h2>
                    </div>
                    <div class="list-category">
                        <a href="#"><span class="icon-next"></span>Rèm vãi</a>
                        <a href="#"><span class="icon-next"></span>Rèm Gỗ</a>
                        <a href="#"><span class="icon-next"></span>Rèm tân cổ điển</a>
                        <a href="#"><span class="icon-next"></span>Rèm sáo gỗ</a>
                        <a href="#"><span class="icon-next"></span>Rèm vãi</a>
                        <a href="#"><span class="icon-next"></span>Rèm vãi</a>
                        <a href="#"><span class="icon-next"></span>Rèm vãi</a>
                    </div>
                </div>
            </div>
            <div class="col-10 py-50 content">
                <div class="row">
                    <div class="col-12 d-flex flex-column align-items-center">
                        <h2 class="mb-3">Sản phẩm của chúng tôi</h2>
                        <p class="text-center">Các sản phẩm của chúng tôi đều ược nhập khẩu chính hãng, có giấy chứng
                            nhận hợp quy của cơ
                            quan chức
                            năng. Sử dụng ván sàn Duy Khươngr mang tới cho bạn một không gian thật sự thoải mái và sang
                            trọng,
                            thân thiện với môi trường, gần gũi hơn với thiên nhiên với các gam màu vân gỗ tự nhiên.</p>
                        <div class="line-icon mt-4"> <span class="icon-icon-3color"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></span></div>
                    </div>
                    <div class="col-12 py-4">
                        <div class="row list-product">
                            <div class="col-12 pb-4">
                                <div><span class="p-2 bg-category">Rèm vãi</span></div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                        </div>
                        <div class="row list-product">
                            <div class="col-12 pb-4">
                                <div><span class="p-2 bg-category">Rèm vãi</span></div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                        </div>
                        <div class="row list-product">
                            <div class="col-12 pb-4">
                                <div><span class="p-2 bg-category">Rèm vãi</span></div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <a href="#">
                                    <img src="{{ Theme::asset()->url('images/rem-vai-15.jpg') }}" alt="rem vai" />
                                </a>
                                <div class="text-center">
                                    <h3 class="product-name py-3 mb-0">Rèm vải RV15</h3>
                                    <p class="product-price">150.000 vnd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>