@extends("front.layout")
@section("content")
<div class="max-w-[1440px] mx-auto">


    <!-- 常見產品 -->
    <section class="py-12 bg-neutral-200">
        <div class="container my-4">
            <div class="row gx-3 gy-3">
                <!-- 1 純棉 Cotton -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/Cotton.jpg" alt="純棉">
                        <div class="main_title">純棉 Cotton</div>
                        <div class="sub_title">柔軟親膚 吸汗透氣</div>
                        <div class="price"><span class="sale">NT$690</span><span class="origin">NT$890</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 2 亞麻 Linen -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/Linen.jpg" alt="亞麻">
                        <div class="main_title">亞麻 Linen</div>
                        <div class="sub_title">清爽快乾 夏日首選</div>
                        <div class="price"><span class="sale">NT$990</span><span class="origin">NT$1,280</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 3 絲綢 Silk -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/silk.jpg" alt="絲綢">
                        <div class="main_title">絲綢 Silk</div>
                        <div class="sub_title">光澤細緻 輕薄垂墜</div>
                        <div class="price"><span class="sale">NT$2,280</span><span class="origin">NT$2,880</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 4 羊毛 Wool -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/wool.jpg" alt="羊毛">
                        <div class="main_title">羊毛 Wool</div>
                        <div class="sub_title">保暖透氣 冬季基本</div>
                        <div class="price"><span class="sale">NT$1,680</span><span class="origin">NT$2,180</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 5 羊絨 Cashmere -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/cashmere.jpg" alt="羊絨">
                        <div class="main_title">羊絨 Cashmere</div>
                        <div class="sub_title">極致柔軟 輕暖升級</div>
                        <div class="price"><span class="sale">NT$3,980</span><span class="origin">NT$4,980</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 6 莫代爾 Modal -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/modal.jpg" alt="莫代爾">
                        <div class="main_title">莫代爾 Modal</div>
                        <div class="sub_title">絲滑親膚 高彈舒適</div>
                        <div class="price"><span class="sale">NT$780</span><span class="origin">NT$980</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 7 天絲 Tencel/Lyocell -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/tencel.jpg" alt="天絲">
                        <div class="main_title">天絲 Tencel</div>
                        <div class="sub_title">涼感透氣 自然垂墜</div>
                        <div class="price"><span class="sale">NT$1,180</span><span class="origin">NT$1,580</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 8 聚酯纖維 Polyester -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/polyester.jpg" alt="聚酯纖維">
                        <div class="main_title">聚酯纖維 Polyester</div>
                        <div class="sub_title">耐磨抗皺 易打理</div>
                        <div class="price"><span class="sale">NT$590</span><span class="origin">NT$790</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
                <!-- 9 丹寧 Denim -->
                <div class="col-md-4">
                    <div class="item">
                        <img src="/images/denim.jpg" alt="丹寧">
                        <div class="main_title">丹寧 Denim</div>
                        <div class="sub_title">結實耐穿 經典不敗</div>
                        <div class="price"><span class="sale">NT$1,090</span><span class="origin">NT$1,390</span></div>
                        <button class="add_btn">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection