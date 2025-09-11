@extends("front.layout")
@section("content")
<div class="max-w-[1440px] mx-auto">
    <section class="relative">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('/images/Slideshow/01.jpg');"></div>
                <div class="carousel-item" style="background-image: url('/images/Slideshow/02.jpg');"></div>
                <div class="carousel-item" style="background-image: url('/images/Slideshow/03.jpg');"></div>
                <div class="carousel-item" style="background-image: url('/images/Slideshow/04.jpg');"></div>
                <div class="carousel-item" style="background-image: url('/images/Slideshow/05.jpg');"></div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- 品牌介紹 -->
    <section class="py-12 bg-neutral-200">
        <div class="max-w-[1200px] mx-auto px-4">
            <h2 class="text-yellow-800 text-6xl font-['Zen_Maru_Gothic'] text-center mb-10">品牌宗旨</h2>
            <div class="text-black text-2xl font-['Zen_Maru_Gothic'] mb-10">
                我們的服飾材質選擇精心挑選，以提供最佳的舒適感與耐用性。每一種材質都經過精細篩選，旨在滿足不同場合和季節的需求。天然材質如棉花、羊毛和絲綢，不僅柔軟透氣，還具備優異的吸濕和保暖性；而合成纖維如聚酯和尼龍，則具有強韌、易清洗且不易皺的特點，為您的日常穿著帶來便捷與舒適。無論是日常穿著還是特殊場合，我們的服飾將為您帶來極致的穿著體驗。
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md-6 flex flex-col items-center">
                    <div class="w-64 h-64 rounded-full border-2 border-yellow-800 bg-cover" style="background-image: url('/images/Cotton.jpg');"></div>
                    <h3 class="text-black text-3xl font-['Zen_Maru_Gothic'] mt-4">棉 (Cotton)</h3>
                    <p class="text-black text-xl font-['Zen_Maru_Gothic'] text-center">棉花具有柔軟、透氣的特性，非常適合製作舒適的服飾。</p>
                </div>
                <div class="col-md-6 flex flex-col items-center">
                    <div class="w-64 h-64 rounded-full border-2 border-yellow-800 bg-cover" style="background-image: url('/images/Linen.jpg');"></div>
                    <h3 class="text-black text-3xl font-['Zen_Maru_Gothic'] mt-4">亞麻 (Linen)</h3>
                    <p class="text-black text-xl font-['Zen_Maru_Gothic'] text-center">亞麻纖維具有良好的透氣性和吸濕性，適合製作夏季服飾。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 常見產品 -->
    <section class="py-12 bg-neutral-200">
        <div class="max-w-[1200px] mx-auto px-4">
            <h2 class="text-yellow-800 text-6xl font-['Zen_Maru_Gothic'] text-center mb-10">常見產品</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="flex flex-col items-center">
                    <img class="w-64 h-96 border-2 border-yellow-800" src="/images/Polyester.jpg" alt="High Mountain Oolong Tea">
                    <h3 class="text-black text-4xl font-['Zen_Maru_Gothic'] mt-4">聚酯纖維 (Polyester)</h3>
                    <p class="text-black text-xl font-['Zen_Maru_Gothic']">聚酯纖維具有耐磨、抗皺的特性，適合製作各種服飾。</p>
                </div>
                <div class="flex flex-col items-center">
                    <img class="w-64 h-96 border-2 border-yellow-800" src="/images/Nylon.jpg" alt="High Mountain Black Tea">
                    <h3 class="text-black text-4xl font-['Zen_Maru_Gothic'] mt-4">尼龍（Nylon）</h3>
                    <p class="text-black text-xl font-['Zen_Maru_Gothic']">尼龍纖維具有優異的耐磨性和彈性，適合製作運動服飾。</p>
                </div>
                <div class="flex flex-col items-center">
                    <img class="w-64 h-96 border-2 border-yellow-800" src="/images/Denim.jpg" alt="Jin Xuan Tea">
                    <h3 class="text-black text-4xl font-['Zen_Maru_Gothic'] mt-4">牛仔布（Denim） </h3>
                    <p class="text-black text-xl font-['Zen_Maru_Gothic']">牛仔布以其耐磨性和經典風格而聞名，適合製作休閒服飾。</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection