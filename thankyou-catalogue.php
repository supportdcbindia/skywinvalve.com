<?php include('header.php'); ?>
<style>
    :root {
        --brand: #1e63ff;
        --brand-2: #15c3ff;
        --ink: #0f172a;
        --muted: #475569;
        --paper: #ffffff;
        --bg: radial-gradient(1200px 600px at 10% -10%, #eaf2ff 0%, transparent 55%),
            radial-gradient(1200px 600px at 110% 10%, #e6fff7 0%, transparent 55%),
            linear-gradient(180deg, #f7fbff 0%, #f3f7fb 100%);
        --radius: 20px;
        --shadow: 0 14px 40px rgba(2, 6, 23, .18), 0 3px 8px rgba(2, 6, 23, .12);
    }

    .wrap {
        max-width: 100%;
        width: 100%;
        display: grid;
        gap: 22px;
        text-align: center;
        padding: 50px 0px 80px 0px;
    }

    /* heading block */
    .hero {
        padding: 18px 12px 0;
    }

    .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 700;
        color: #065f46;
        background: #d1fae5;
        border: 1px solid #a7f3d0;
        border-radius: 999px;
        padding: 6px 12px;
        margin-bottom: 10px;
    }

    .check {
        width: 18px;
        height: 18px;
        display: inline-block;
    }

    h1 {
        margin: 6px 0 8px;
        font-size: clamp(22px, 3.8vw, 38px);
        line-height: 1.2;
        font-weight: 800;
    }

    .sub {
        color: var(--muted);
        max-width: 720px;
        margin: 0 auto;
        font-size: clamp(14px, 2.2vw, 17px);
    }

    /* card */
    .cstm-card {
        position: relative;
        background: var(--paper);
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 20px;
        display: grid;
        gap: 16px;
        justify-items: center;
        border: 1px solid rgba(15, 23, 42, .06);
        width: 50%;
        margin: 15px auto;
        margin-bottom: 0px !important;
    }

    .dl-icon {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        color: #fff;
        box-shadow: 0 10px 20px rgba(30, 99, 255, .35);
        animation: float 4s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-6px)
        }
    }

    .file-line {
        display: flex;
        gap: 10px;
        align-items: center;
        color: var(--muted);
        font-size: .95rem;
    }

    .file-pill {
        background: #eef2ff;
        color: #334155;
        border: 1px solid #dbeafe;
        border-radius: 999px;
        padding: 6px 10px;
        font-weight: 700;
    }

    .actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
    }

    .btn {
        appearance: none;
        border: 0;
        cursor: pointer;
        font-weight: 800;
        padding: 12px 16px;
        border-radius: 14px;
        color: #fff;
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        box-shadow: 0 10px 18px rgba(30, 99, 255, .25);
        transition: transform .18s ease, filter .18s ease;
    }

    .btn:hover {
        transform: translateY(-2px)
    }

    .btn.secondary {
        background: #f1f5f9;
        color: #0f172a;
        box-shadow: none;
        border: 1px solid #e2e8f0;
    }

    /* progress */
    .bar {
        width: min(520px, 92%);
        height: 10px;
        background: #e5e7eb;
        border-radius: 999px;
        overflow: hidden;
        position: relative;
    }

    .bar>span {
        height: 100%;
        width: 0%;
        display: block;
        background: linear-gradient(90deg, var(--brand), var(--brand-2));
        border-radius: 999px;
        transition: width .2s ease;
    }

    /* footer help */
    .help {
        color: #475569;
        font-size: .9rem;
    }

    .help a {
        color: #0ea5e9;
        text-underline-offset: 3px
    }

    .note {
        font-size: .8rem;
        color: #64748b;
    }

    /* confetti canvas (behind card) */
    #confetti {
        position: fixed;
        inset: 0;
        pointer-events: none;
        z-index: 0
    }

    .wrap,
    .card {
        z-index: 1
    }

    /* small screens tweaks */
    @media (max-width: 991px) {
        .cstm-card {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .file-line {
            flex-direction: column;
            gap: 6px
        }
    }
</style>

<div class="">
    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <img src="assets/imgs/Thank-You.webp" class="w-100" />
            </div>
        </div>
    </div>
</div>

<!-- <div class="thankyou-div">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                <a id="lnnk" href='pdf/' target="_blank" download>
                    <h4 class="text-center thnak4">" Thank You For Inquiry We Will Reply You Within 24 Hours"</h4>
                    <div class="message"
                        style="display:block;margin:0px 0 25px;text-align:center;color: #000;font-weight: bold;"><img
                            src="assets/imgs/download_gif.gif" class="center-block"
                            style="margin: 0px auto;display: block; width: 20%;">Click Here For Your Requested Catalogue Download
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> -->
<canvas id="confetti"></canvas>

<main class="wrap" role="main" aria-labelledby="title">
    <div class="container">
        <section class="hero">
            <div class="eyebrow">
                <!-- check icon -->
                <svg class="check" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" stroke="#059669" stroke-width="2" fill="#34d399" />
                    <path d="M7 12.5l3 3 7-7" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Thank you for your inquiry
            </div>
            <h1 id="title">We’ll reply within 24 hours</h1>
            <p class="sub">Meanwhile, download the catalogue you requested.</p>
        </section>

        <section class="cstm-card" aria-live="polite">
            <div class="dl-icon" aria-hidden="true">
                <!-- download arrow -->
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                    <path d="M12 3v10" stroke="white" stroke-width="2" stroke-linecap="round" />
                    <path d="M7 11l5 5 5-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <rect x="3" y="19" width="18" height="2" rx="1" fill="white" opacity=".9" />
                </svg>
            </div>

            <div class="file-line">
                <span class="file-pill" id="fileName">Skywin-Valve-Catalogue.pdf</span>
            </div>

            <div class="actions">
                <a id="lnnk" href='pdf/<?php echo $_GET['varname']; ?>' target="_blank" download>
                    <button class="btn" id="downloadBtn">
                        ⬇️ Click Here To Download
                    </button>
                </a>
            </div>
        </section>
    </div>
</main>

 </main>
 <?php include('footer.php'); ?>
<script>
    var hreff = $("#lnnk").attr('href');
    setTimeout(
        function() {
            window.location = hreff;
        }, 5000);
</script>

<script>
    /* ===================== Confetti ===================== */
    (function confetti() {
        const c = document.getElementById('confetti');
        const ctx = c.getContext('2d');
        let W, H, particles = [];
        const COLORS = ['#1e63ff', '#15c3ff', '#22c55e', '#f97316', '#f43f5e', '#a78bfa'];

        function resize() {
            W = c.width = window.innerWidth;
            H = c.height = window.innerHeight;
        }
        window.addEventListener('resize', resize);
        resize();

        function spawn(n = 100) {
            particles = [];
            for (let i = 0; i < n; i++) {
                particles.push({
                    x: Math.random() * W,
                    y: -20 - Math.random() * H * 0.3,
                    r: 4 + Math.random() * 5,
                    col: COLORS[(Math.random() * COLORS.length) | 0],
                    vy: 1 + Math.random() * 3,
                    vx: -1 + Math.random() * 2,
                    rot: Math.random() * Math.PI,
                    vr: -0.1 + Math.random() * 0.2
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, W, H);
            particles.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;
                p.rot += p.vr;
                ctx.save();
                ctx.translate(p.x, p.y);
                ctx.rotate(p.rot);
                ctx.fillStyle = p.col;
                ctx.fillRect(-p.r, -p.r / 2, p.r * 2, p.r);
                ctx.restore();
                if (p.y > H + 20) p.y = -20, p.x = Math.random() * W;
            });
            requestAnimationFrame(draw);
        }
        spawn(140);
        draw();
        // burst once after load
        setTimeout(() => spawn(220), 200);
    })();
</script>