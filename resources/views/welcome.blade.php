<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'El Acbads') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
        :root {
            --bg: #101010;
            --surface: #191919;
            --surface2: #222222;
            --primary: #9a8765;
            --primary-light: #c4b596;
            --text: #eeeeee;
            --muted: #a3a3a3;
            --border: #303030;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.8;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }

        .home-container {
            width: min(1160px, 92%);
            margin: 30px auto;
        }


        .hero {
            padding: 120px 0 110px;
            text-align: center;
            background: #101010;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero-label {
            display: inline-block;
            padding: 6px 17px;
            border: 1px solid #514735;
            background: #24211b;
            color: var(--primary-light);
            border-radius: 30px;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 25px;
        }

        .hero h1 {
            font-size: clamp(38px, 6vw, 68px);
            font-weight: 900;
            line-height: 1.45;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--primary-light);
        }

        .hero p {
            color: var(--muted);
            max-width: 650px;
            margin: auto;
            font-size: 15px;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 32px;
            flex-wrap: wrap;
        }

        .home-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 25px;
            border-radius: 9px;
            font-size: 13px;
            font-weight: 800;
            transition: .2s;
        }

        .home-btn-primary {
            background: var(--primary);
            color: white;
        }

        .home-btn-primary:hover {
            background: #81704f;
            transform: translateY(-2px);
        }

        .home-btn-secondary {
            background: var(--surface2);
            border: 1px solid var(--border);
            color: white;
        }

        .home-btn-secondary:hover {
            border-color: var(--primary);
        }

        section {
            padding: 85px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 42px;
        }

        .section-title small {
            color: var(--primary-light);
            font-size: 12px;
            font-weight: 800;
        }

        .section-title h2 {
            font-size: 30px;
            font-weight: 900;
            margin-top: 5px;
        }

        .section-title p {
            color: var(--muted);
            font-size: 13px;
            margin-top: 7px;
        }

        .about-box {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            margin-top: 100px !important
        }

        .about-box h3 {
            color: var(--primary-light);
            font-size: 24px;
            margin-bottom: 13px;
        }

        .about-box p {
            color: var(--muted);
            font-size: 14px;
            line-height: 2.3;
            max-width: 850px;
            margin: auto;
        }

        .features {
            background: #151515;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .home-card {
            background: var(--surface);
            border: 1px solid var(--border);
            padding: 27px;
            border-radius: 13px;
            transition: .25s;
        }

        .home-card:hover {
            border-color: #75684e;
            transform: translateY(-2px);
        }

        .card-icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            background: #29261f;
            border-radius: 12px;
            font-size: 22px;
            margin-bottom: 17px;
        }

        .home-card h3 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .home-card p {
            color: var(--muted);
            font-size: 12px;
            line-height: 2.1;
        }

        .founders-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
            background: #1b1b1b;
            border: 1px solid #39352c;
            padding: 35px;
            border-radius: 15px;
        }

        .founders-box h3 {
            font-size: 23px;
            margin-bottom: 8px;
        }

        .founders-box p {
            color: var(--muted);
            font-size: 13px;
        }

        .founders-box a {
            background: var(--primary);
            padding: 11px 20px;
            border-radius: 9px;
            font-size: 12px;
            font-weight: 800;
            white-space: nowrap;
        }

        .rules {
            background: #151515;
        }

        .rule-list {
            max-width: 760px;
            margin: auto;
            display: grid;
            gap: 12px;
        }

        .rule {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 20px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 13px;
        }

        .rule-number {
            color: var(--primary-light);
            font-weight: 900;
        }

        .final-box {
            text-align: center;
            padding: 50px 25px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 15px;
        }

        .final-box h2 {
            font-size: 28px;
            margin-bottom: 12px;
        }

        .final-box p {
            color: var(--muted);
            font-size: 13px;
        }

        .final-box strong {
            display: block;
            color: var(--primary-light);
            margin-top: 20px;
        }

        footer {
            border-top: 1px solid var(--border);
            padding: 30px 0;
            background: #0d0d0d;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-logo {
            font-size: 21px;
            color: var(--primary-light);
            font-weight: 900;
        }

        .footer-content p,
        .footer-bottom {
            color: var(--muted);
            font-size: 11px;
        }

        .footer-bottom {
            border-top: 1px solid var(--border);
            text-align: center;
            margin-top: 20px;
            padding-top: 17px;
        }


        @media(max-width: 650px) {
            .hero-content {
                margin: 110px auto;
            }
            .cards {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 85px 0;
            }

            .hero h1 {
                font-size: 39px;
            }

            .section-title h2 {
                font-size: 24px;
            }

            .about-box {
                padding: 25px 18px;
            }

            .founders-box {
                flex-direction: column;
                text-align: center;
            }


            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main>
        <section class="hero" id="home">
            <div class="home-container hero-content">


                <h1 class="hero-label">Acbady Platform</h1>

                <p>
                    أخيرا وصلت! كنا مستنيينك من ساعة ما عملنا المنصة،
                    انت قاعد فاضي يخويا؟ طيب قوم اقف يلا
                </p>

                <div class="hero-buttons">
                    <a href="{{ url('/posts') }}" class="home-btn home-btn-primary">ألافيهاتس</a>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="home-container">
                <div class="section-title">
                    <h2>مين الأكبادس دول؟</h2>
                    <p>انت مين يكدس؟ لما اعرف هقولك</p>
                </div>

                <div class="about-box">
                    <h3> El Acbads</h3>

                    <p>
                        ادخل يا كبدي بس احب اقولك يا اما هتبضن يا اما هتتبضن

                        <br>

                        هتلاقي هنا منشورات ومواقف وحكايات من يومنا بضان سيبك منها يكبدس
                    </p>
                </div>
            </div>
        </section>

        <section class="features" id="activities">
            <div class="home-container">
                <div class="section-title">
                    <small>دليل الاستخدام</small>
                    <h2>اقسام الموقع</h2>
                    <p>اختار القسم اللي تحب تتفرج عليه.</p>
                </div>

                <div class="cards">
                    <div class="home-card">
                        <div class="card-icon">👑</div>
                        <h3>مؤسسو الأكبادس</h3>
                        <p>تعرف على الناس اللي كانت سبب في وجود الموسسه ده. المسؤولية عليهم طبعا.</p>
                    </div>

                    <div class="home-card">
                        <div class="card-icon">📰</div>
                        <h3>منشورات الأكبادس</h3>
                        <p>آخر الأخبار والتصريحات والمواقف اللي ملهاش أي لازمة، بس لازم تتوثق.</p>
                    </div>

                    <div class="home-card">
                        <div class="card-icon">🪪</div>
                        <h3>ملفك الشخصي</h3>
                        <p>هويتك الرسمية ككبدس. مكان صورتك واسمك وتاريخ إنجازاتك المشبوهة.</p>
                    </div>

                    <div class="home-card">
                        <div class="card-icon">📢</div>
                        <h3>إضافة منشور يبضن</h3>
                        <p>عندك حاجة عايز تقولها؟ عندك رأي محدش طلبه؟ المنصة فاتحة لك صدرها.</p>
                    </div>

                    <div class="home-card">
                        <div class="card-icon">🤡</div>
                        <h3>أرشيف المواقف</h3>
                        <p>كل موقف تاريخي اتعمل فيه فضيحة محترمة، علشان التاريخ مبيسامحش.</p>
                    </div>

                    <div class="home-card">
                        <div class="card-icon">🏆</div>
                        <h3>كبدس الشهر</h3>
                        <p>تكريم الشخص اللي أثبت إن مفيش سقف للعبث. المنافسة شرسة والكل متهم.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="founders">
            <div class="home-container">
                <div class="founders-box">
                    <div>
                        <h3>عايز تعرف مين بدأ البضن علي الاخرين</h3>
                        <p>اتعرف على مؤسسي الأكبادس والناس اللي وافقت تشارك في المهزلة دي.</p>
                    </div>

                    <a href="{{ url('/founders') }}">قابل المتهمين ←</a>
                </div>
            </div>
        </section>

        <section class="rules" id="rules">
            <div class="home-container">
                <div class="section-title">
                    <small>اقرأ قبل ما تتورط</small>
                    <h2>دستور الكبدس المحترم</h2>
                </div>

                <div class="rule-list">
                    <div class="rule">
                        <span class="rule-number">01</span>
                        <span>ممنوع الزعل من الهزار، بس برضه اعرف حدودك يا كبدس.</span>
                    </div>

                    <div class="rule">
                        <span class="rule-number">02</span>
                        <span>ممنوع نشر صور أو بيانات حد من غير إذنه.</span>
                    </div>

                    <div class="rule">
                        <span class="rule-number">03</span>
                        <span>ممنوع التنمر أو الإهانة الحقيقية. إحنا بنضحك مش بنأذي.</span>
                    </div>

                    <div class="rule">
                        <span class="rule-number">04</span>
                        <span>أي منشور يتجاوز الحدود ممكن يختفي أسرع من مرتب آخر الشهر.</span>
                    </div>

                    <div class="rule">
                        <span class="rule-number">05</span>
                        <span>لو دخلت هنا وطلعت من غير ما تبضن او تتبضن راجع إعداداتك.</span>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="home-container">
                <div class="final-box">
                    <h2>لسه بتقرأ؟ يا عم خش اتبضن </h2>

                    <p>أدخل يكبدس ابضن علي الخلق بأي افيه</p>

                    <strong>El Acbads Group.</strong>
                </div>
            </div>
        </section>
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
