@extends("front.layout")
@section("content")
<h2 class="text-center title mb-5 mt-lg-5">活動Q&A</h2>
<div class="col-xxl-10 col-lg-11 col-sm-11 col-xs-12 px-xl-3  mx-auto">
    <div class="w-100 accordion collapse-set mb-lg-5" id="accordion">
        @if(!empty($list))
        @php $cnt=0; @endphp
        @foreach ($list as $data)
        @php $cnt++; @endphp

        <div class="qa-list col-xxl-10 col-lg-11 col-sm-11 col-xs-12 px-xl-3 mx-auto " > 
            <div class="qa-item mb-4 p-3 border border-dark rounded "style="background-color: rgba(255,255,255,0.6)">
                <h3 class="mb-2">Q{{ $cnt + 1 }}. {{ $data->title }}</h3>
                <p>{{ $data->content }}</p>
            </div>
        </div>
        <!--accordion-item-->
        @endforeach
        @endif
    </div><!--#accordion-->
    <p class="text-center sm-title px-lg-0 px-xs-3">
        若您有任何疑問， 請直接來電至服務專線： 0800-000000，謝謝！<br>(服務時間：週一至週五，正常上班時間上午9:00至下午5:00)
    </p>
</div><!--col-->
@endsection