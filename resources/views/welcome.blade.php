@extends('layouts.user')
@section('content')
<main>
    <section class="banner">
        <div class="container">
            <div class="banner-content">
                <h1>شقق للايجار | بيوت للبيع</h1>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="ابحث هنا ...">
                    <button class="btn search" type="submit">ابحث</button>
                </form>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <h3>احدث الاعلانات</h3>
            <div class="row">
                @foreach ($products as $product )
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 pro-box">
                    <div class="box-con">
                        <div class="pro-banner">
                            <img src="{{ URL::asset('public/adminpanel/assets/img/products/') }}/{{ $product->image }}" alt="">
                            <span class="price">{{$product->price}}</span>
                            <div class="overflew">
                                <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="pro-content">
                            <div class="info d-flex justify-content-between align-items-center">
                                <h5 class="title">{{$product->product_name}}</h5>
                                <div class="time">{{$product->created_at->diffForHumans()}} <i class="fa-solid fa-clock"></i></div>
                            </div>
                            <div class="desc text-center">
                                {{$product->desc}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="guide">
        <div class="container">
            <h2 class="title">بو شملان دليل عقارات الكويت</h2>
            <div class="gu-content">
                <p>
                    بوشملان هو دليل الكويت العقاري الأول والاكبر والأكثر شهرة في الكويت ودول الخليج العربي وفيه تجد الإعلانات الخاصة بعقارات الكويت بمختلف أنواعها. نساعدك بالبحث عن شقق للايجار او بيوت للبيع او أراضي للبدل او غير ذلك. سواء كنت مواطنا او مقيما تبحث عن عقار
                    في الكويت للايجار، للبيع او للبدل او كنت دلال او وسيط عقاري وتحاول عقد صفقات عقارية، فإن زيارتك لدليل عقارات الكويت هي الخطوة الأولى لتحقيق هدفك بسرعه وبسهوله، فنحن نقدم الحلول العقارية بشكل متطور وحديث على شكل موقع الكتروني وكذلك
                    تطبيق موبايل متوفر على اجهزة الاندرويد او الايفون. نقدم خدماتنا بشكل مجاني للباحثين عن عقار للشراء او للاستئجار، ولسنا وسيط عقاري ولا نتدخل بأي شكل من الاشكال بين البائع والمشتري من استفسارات او مفاوضات واتفاقيات. ولا نتقاضى أي
                    عمولة أو رسوم على الصفقات العقارية سواء كانت للايجار او للبيع او للبدل أو غيرها من الصفقات. يمكنك كذلك إضافة إعلانك مجانًا لدينا من خلال التسجيل معنا بشكل مجاني ايضا ، ويجب عليك تأكيد حسابك عن طريق رسالة نصية SMS وبعدها ستتمكن
                    من إضافة إعلانك وتحديد البيانات التاليه: الموبايل، المنطقة، نوع العقار، الغرض من الإعلان سواء كان للايجار او للبيع، تحديد السعر المطلوب، كتابة تفاصيل الإعلان والعقار مثل المساحه وعدد الغرف وعدد الصالات والحمامات، والأدوار، وعدد
                    المصافط المتوفرة، وتوفر الاصنصير (المصعد)، ونوعية التشطيب مثل سوبر ديلوكس او بنيان قديم، وكذلك يمكنك بشكل اختياري إضافة صور العقار مع الإعلان. ننوه ان الاسم القديم لبو شملان هو كويت فيلا او Q8Villa وقد قمنا بتغيير الاسم في 2018
                    حتى نتمكن من التوسع ودخول دول أخرى تحت شعار واسم واحد.
                </p>
            </div>
        </div>
    </section>
    <section class="category">
        <div class="container">
            <div class="d-flex justify-content-center">
                @foreach ($categories as $category )
                <div class="cat-card text-center">
                    <div class="card-content">
                        <div class="card-icon">
                            <img src="{{ URL::asset('public/adminpanel/assets/img/categories/') }}/{{ $category->image }}" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">{{$category->category_name}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="guide">
        <div class="container">
            <h2 class="title">شقق للايجار فى الكويت</h2>
            <div class="gu-content">
                <p>
                    من خلال بو شملان يمكنك البحث في آلاف الشقق والعقارات المعروضه للايجار او للبيع او للبدل في الكويت من الملاك مباشره او من خلال المكاتب العقارية. باستخدام محرك البحث المبسط تستطيع تحديد البيانات التالية:
                </p>
                <ul>
                    <li>الغرض من الإعلان: للبيع او للايجار او للبدل</li>
                    <li>نوع العقار: مثل شقق، بيوت، فلل، ادوار، أراضي، عمارات، محلات تجاريه، مكاتب، مزارع، شاليهات، .. الخ</li>
                    <li>المنطقة: ويمكنك تحديد أي منطقة من مناطق الكويت من خلال كتابة أو اختيار اسم المنطقه مثل سلوى، السالمية، مبارك الكبير، الجابرية، حولي، المنقف، سعد العبدالله، صباح السالم، جابر الأحمد، صباح الأحمد، الخيران، ابوفطيرة، الفنيطيس، الرميثيه،
                        المسايل، وغيرها من مناطق الكويت.</li>
                </ul>
                <p>
                    وبعد تحديد خيارات البحث ستجد أكبر عدد ممكن من الإعلانات العقارية وستتمكن من الوصول إلى أكبر عدد ممكن من الإعلانات المرتبطة بطلبك. وعندها يمكنك التواصل مع صاحب الإعلان بشكل مباشر عن طريق الاتصال او خلال الواتس اب حسب اختيارك، وهنا ينتهي دور بو شملان العقاري
                    حسب شروطه حيث انه لا يتدخل بين الأطراف المعنية في تفاصيل الصفقات العقارية.
                </p>
            </div>
            <div class="faq">
                <h2>الأسئلة الشائعة عن العقارات المعروضة للايجار او للبيع في الكويت</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                كم عدد إعلانات العقارات المعروضة حاليًا للايجار او للبيع في الكويت على موقع بوشملان؟
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                عدد إعلانات العقارات المعروضة للايجار او للبيع في الكويت هو 6527 إعلان جديد
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ما هي أنواع العقارات المعروضة للايجار او للبيع في الكويت على موقع بوشملان؟
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                أنواع العقارات المعروضة للايجار او للبيع في الكويت هي أراضي ,بيوت ,تجاري ,شاليهات ,شقق ,عمارات ,مزارع
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                كم تتراوح أسعار العقارات المعروضة للايجار او للبيع في الكويت على بوشملان؟
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                أسعار العقارات المعروضة للايجار او للبيع في الكويت تبدأ من 320 دك وتصل إلى 950,000 دك
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection