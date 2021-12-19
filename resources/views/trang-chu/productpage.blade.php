@extends('trang-chu.layout.index')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('niceadmin/trang-chu/css/productpage.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel='stylesheet'>

    <div class="product-details-main">
        <div class="container">
            <div class="product-details-box">
                <div class="product-details-img">
                    <img id="product_img" src="{{URL::asset('niceadmin/trang-chu/images/Big_product/scorpion_exo_r420_black_750x750.jpg')}}" alt="helmet" width="80%">
                    <div class="small-img-row">
                        <div class="small-img-colum">
                            <img class="small_img" src="{{URL::asset('niceadmin/trang-chu/images/Big_product/scorpion_exo_r420_white_750x750.jpg')}}" alt="helmet">
                        </div>
                        <div class="small-img-colum">
                            <img class="small_img" src="{{URL::asset('niceadmin/trang-chu/images/Big_product/scorpion_exo_r420_matte_titanium_750x750.jpg')}}" alt="helmet">
                        </div>
                        <div class="small-img-colum">
                            <img class="small_img" src="{{URL::asset('niceadmin/trang-chu/images/Big_product/scorpion_exo_r420_matte_titanium_750x750 (1).jpg')}}" alt="helmet">
                        </div>
                        <div class="small-img-colum">
                            <img class="small_img" src="{{URL::asset('niceadmin/trang-chu/images/Big_product/scorpion_exo_r420_black_750x750.jpg')}}" alt="helmet">
                        </div>
                    </div>
                </div>
                <div class="product-details-in4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                    <h1>Scorpion EXO-R420 Helmet</h1>
                    <div class="price_detail">
                        <h4>$150.00</h4>
                    </div>
                    <h3 class="product-details-title">Product Details</h3>
                    <p>The Scorpion EXO-R420 isn't some half-baked race-inspired helmet.
                        This is the real deal, with an advanced LG polycarbonate shell that is SNELL approved.
                        The Ellip-Tec 2 face shield pulls the shield snug,
                        making the EXO-R420 aerodynamic.
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="size">Size</label>
                            <select id="size" name="size" class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="color">Color</label>
                            <select id="color" name="color" class="form-control">
                                <option>Blue</option>
                                <option>Green</option>
                                <option>Red</option>
                            </select>
                        </div>
                        <div class="product-count">
                            <label for="size">Quantity</label>
                            <form action="#" class="display-flex">
                                <div class="qtyminus">-</div>
                                <input type="text" name="quantity" value="1" class="qty">
                                <div class="qtyplus">+</div>
                            </form>
                            <a href="#" class="round-black-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a id="description-tab" data-toggle="tab" href="#description" role="tab">Description</a>
                    </li>
                    <li class="nav-item">
                        <a id="review-tab" data-toggle="tab" href="#review" role="tab">Reviews (0)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description">
                        The Scorpion EXO-R420 isn't some half-baked race-inspired helmet.
                        This is the real deal, with an advanced LG polycarbonate shell that is SNELL approved.
                        The Ellip-Tec 2 face shield pulls the shield snug,
                        making the EXO-R420 aerodynamic.
                    </div>
                    <div class="tab-pane show fade " id="review">
                        <div class="review-heading">REVIEWS</div>
                        <p class="mb-20">There are no reviews yet.</p>
                        <form class="review-form">
                            <div class="form-group">
                                <label>Your rating</label>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Email Id*">
                                    </div>
                                </div>
                            </div>
                            <button class="round-black-btn">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <! ---- Js for product img ----!>
    <script>
        let ProductImg = document.getElementById("product_img");
        let SmallImg = document.getElementsByClassName("small_img");

        SmallImg[0].onmouseover = function () {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onmouseover = function () {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onmouseover = function () {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onmouseover = function () {
            ProductImg.src = SmallImg[3].src;
        }
    </script>
    <script>
        $("document").ready(function () {
            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
        })

    </script>
@endsection
