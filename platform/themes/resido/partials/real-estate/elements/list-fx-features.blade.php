<div class="list-fx-features">
    @if ($property->one_bhk_flat)
    <div class="listing-card-info-icon">
        <div class="inc-fleat-icon"><img src="{{ Theme::asset()->url('img/move.svg') }}" width="13" alt=""></div>
        {{ number_format($property->one_bhk_flat) }} {{ __('BHK') }}
    </div>
    @endif
    @if ($property->two_bhk_flat)
    <div class="listing-card-info-icon">
        <div class="inc-fleat-icon"><img src="{{ Theme::asset()->url('img/move.svg') }}" width="13" alt="">
        </div>{{ number_format($property->two_bhk_flat) }} {{ __('BHK') }}
    </div>
    @endif
    @if ($property->three_bhk_flat)
    <div class="listing-card-info-icon">
        <div class="inc-fleat-icon"><img src="{{ Theme::asset()->url('img/move.svg') }}" width="13" alt=""></div>
        {{ number_format($property->three_bhk_flat) }} {{ __('BHK') }}
    </div>
    @endif
    @if ($property->four_bhk_flat)
    <div class="listing-card-info-icon">
        <div class="inc-fleat-icon"><img src="{{ Theme::asset()->url('img/move.svg') }}" width="13" alt=""></div>
        {{ number_format($property->four_bhk_flat) }} {{ __('BHK') }}
    </div>
    @endif
</div>