<div class="card shadow-lg hover-card h-100">
    <img src="{{ $imgSrc }}" class="card-img-top img-fluid" alt="{{ $title }}">
    <div class="card-body ">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $content }}</p>
        <div class="botonesinfo">
            @if (isset($buttonText))
                <a href="{{ url('/servicios')}}" class="btn btn-outline-primary ">{{ $buttonText }}</a>
            @endif
        </div>
    </div>
</div>
