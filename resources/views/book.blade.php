<x-layout title="Home Page">
    @include("partial.header")
    <div class="scroll-section">
        {{-- <section class="p"> --}}
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 ">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <img class="card-img-top w-100" src="{{asset("imgs/psych-money-cover.jpg")}}" alt="..." />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- <div class="small mb-1">SKU: BST-498</div> --}}
                        <h1 class="fw-bold ">Shop item template</h1>
                        <h3 class="">Shop item template</h1>
                        {{-- <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span>
                        </div> --}}
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            {{-- <input class="form-control text-center" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> --}}
                            <button class="btn btn-outline-dark flex-shrink-0 me-3" type="button">
                                <i class="bi bi-book"></i>
                                Read
                            </button>
                            <button class="btn btn-outline-dark flex-shrink-0  " type="button">
                                <i class="bi bi-file-earmark-arrow-down"></i>
                                Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <section class="py-5 bg-light"> --}}
                <div class="container px-4 px-lg-5 mt-5">
                    <h2 class="fw-bolder mb-4">Related books</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="{{asset("imgs/psych-money-cover.jpg")}}" alt="..." />
                                <!-- Product details-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">psycho money</h5>
                                        <div class="fw-bold">Autor</div>
                                        <!-- Product price-->
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </section> --}}
        {{-- </section> --}}
    </div>
    @include("partial.aside")
    @include("partial.bookside")
</x-layout>