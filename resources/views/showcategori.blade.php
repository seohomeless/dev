@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
	
	 
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-body">
				
			  <p> КАТЕГОРИЯ: {{ $category_name }}</p>
	
					@foreach($products as $tovari)
						<div class="tovar"><span class="price">Цена: {{ $tovari->price }} грн.</span>
						<img src="/img/{{ $tovari->photo }}"><a href="/tovar/{{ $tovari->id }}"><h3>{{ $tovari->title }}</h3></a>
						<p>{{ str_limit(strip_tags($tovari->description), 150) }}...
						<p><a href="/tovar/{{ $tovari->id }}">Подробнее</a>
						</div>
					@endforeach

				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection