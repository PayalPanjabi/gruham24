<div class="property_block_wrap style-2">

    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title">{{ __('Detail & Features') }}</h4>
        </a>
    </div>
    <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
        <div class="block-body">
            <!--  -->
            
            <ul class="detail_features">
                @if ($property->category)
                <li><strong>{{ __('Property Type:') }}</strong>{{ $property->category_name }}</li>
                @endif
                
              
            </ul>
        </div>
    </div>

</div>
<div class="property_block_wrap style-2">

    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#cltwo"
         aria-controls="cltwo" href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title">{{ __('1 BHK Flat Details') }}</h4>
        </a>
    </div>
    <div id="cltwo" class="panel-collapse collapse show" aria-labelledby="cltwo">
        <div class="block-body">
            
            <ul class="detail_features">
              
                @if ($property->number_bedroom)
                <li> 
                    <strong>{{ __('Bedrooms:') }}</strong>
                    {{ number_format($property->number_bedroom) }} {{ __('Beds') }}
                </li>
                @endif
                @if ($property->number_bathroom)
                <li>
                    <strong>{{ __('Bathrooms:') }}</strong>
                    {{ number_format($property->number_bathroom) }} {{ __('Bath') }}
                </li>
                @endif
                @if ($property->square)
                <li>
                    <strong>{{ __('Square:') }}</strong>{{ $property->square }} {{ __('sqft') }}
                </li>
                @endif
                @if ($property->number_floor)
                <li>
                    <strong>{{ __('Floors:') }}</strong>{{ number_format($property->number_floor) }}
                </li>
                @endif

                @if ($property->price)
                <li>
                    <strong>{{ __('1 BHK Price:') }}</strong>{{ ($property->price) }}
                </li>
                @endif
              
            </ul>
        </div>
    </div>

</div>
<div class="property_block_wrap style-2">

    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clthree" 
        aria-controls="clthree" href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title">{{ __('2 BHK Flat Details') }}</h4>
        </a>
    </div>
    <div id="clthree" class="panel-collapse collapse show" aria-labelledby="clthree">
        <div class="block-body">
          
            <ul class="detail_features">
              
                @if ($property->two_bedroom)
                <li> 
                    <strong>{{ __('Bedrooms:') }}</strong>
                    {{ number_format($property->two_bedroom) }} {{ __('Beds') }}
                </li>
                @endif
                @if ($property->two_bathroom)
                <li>
                    <strong>{{ __('Bathrooms:') }}</strong>
                    {{ number_format($property->two_bathroom) }} {{ __('Bath') }}
                </li>
                @endif

                @if ($property->two_bhk_square)
                <li>
                    <strong>{{ __('Square:') }}</strong>{{ $property->two_bhk_square }} {{ __('sqft') }}
                </li>
                @endif
                @if ($property->two_floor)
                <li>
                    <strong>{{ __('Floors:') }}</strong>{{ number_format($property->two_floor) }}
                </li>
                @endif

                @if ($property->two_bhk_price)
                <li>
                    <strong>{{ __('2 BHK Price:') }}</strong>{{ ($property->two_bhk_price) }}
                </li>
                @endif
              
            </ul>
        </div>
    </div>

</div> 

<div class="property_block_wrap style-2">

    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clfour" 
        aria-controls="clfour" href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title">{{ __('3 BHK Flat Details') }}</h4>
        </a>
    </div>
    <div id="clfour" class="panel-collapse collapse show" aria-labelledby="clfour">
        <div class="block-body">
          
            <ul class="detail_features">
              
                @if ($property->three_bedroom)
                <li> 
                    <strong>{{ __('Bedrooms:') }}</strong>
                    {{ number_format($property->three_bedroom) }} {{ __('Beds') }}
                </li>
                @endif
                @if ($property->three_bathroom)
                <li>
                    <strong>{{ __('Bathrooms:') }}</strong>
                    {{ number_format($property->three_bathroom) }} {{ __('Bath') }}
                </li>
                @endif

                @if ($property->three_bhk_square)
                <li>
                    <strong>{{ __('Square:') }}</strong>{{ $property->three_bhk_square }} {{ __('sqft') }}
                </li>
                @endif
                @if ($property->three_floor)
                <li>
                    <strong>{{ __('Floors:') }}</strong>{{ number_format($property->three_floor) }}
                </li>
                @endif

                @if ($property->three_bhk_price)
                <li>
                    <strong>{{ __('3 BHK Price:') }}</strong>{{ ($property->three_bhk_price)  }}
                </li>
                @endif
              
            </ul>
        </div>
    </div>

</div> 

<div class="property_block_wrap style-2">

    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clfive" 
        aria-controls="clfive" href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title">{{ __('4 BHK Flat Details') }}</h4>
        </a>
    </div>
    <div id="clfive" class="panel-collapse collapse show" aria-labelledby="clfive">
        <div class="block-body">
          
            <ul class="detail_features">
              
                @if ($property->four_bedroom)
                <li> 
                    <strong>{{ __('Bedrooms:') }}</strong>
                    {{ number_format($property->four_bedroom) }} {{ __('Beds') }}
                </li>
                @endif
                @if ($property->four_bathroom)
                <li>
                    <strong>{{ __('Bathrooms:') }}</strong>
                    {{ number_format($property->four_bathroom) }} {{ __('Bath') }}
                </li>
                @endif

                @if ($property->four_bhk_square)
                <li>
                    <strong>{{ __('Square:') }}</strong>{{ $property->four_bhk_square }} {{ __('sqft') }}
                </li>
                @endif
                @if ($property->four_floor)
                <li>
                    <strong>{{ __('Floors:') }}</strong>{{ number_format($property->four_floor) }}
                </li>
                @endif

                @if ($property->four_bhk_price)
                <li>
                    <strong>{{ __('4 BHK Price:') }}</strong>{{ ($property->four_bhk_price)  }}
                </li>
                @endif
              
            </ul>
        </div>
    </div>

</div> 