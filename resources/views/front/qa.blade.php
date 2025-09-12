@extends('front.layout')

@section('content')
<div class="max-w-[1440px] mx-auto">

<section class="bg-neutral-200 py-12">          
  <div class="container">                        
    <h2 class="text-yellow-800 text-6xl font-['Zen_Maru_Gothic'] text-center mb-10">
      活動Q&A
    </h2>

    @if(!empty($list))
      <div id="accordion" class="w-100 accordion collapse-set mb-lg-5">
        @foreach ($list as $data)
          <div class="qa-item mb-4 p-3 border border-dark rounded bg-white/60">
            <h3 class="mb-2">Q{{ $loop->iteration }}. {{ $data->title }}</h3>
            <p>{{ $data->content }}</p>
          </div>
        @endforeach
      </div>
    @endif

  </div>
</section>
</div>
@endsection
