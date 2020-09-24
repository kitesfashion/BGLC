@extends('frontend.master')

@section('mainContent')
	<section class="section section-top" id="history">
      <div class="container">
        <div class="row justify-content-center mt_3rem">
          <div class="col-md-12 col-lg-9">
            <h2 class="text-center mb-4 col_title">
            </h2>
            <p class="text-muted text-justify mb-2">
	            @php
	            	echo @$visa->innerDescription;
	            @endphp
            </p>
          </div>
        </div>
      </div>
    </section>
@endsection
