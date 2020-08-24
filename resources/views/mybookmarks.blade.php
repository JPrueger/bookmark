@extends ('layouts.master')

@section('container')

<div class="wrapper_whole_content">

    <h1>Five more pages, please.</h1>

    <h2>Your friends suggestions:</h2>

    <h3>Nina’s choice</h3>

    <div class="all_cards">
    
        <div class="card"> 
            <div class="shadow">
                <button class="collapsible">
                  <span class="recommendation_headline">Get together</span>
                  by Jane Doe 
                  <span class="recommendation_headline">Nina’s fast three:</span>
                  surprising, loud, intense
                </button>
            
                <div class="content">
                    <h4>Nina wants you to know</h4>
                    <p>Hi Lisa! When I read the book I totally thought about you, and I am pretty sure you’d like it. It takes place in the South of England in 1960. It is about getting to know your neighbors and inviting them to a get together in the upper district of St. Kilda. Definitely worth a read!
                    </p>             
                </div>

                <svg class="card_arrow_down" width="18.563" height="13.072" viewBox="0 0 18.563 13.072">
                    <defs>
                        <clipPath id="clip-path">
                        <rect width="18.14" height="12.446" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Icon_-_Arrow_Down" data-name="Icon - Arrow Down" transform="translate(18.129 13.072) rotate(-178)" clip-path="url(#clip-path)">
                        <path id="Arrow_Down" data-name="Arrow Down" d="M473.012,48.274q3.824,3.922,7.481,8c-.161-.6-.316-1.2-.477-1.792-.012.043-.019.092-.031.135a1.868,1.868,0,0,0,3.1,1.792c2.729-2.59,4.628-5.867,7.066-8.709,1.541-1.8-1.077-4.413-2.623-2.6-2.432,2.842-4.337,6.125-7.066,8.709,1.033.6,2.067,1.2,3.1,1.792.4-1.694-1.25-2.829-2.283-3.952q-2.775-3.029-5.643-5.966c-1.665-1.712-4.288.89-2.623,2.6Z" transform="translate(-472.48 -44.483)"/>
                    </g>
                </svg>
            </div>
        </div>

        {{-- <div class="card"> 
            <div class="shadow">
                <button class="collapsible">
                    <span class="recommendation_headline">Get together</span>
                    by Jane Doe 
                    <span class="recommendation_headline">Nina’s fast three:</span>
                    surprising, loud, intense
                </button>
            
                <div class="content">
                    <h4>Nina wants you to know</h4>
                    <p>Hi Lisa! When I read the book I totally thought about you, and I am pretty sure you’d like it. It takes place in the South of England in 1960. It is about getting to know your neighbors and inviting them to a get together in the upper district of St. Kilda. Definitely worth a read!
                    </p>             
                </div>

                <svg class="card_arrow_down" width="18.563" height="13.072" viewBox="0 0 18.563 13.072">
                    <defs>
                        <clipPath id="clip-path">
                        <rect width="18.14" height="12.446" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Icon_-_Arrow_Down" data-name="Icon - Arrow Down" transform="translate(18.129 13.072) rotate(-178)" clip-path="url(#clip-path)">
                        <path id="Arrow_Down" data-name="Arrow Down" d="M473.012,48.274q3.824,3.922,7.481,8c-.161-.6-.316-1.2-.477-1.792-.012.043-.019.092-.031.135a1.868,1.868,0,0,0,3.1,1.792c2.729-2.59,4.628-5.867,7.066-8.709,1.541-1.8-1.077-4.413-2.623-2.6-2.432,2.842-4.337,6.125-7.066,8.709,1.033.6,2.067,1.2,3.1,1.792.4-1.694-1.25-2.829-2.283-3.952q-2.775-3.029-5.643-5.966c-1.665-1.712-4.288.89-2.623,2.6Z" transform="translate(-472.48 -44.483)"/>
                    </g>
                </svg>
            </div>
        </div> --}}

    </div>


</div>

@endsection