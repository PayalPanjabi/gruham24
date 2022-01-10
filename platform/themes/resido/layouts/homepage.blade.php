
@if (url()->full() == URL::to('/'."/login"))

    {!! Theme::partial('header') !!}
    @else

{!! Theme::partial('header_new') !!}
{!! Theme::partial('landingpage') !!}


@endif



<div id="app">
    <div id="ismain-homes" style="margin-top: -92px;z-index: -1;">
        {!! Theme::content() !!}
    </div>
</div>

{!! Theme::partial('footer') !!}

