@extends('layouts.app')

@section('content')

	{{-- cover --}}
	<div class="comic-bar my-bg-primary position-relative">
		<div class="container px-0">
			<div class="row justify-content-center">
				<div class="col-10">
					<div class="comic-cover position-absolute bottom-50 border border-2">
						<img src="{{ $detail['thumb'] }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- info --}}
	<div class="comic-info">
		<div class="container px-0">
			<div class="row justify-content-center py-5">
				<div class="col-10">
					<div class="row">
						<div class="col-8">
							<h1 class="text-uppercase fw-bold my-text-navy">{{ $detail['title'] }}</h1>
							<p class="my-text-grey">{{ $detail['description']}}</p>
						</div>
						<div class="col-4">
							<div class="text-end fw-bold my-text-grey">ADVERTISEMENT</div>
							<a href="#"><img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="" class="w-100"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection