<ol class="breadcrumb">

    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Home</a>
    </li>
    @php
        $link = url('/');
    @endphp

    @for($i = 1; $i <= count(Request::segments()); $i++)
        <li class="breadcrumb-item">
            @if($i < count(Request::segments()) & $i > 0) <?php $link .= "/" . Request::segment($i); ?>
            <a href="<?= $link ?>">{{ title_case(Request::segment($i)) }}</a>
            @else {{ title_case(Request::segment($i)) }}
            @endif
        </li>
    @endfor

</ol>