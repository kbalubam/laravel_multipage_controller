@extends('welcome')
@section('content')

@foreach ($tabAbout as $items )
    
  

<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src={{$items->imgA1}} alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$items->spanA1}}</span>
                <span class="section-heading-lower">{{$items->spanA2}}</span>
              </h2>
              <p>{{$items->pA1}}</p>
              <p class="mb-0">{{$items->pA21}}<em>{{$items->emA1}}</em> {{$items->pA22}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  @endsection