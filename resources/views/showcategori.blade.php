@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
	
	 
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-body">
				
				@foreach($showcategori as $showcategor)
						 {{ $showcategor->tovar_id }} 
						 
							@foreach($showcategor->tovarishow as $tovari)
								<h2>{{ $tovari->title }} </h2>
								<h4>{{ $tovari->id }} </h4>
									{{ $tovari->description }} 
						 	@endforeach
					
					@endforeach
				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection