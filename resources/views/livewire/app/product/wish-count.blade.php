<div>
    @auth



        <li class="offcanvas__stikcy--toolbar__list">
            <a class="offcanvas__stikcy--toolbar__btn" href="wishlist.html">
                <span class="offcanvas__stikcy--toolbar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557" viewBox="0 0 18.541 15.557">
                        <path
                            d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z"
                            transform="translate(-62.498 -132.915)" fill="currentColor" />
                    </svg>
                </span>
                @if ($wishCount)
                    <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                    <span class="items__count wishlist__count">{{ $wishCount }}</span>
                @else
                    <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                    <span class="items__count wishlist__count">0</span>
                @endif
            </a>
        </li>

    @endauth

    @guest


        <li class="offcanvas__stikcy--toolbar__list">
            <a class="offcanvas__stikcy--toolbar__btn" href="wishlist.html">
                <span class="offcanvas__stikcy--toolbar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557" viewBox="0 0 18.541 15.557">
                        <path
                            d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z"
                            transform="translate(-62.498 -132.915)" fill="currentColor" />
                    </svg>
                </span>

                <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                <span class="items__count wishlist__count">0</span>

            </a>
        </li>


    @endguest



</div>
