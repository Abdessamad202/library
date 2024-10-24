<x-layout title="Home Page">
    @include("partial.header")
    <div class="scroll-section">
        <div class="row justify-content-center align-items-center">
            <h2 class="mb-3">Recommended</h2>
            <div class="col-3 ">
                <div class="card show">
                    <img src="{{asset("imgs/psych-money-cover.jpg")}}" alt="">
                    <div class="content">
                        <div class="title">psychology of money</div>
                        <div class="autor">name of the autor</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <h2 class="mb-3">Categories</h2>
            <div class="col-3">
                <div class="card">
                    <img src="psych-money-cover.jpg" alt="">
                    <div class="content">
                        <div class="title">psychology of money</div>
                        <div class="autor">name of the autor</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("partial.aside")
        @include("partial.bookside")
</x-layout>