<div class="header">


    @auth

    <div class="header-top">

        <div>
            <a href="{{route('customers.index')}}" class="header-button">Customer</a>
            <a href="{{route('items.index')}}" class="header-button">Items</a>
            
        </div>

        <div>

            <a href="{{route('meets.index')}}" class="header-button">My Meets</a>
            <a href="{{route('history.index')}}" class="header-button">History</a>        

        </div>

        <div>
            <a href="{{route('sold.index')}}" class="header-button">Sold</a>
            <a href="{{route('needs.index')}}" class="header-button">Needs</a>
        </div>

    </div>

    <div class="header-bottom">

        <div>
            <!-- <a href="#"></a> -->
            <a href="{{route('howmany.index')}}" class="header-button">How Many</a>
        </div>

        <div class="title-container">
            <a href="{{route('auth.users')}}" >@include('settings-button')</a>
        </div>

        <div>
                <form action="{{route('auth.logout')}}" method="post">
                    @csrf

                    @include('batman-button')

                </form>
        </div>

    </div>

    @else

        <div class="no-auth">
                <a href="{{route('auth.login')}}">@include('login')</a>
                <a href="{{route('auth.signup')}}">@include('signup-button1')</a>
        </div>

    @endauth

</div>