@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
        <div class="col-1 mr-3 mr-md-0">
            <a href="{{ url()->previous() }}" class="h1"><i class="fas fa-arrow-circle-left"></i></a>
        </div>
        <div class="col-10 mb-3">
            <h1>Ogłoszenia użytkownika {{ $user->username }}</h1>
        </div>
    </div>
        
    <div class="row">
        @if($items->count() == 0)
            <b>Brak ogłoszeń.</b>
        @else
            @foreach($items as $item)
                <div class="col-6 col-md-4 col-lg-3 pb-4">
                    <a href="{{ route('item.show', $item) }}">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/wymianaUzywanychTowarow/public/storage/uploads/thumbnails/{{ $item->image }}" alt="">

                            <div class="card-body pb-0">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
    
    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $items->links() }}
        </div>
    </div>

</div>
@endsection
