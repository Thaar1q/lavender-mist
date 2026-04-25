<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FloraConcept — Breathe in the beauty of every bloom.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flora-body">

    <!-- ===== Navigation ===== -->
    <header class="flora-nav">
        <div class="flora-nav-inner">
            <a href="#" class="flora-logo">
                <div class="flora-logo-icon">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.4375 2.625C5.28828 2.625 3.46992 4.0332 2.85195 5.97461C3.7707 5.50976 4.80703 5.25 5.90625 5.25H8.3125C8.55313 5.25 8.75 5.44687 8.75 5.6875C8.75 5.92812 8.55313 6.125 8.3125 6.125H7.875H5.90625C5.45234 6.125 5.01211 6.17695 4.58828 6.27265C3.88008 6.43398 3.22109 6.72109 2.63594 7.11211C1.04727 8.17031 0 9.97773 0 12.0312V12.4687C0 12.8324 0.292578 13.125 0.65625 13.125C1.01992 13.125 1.3125 12.8324 1.3125 12.4687V12.0312C1.3125 10.6996 1.87852 9.50195 2.78359 8.6625C3.325 10.727 5.20352 12.25 7.4375 12.25H7.46484C11.077 12.2309 14 8.6707 14 4.28203C14 3.11719 13.7949 2.00976 13.423 1.01172C13.352 0.823045 13.0758 0.831249 12.9801 1.00898C12.466 1.97148 11.4488 2.625 10.2812 2.625H7.4375Z" fill="#9333EA"/>
                    </svg>
                </div>
                <span class="flora-logo-name">FloraConcept</span>
            </a>

            <nav class="flora-nav-links" aria-label="Primary">
                <a href="#" class="flora-nav-link active">Shop</a>
                <a href="#" class="flora-nav-link">Occasions</a>
                <a href="#" class="flora-nav-link">About</a>
                <a href="#" class="flora-nav-link">Contact</a>
            </nav>

            <button class="flora-btn-primary">Sign In</button>
        </div>
    </header>

    <main>

        <!-- ===== Hero ===== -->
        <section class="flora-hero">
            <div class="flora-hero-radial-bg" aria-hidden="true"></div>

            <div class="flora-hero-content">
                <div class="flora-badge">
                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50078 1.00078L4.61719 1.33125C4.54688 1.35703 4.5 1.425 4.5 1.5C4.5 1.575 4.54688 1.64297 4.61719 1.66875L5.50078 1.99922L5.83125 2.88281C5.85703 2.95312 5.925 3 6 3C6.075 3 6.14297 2.95312 6.16875 2.88281L6.49922 1.99922L7.38281 1.66875C7.45312 1.64297 7.5 1.575 7.5 1.5C7.5 1.425 7.45312 1.35703 7.38281 1.33125L6.49922 1.00078L6.16875 0.117187C6.14297 0.046875 6.075 0 6 0C5.925 0 5.85703 0.046875 5.83125 0.117187L5.50078 1.00078ZM1.08047 9.26719C0.642187 9.70547 0.642187 10.418 1.08047 10.8586L1.89141 11.6695C2.32969 12.1078 3.04219 12.1078 3.48281 11.6695L12.4195 2.73047C12.8578 2.29219 12.8578 1.57969 12.4195 1.13906L11.6086 0.330469C11.1703 -0.107813 10.4578 -0.107813 10.0172 0.330469L1.08047 9.26719ZM11.3578 1.93594L8.89688 4.39687L8.35078 3.85078L10.8117 1.38984L11.3578 1.93594ZM0.175781 2.74687C0.0703125 2.78672 0 2.8875 0 3C0 3.1125 0.0703125 3.21328 0.175781 3.25312L1.5 3.75L1.99687 5.07422C2.03672 5.17969 2.1375 5.25 2.25 5.25C2.3625 5.25 2.46328 5.17969 2.50313 5.07422L3 3.75L4.32422 3.25312C4.42969 3.21328 4.5 3.1125 4.5 3C4.5 2.8875 4.42969 2.78672 4.32422 2.74687L3 2.25L2.50313 0.925781C2.46328 0.820312 2.3625 0.75 2.25 0.75C2.1375 0.75 2.03672 0.820312 1.99687 0.925781L1.5 2.25L0.175781 2.74687ZM8.42578 8.74687C8.32031 8.78672 8.25 8.8875 8.25 9C8.25 9.1125 8.32031 9.21328 8.42578 9.25312L9.75 9.75L10.2469 11.0742C10.2867 11.1797 10.3875 11.25 10.5 11.25C10.6125 11.25 10.7133 11.1797 10.7531 11.0742L11.25 9.75L12.5742 9.25312C12.6797 9.21328 12.75 9.1125 12.75 9C12.75 8.8875 12.6797 8.78672 12.5742 8.74687L11.25 8.25L10.7531 6.92578C10.7133 6.82031 10.6125 6.75 10.5 6.75C10.3875 6.75 10.2867 6.82031 10.2469 6.92578L9.75 8.25L8.42578 8.74687Z" fill="#7E22CE"/>
                    </svg>
                    <span class="flora-badge-text">Fresh arrivals every week</span>
                </div>

                <h1 class="flora-hero-heading">Breathe in the beauty<br>of every bloom.</h1>

                <p class="flora-hero-subtitle">Handpicked purple florals delivered fresh to your door. Each arrangement a quiet poem of nature.</p>

                <div class="flora-hero-cta">
                    <button class="flora-cta-primary">Explore Blooms</button>
                    <button class="flora-cta-secondary">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6875 7C12.6875 5.49158 12.0883 4.04494 11.0217 2.97833C9.95506 1.91172 8.50842 1.3125 7 1.3125C5.49158 1.3125 4.04494 1.91172 2.97833 2.97833C1.91172 4.04494 1.3125 5.49158 1.3125 7C1.3125 8.50842 1.91172 9.95506 2.97833 11.0217C4.04494 12.0883 5.49158 12.6875 7 12.6875C8.50842 12.6875 9.95506 12.0883 11.0217 11.0217C12.0883 9.95506 12.6875 8.50842 12.6875 7ZM0 7C0 5.14348 0.737498 3.36301 2.05025 2.05025C3.36301 0.737498 5.14348 0 7 0C8.85652 0 10.637 0.737498 11.9497 2.05025C13.2625 3.36301 14 5.14348 14 7C14 8.85652 13.2625 10.637 11.9497 11.9497C10.637 13.2625 8.85652 14 7 14C5.14348 14 3.36301 13.2625 2.05025 11.9497C0.737498 10.637 0 8.85652 0 7ZM5.14883 4.02227C5.35664 3.90742 5.6082 3.91016 5.81328 4.03594L9.75078 6.44219C9.94492 6.5625 10.0652 6.77305 10.0652 7.00273C10.0652 7.23242 9.94492 7.44297 9.75078 7.56328L5.81328 9.96953C5.61094 10.0926 5.35664 10.098 5.14883 9.9832C4.94102 9.86836 4.8125 9.64961 4.8125 9.41172V4.59375C4.8125 4.35586 4.94102 4.13711 5.14883 4.02227Z" fill="#C084FC"/>
                        </svg>
                        How it works
                    </button>
                </div>
            </div>

            <div class="flora-hero-browser">
                <div class="flora-browser-chrome">
                    <div class="flora-browser-dots">
                        <span class="flora-browser-dot flora-browser-dot-red"></span>
                        <span class="flora-browser-dot flora-browser-dot-yellow"></span>
                        <span class="flora-browser-dot flora-browser-dot-green"></span>
                    </div>
                    <div class="flora-browser-url">
                        <span class="flora-browser-url-text">floraconcept.com/shop</span>
                    </div>
                </div>
                <div class="flora-browser-image">
                    <img src="https://api.builder.io/api/v1/image/assets/TEMP/d794fc180863b36c179d02d5f6e2101149641b27?width=1536" alt="Minimalist lavender bouquet in an elegant white ceramic vase" />
                </div>
            </div>
        </section>

        <!-- ===== Testimonial ===== -->
        <section class="flora-testimonial">
            <div class="flora-testimonial-inner">
                <div class="flora-stars" aria-label="5 out of 5 stars">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.66522 0.492188C8.52029 0.191406 8.21404 0 7.87772 0C7.54139 0 7.23787 0.191406 7.09021 0.492188L5.33201 4.10977L1.40545 4.68945C1.07732 4.73867 0.803887 4.96836 0.702715 5.28281C0.601543 5.59727 0.683575 5.94453 0.918731 6.17695L3.76795 8.99609L3.09529 12.9801C3.04061 13.3082 3.17732 13.6418 3.44803 13.8359C3.71873 14.0301 4.07693 14.0547 4.37225 13.8988L7.88045 12.0258L11.3887 13.8988C11.684 14.0547 12.0422 14.0328 12.3129 13.8359C12.5836 13.6391 12.7203 13.3082 12.6656 12.9801L11.9902 8.99609L14.8394 6.17695C15.0746 5.94453 15.1594 5.59727 15.0554 5.28281C14.9515 4.96836 14.6808 4.73867 14.3527 4.68945L10.4234 4.10977L8.66522 0.492188Z" fill="#C084FC"/></svg>
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.66522 0.492188C8.52029 0.191406 8.21404 0 7.87772 0C7.54139 0 7.23787 0.191406 7.09021 0.492188L5.33201 4.10977L1.40545 4.68945C1.07732 4.73867 0.803887 4.96836 0.702715 5.28281C0.601543 5.59727 0.683575 5.94453 0.918731 6.17695L3.76795 8.99609L3.09529 12.9801C3.04061 13.3082 3.17732 13.6418 3.44803 13.8359C3.71873 14.0301 4.07693 14.0547 4.37225 13.8988L7.88045 12.0258L11.3887 13.8988C11.684 14.0547 12.0422 14.0328 12.3129 13.8359C12.5836 13.6391 12.7203 13.3082 12.6656 12.9801L11.9902 8.99609L14.8394 6.17695C15.0746 5.94453 15.1594 5.59727 15.0554 5.28281C14.9515 4.96836 14.6808 4.73867 14.3527 4.68945L10.4234 4.10977L8.66522 0.492188Z" fill="#C084FC"/></svg>
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.66522 0.492188C8.52029 0.191406 8.21404 0 7.87772 0C7.54139 0 7.23787 0.191406 7.09021 0.492188L5.33201 4.10977L1.40545 4.68945C1.07732 4.73867 0.803887 4.96836 0.702715 5.28281C0.601543 5.59727 0.683575 5.94453 0.918731 6.17695L3.76795 8.99609L3.09529 12.9801C3.04061 13.3082 3.17732 13.6418 3.44803 13.8359C3.71873 14.0301 4.07693 14.0547 4.37225 13.8988L7.88045 12.0258L11.3887 13.8988C11.684 14.0547 12.0422 14.0328 12.3129 13.8359C12.5836 13.6391 12.7203 13.3082 12.6656 12.9801L11.9902 8.99609L14.8394 6.17695C15.0746 5.94453 15.1594 5.59727 15.0554 5.28281C14.9515 4.96836 14.6808 4.73867 14.3527 4.68945L10.4234 4.10977L8.66522 0.492188Z" fill="#C084FC"/></svg>
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.66522 0.492188C8.52029 0.191406 8.21404 0 7.87772 0C7.54139 0 7.23787 0.191406 7.09021 0.492188L5.33201 4.10977L1.40545 4.68945C1.07732 4.73867 0.803887 4.96836 0.702715 5.28281C0.601543 5.59727 0.683575 5.94453 0.918731 6.17695L3.76795 8.99609L3.09529 12.9801C3.04061 13.3082 3.17732 13.6418 3.44803 13.8359C3.71873 14.0301 4.07693 14.0547 4.37225 13.8988L7.88045 12.0258L11.3887 13.8988C11.684 14.0547 12.0422 14.0328 12.3129 13.8359C12.5836 13.6391 12.7203 13.3082 12.6656 12.9801L11.9902 8.99609L14.8394 6.17695C15.0746 5.94453 15.1594 5.59727 15.0554 5.28281C14.9515 4.96836 14.6808 4.73867 14.3527 4.68945L10.4234 4.10977L8.66522 0.492188Z" fill="#C084FC"/></svg>
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.66522 0.492188C8.52029 0.191406 8.21404 0 7.87772 0C7.54139 0 7.23787 0.191406 7.09021 0.492188L5.33201 4.10977L1.40545 4.68945C1.07732 4.73867 0.803887 4.96836 0.702715 5.28281C0.601543 5.59727 0.683575 5.94453 0.918731 6.17695L3.76795 8.99609L3.09529 12.9801C3.04061 13.3082 3.17732 13.6418 3.44803 13.8359C3.71873 14.0301 4.07693 14.0547 4.37225 13.8988L7.88045 12.0258L11.3887 13.8988C11.684 14.0547 12.0422 14.0328 12.3129 13.8359C12.5836 13.6391 12.7203 13.3082 12.6656 12.9801L11.9902 8.99609L14.8394 6.17695C15.0746 5.94453 15.1594 5.59727 15.0554 5.28281C14.9515 4.96836 14.6808 4.73867 14.3527 4.68945L10.4234 4.10977L8.66522 0.492188Z" fill="#C084FC"/></svg>
                </div>

                <blockquote class="flora-quote-text">
                    "I've never experienced flowers this fresh. The lavender arrived still dewy, filling my entire home with the most ethereal, calming fragrance. FloraConcept truly delivers nature's perfection."
                </blockquote>

                <div class="flora-testimonial-author">
                    <div class="flora-author-avatar">
                        <img src="https://api.builder.io/api/v1/image/assets/TEMP/1e31606ccb9d319f7f8a95622ec4bd67719012d3?width=112" alt="Maria Lopez" />
                    </div>
                    <div>
                        <p class="flora-author-name">Maria Lopez</p>
                        <p class="flora-author-subtitle">Verified Buyer · San Francisco</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Farm to Vase ===== -->
        <section class="flora-farm">
            <div class="flora-farm-card">
                <div class="flora-farm-image">
                    <img src="https://api.builder.io/api/v1/image/assets/TEMP/29cb9def888e146beab598b9bc303dd594d4f81a?width=1152" alt="Single purple orchid flower close-up, soft diffused light" />
                </div>
                <div class="flora-farm-content">
                    <div class="flora-farm-badge">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0.75C12 3.4125 10.0172 5.61328 7.44844 5.95312C7.28203 4.70156 6.73125 3.57187 5.91797 2.68828C6.81563 1.08516 8.53125 0 10.5 0H11.25C11.6648 0 12 0.335156 12 0.75ZM0 2.25C0 1.83516 0.335156 1.5 0.75 1.5H1.5C4.39922 1.5 6.75 3.85078 6.75 6.75V7.5V11.25C6.75 11.6648 6.41484 12 6 12C5.58516 12 5.25 11.6648 5.25 11.25V7.5C2.35078 7.5 0 5.14922 0 2.25Z" fill="#7E22CE"/>
                        </svg>
                        <span class="flora-farm-badge-text">Farm to Vase</span>
                    </div>

                    <h2 class="flora-farm-heading">From the farm,<br>to your home,<br>in 24 hours.</h2>

                    <p class="flora-farm-description">Our flowers are harvested at peak bloom from sustainable farms and shipped directly to you — skipping warehouses, skipping middlemen, preserving every petal's perfection.</p>

                    <ul class="flora-checklist">
                        <li class="flora-checklist-item">
                            <div class="flora-check-icon">
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 2.47021C10.5727 2.76318 10.5727 3.23896 10.2797 3.53193L4.27974 9.53193C3.98677 9.8249 3.51099 9.8249 3.21802 9.53193L0.218018 6.53193C-0.0749512 6.23897 -0.0749512 5.76318 0.218018 5.47021C0.510986 5.17725 0.986768 5.17725 1.27974 5.47021L3.75005 7.93818L9.22036 2.47021C9.51333 2.17725 9.98911 2.17725 10.2821 2.47021H10.2797Z" fill="#7E22CE"/></svg>
                            </div>
                            <span class="flora-checklist-label">Harvested within 24 hours of delivery</span>
                        </li>
                        <li class="flora-checklist-item">
                            <div class="flora-check-icon">
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 2.47021C10.5727 2.76318 10.5727 3.23896 10.2797 3.53193L4.27974 9.53193C3.98677 9.8249 3.51099 9.8249 3.21802 9.53193L0.218018 6.53193C-0.0749512 6.23897 -0.0749512 5.76318 0.218018 5.47021C0.510986 5.17725 0.986768 5.17725 1.27974 5.47021L3.75005 7.93818L9.22036 2.47021C9.51333 2.17725 9.98911 2.17725 10.2821 2.47021H10.2797Z" fill="#7E22CE"/></svg>
                            </div>
                            <span class="flora-checklist-label">Temperature-controlled packaging</span>
                        </li>
                        <li class="flora-checklist-item">
                            <div class="flora-check-icon">
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 2.47021C10.5727 2.76318 10.5727 3.23896 10.2797 3.53193L4.27974 9.53193C3.98677 9.8249 3.51099 9.8249 3.21802 9.53193L0.218018 6.53193C-0.0749512 6.23897 -0.0749512 5.76318 0.218018 5.47021C0.510986 5.17725 0.986768 5.17725 1.27974 5.47021L3.75005 7.93818L9.22036 2.47021C9.51333 2.17725 9.98911 2.17725 10.2821 2.47021H10.2797Z" fill="#7E22CE"/></svg>
                            </div>
                            <span class="flora-checklist-label">Direct from certified floral farms</span>
                        </li>
                    </ul>

                    <a href="#" class="flora-learn-link">
                        Learn about our process
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 6.52974C10.5727 6.23677 10.5727 5.76099 10.2797 5.46802L6.52969 1.71802C6.23672 1.42505 5.76094 1.42505 5.46797 1.71802C5.175 2.01099 5.175 2.48677 5.46797 2.77974L7.94062 5.25005H0.75C0.335156 5.25005 0 5.58521 0 6.00005C0 6.41489 0.335156 6.75005 0.75 6.75005H7.93828L5.47031 9.22036C5.17734 9.51333 5.17734 9.98911 5.47031 10.2821C5.76328 10.575 6.23906 10.575 6.53203 10.2821L10.282 6.53208L10.2797 6.52974Z" fill="#7E22CE"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===== Blog ===== -->
        <section class="flora-blog">
            <div class="flora-blog-inner">
                <div class="flora-blog-header">
                    <div class="flora-blog-heading-group">
                        <span class="flora-section-label">From Our Blog</span>
                        <h2 class="flora-section-heading">Floral Inspiration</h2>
                        <p class="flora-section-subtitle">Stories, styling tips, and seasonal guides for the bloom enthusiast.</p>
                    </div>
                    <a href="#" class="flora-view-all-btn">
                        View all posts
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 6.52974C10.5727 6.23677 10.5727 5.76099 10.2797 5.46802L6.52969 1.71802C6.23672 1.42505 5.76094 1.42505 5.46797 1.71802C5.175 2.01099 5.175 2.48677 5.46797 2.77974L7.94062 5.25005H0.75C0.335156 5.25005 0 5.58521 0 6.00005C0 6.41489 0.335156 6.75005 0.75 6.75005H7.93828L5.47031 9.22036C5.17734 9.51333 5.17734 9.98911 5.47031 10.2821C5.76328 10.575 6.23906 10.575 6.53203 10.2821L10.282 6.53208L10.2797 6.52974Z" fill="#7E22CE"/></svg>
                    </a>
                </div>

                <div class="flora-blog-grid">

                    <article class="flora-blog-card">
                        <div class="flora-blog-card-image">
                            <img src="https://api.builder.io/api/v1/image/assets/TEMP/e7ddb1d737903f25903dafaf1f58cad67f683f7f?width=546" alt="Fresh lavender bundle in a white ceramic vase" />
                        </div>
                        <div class="flora-blog-card-body">
                            <div class="flora-tag"><span class="flora-tag-text">Lavender</span></div>
                            <h3 class="flora-blog-card-title">The Art of Lavender: Calm in Every Stem</h3>
                            <p class="flora-blog-card-excerpt">How lavender transforms a space into a sanctuary of peace and beauty.</p>
                            <div class="flora-blog-card-footer">
                                <span class="flora-read-time">5 min read</span>
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 6.52974C10.5727 6.23677 10.5727 5.76099 10.2797 5.46802L6.52969 1.71802C6.23672 1.42505 5.76094 1.42505 5.46797 1.71802C5.175 2.01099 5.175 2.48677 5.46797 2.77974L7.94062 5.25005H0.75C0.335156 5.25005 0 5.58521 0 6.00005C0 6.41489 0.335156 6.75005 0.75 6.75005H7.93828L5.47031 9.22036C5.17734 9.51333 5.17734 9.98911 5.47031 10.2821C5.76328 10.575 6.23906 10.575 6.53203 10.2821L10.282 6.53208L10.2797 6.52974Z" fill="#C084FC"/></svg>
                            </div>
                        </div>
                    </article>

                    <article class="flora-blog-card">
                        <div class="flora-blog-card-image">
                            <img src="https://api.builder.io/api/v1/image/assets/TEMP/7ca1c63698739f679d7015833a2ad2537c2823d0?width=546" alt="Lilac flower arrangement in a glass vase" />
                        </div>
                        <div class="flora-blog-card-body">
                            <div class="flora-tag"><span class="flora-tag-text">Lilac</span></div>
                            <h3 class="flora-blog-card-title">Lilac Season: Styling Spring's Sweetest Bloom</h3>
                            <p class="flora-blog-card-excerpt">Tips for making the most of this fleeting, fragrant spring flower.</p>
                            <div class="flora-blog-card-footer">
                                <span class="flora-read-time">4 min read</span>
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 6.52974C10.5727 6.23677 10.5727 5.76099 10.2797 5.46802L6.52969 1.71802C6.23672 1.42505 5.76094 1.42505 5.46797 1.71802C5.175 2.01099 5.175 2.48677 5.46797 2.77974L7.94062 5.25005H0.75C0.335156 5.25005 0 5.58521 0 6.00005C0 6.41489 0.335156 6.75005 0.75 6.75005H7.93828L5.47031 9.22036C5.17734 9.51333 5.17734 9.98911 5.47031 10.2821C5.76328 10.575 6.23906 10.575 6.53203 10.2821L10.282 6.53208L10.2797 6.52974Z" fill="#C084FC"/></svg>
                            </div>
                        </div>
                    </article>

                    <article class="flora-blog-card">
                        <div class="flora-blog-card-image">
                            <img src="https://api.builder.io/api/v1/image/assets/TEMP/c2942c9f8890cf73c9eaafe1df3c324721de6648?width=546" alt="Purple violet flower arrangement in a dark terracotta pot" />
                        </div>
                        <div class="flora-blog-card-body">
                            <div class="flora-tag"><span class="flora-tag-text">Violet</span></div>
                            <h3 class="flora-blog-card-title">Violet Moods: Bold Elegance for Every Room</h3>
                            <p class="flora-blog-card-excerpt">Deep violet arrangements that command attention and exude sophistication.</p>
                            <div class="flora-blog-card-footer">
                                <span class="flora-read-time">6 min read</span>
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 6.52974C10.5727 6.23677 10.5727 5.76099 10.2797 5.46802L6.52969 1.71802C6.23672 1.42505 5.76094 1.42505 5.46797 1.71802C5.175 2.01099 5.175 2.48677 5.46797 2.77974L7.94062 5.25005H0.75C0.335156 5.25005 0 5.58521 0 6.00005C0 6.41489 0.335156 6.75005 0.75 6.75005H7.93828L5.47031 9.22036C5.17734 9.51333 5.17734 9.98911 5.47031 10.2821C5.76328 10.575 6.23906 10.575 6.53203 10.2821L10.282 6.53208L10.2797 6.52974Z" fill="#C084FC"/></svg>
                            </div>
                        </div>
                    </article>

                    <article class="flora-blog-card">
                        <div class="flora-blog-card-image">
                            <img src="https://api.builder.io/api/v1/image/assets/TEMP/431b99a3b923a0b3df08ac64083977aafa5e00be?width=546" alt="Deep plum purple floral arrangement with dark blooms in a black matte vase" />
                        </div>
                        <div class="flora-blog-card-body">
                            <div class="flora-tag"><span class="flora-tag-text">Plum</span></div>
                            <h3 class="flora-blog-card-title">Plum &amp; Drama: Florals for Statement Moments</h3>
                            <p class="flora-blog-card-excerpt">Rich, theatrical plum blooms perfect for weddings and special events.</p>
                            <div class="flora-blog-card-footer">
                                <span class="flora-read-time">7 min read</span>
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 6.52974C10.5727 6.23677 10.5727 5.76099 10.2797 5.46802L6.52969 1.71802C6.23672 1.42505 5.76094 1.42505 5.46797 1.71802C5.175 2.01099 5.175 2.48677 5.46797 2.77974L7.94062 5.25005H0.75C0.335156 5.25005 0 5.58521 0 6.00005C0 6.41489 0.335156 6.75005 0.75 6.75005H7.93828L5.47031 9.22036C5.17734 9.51333 5.17734 9.98911 5.47031 10.2821C5.76328 10.575 6.23906 10.575 6.53203 10.2821L10.282 6.53208L10.2797 6.52974Z" fill="#C084FC"/></svg>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- ===== Sustainability ===== -->
        <section class="flora-sustainability">
            <div class="flora-sustainability-card">
                <div class="flora-sustainability-content">
                    <div class="flora-sustainability-badge">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.35234 4.52344L1.57266 4.90781C1.76719 5.24766 2.08594 5.49844 2.46328 5.60625L3.82031 5.99297C4.22344 6.10781 4.5 6.47578 4.5 6.89531V7.83047C4.5 8.08828 4.64531 8.32266 4.875 8.4375C5.10469 8.55234 5.25 8.78672 5.25 9.04453V9.95859C5.25 10.3242 5.59922 10.5891 5.95078 10.4883C6.32812 10.3805 6.62109 10.0781 6.71719 9.69609L6.78281 9.43359C6.88125 9.0375 7.13906 8.69766 7.49297 8.49609L7.68281 8.38828C8.03437 8.18906 8.25 7.81406 8.25 7.41094V7.21641C8.25 6.91875 8.13047 6.63281 7.91953 6.42188L7.82812 6.33047C7.61719 6.11953 7.33125 6 7.03359 6H6.02344C5.76328 6 5.50547 5.93203 5.27812 5.80313L4.46953 5.34141C4.36875 5.28281 4.29141 5.18906 4.25391 5.07891C4.17891 4.85391 4.27969 4.61016 4.49297 4.50469L4.63125 4.43437C4.78594 4.35703 4.96641 4.34297 5.13047 4.39922L5.67422 4.57969C5.86641 4.64297 6.07734 4.57031 6.1875 4.40391C6.29766 4.23984 6.28594 4.02188 6.15937 3.86953L5.84062 3.4875C5.60625 3.20625 5.60859 2.79609 5.84766 2.51953L6.21563 2.09062C6.42188 1.84922 6.45469 1.50469 6.29766 1.23047L6.24141 1.13203C6.15937 1.12734 6.07969 1.125 5.99766 1.125C3.82266 1.125 1.97813 2.55234 1.35234 4.52344ZM10.875 6C10.875 5.1375 10.65 4.32656 10.2563 3.62109L9.65625 3.8625C9.28828 4.01016 9.09844 4.42031 9.22266 4.79531L9.61875 5.98359C9.70078 6.22734 9.9 6.4125 10.1484 6.47344L10.8305 6.64453C10.8586 6.43359 10.8727 6.21797 10.8727 6H10.875ZM0 6C0 4.4087 0.632141 2.88258 1.75736 1.75736C2.88258 0.632141 4.4087 0 6 0C7.5913 0 9.11742 0.632141 10.2426 1.75736C11.3679 2.88258 12 4.4087 12 6C12 7.5913 11.3679 9.11742 10.2426 10.2426C9.11742 11.3679 7.5913 12 6 12C4.4087 12 2.88258 11.3679 1.75736 10.2426C0.632141 9.11742 0 7.5913 0 6Z" fill="#7E22CE"/>
                        </svg>
                        <span class="flora-sustainability-badge-text">Sustainable Sourcing</span>
                    </div>

                    <h2 class="flora-sustainability-heading">Beautiful blooms,<br>a lighter footprint<br>on the earth.</h2>

                    <p class="flora-sustainability-description">We partner exclusively with certified sustainable farms. Zero harmful pesticides, carbon-offset shipping, and fully compostable packaging — because loving flowers means loving the planet they grow from.</p>

                    <div class="flora-stats-grid">
                        <div class="flora-stat-card">
                            <span class="flora-stat-value">100%</span>
                            <span class="flora-stat-label">Pesticide-free farms</span>
                        </div>
                        <div class="flora-stat-card">
                            <span class="flora-stat-value">40+</span>
                            <span class="flora-stat-label">Certified farm partners</span>
                        </div>
                        <div class="flora-stat-card">
                            <span class="flora-stat-value">0</span>
                            <span class="flora-stat-label">Plastic in packaging</span>
                        </div>
                        <div class="flora-stat-card">
                            <span class="flora-stat-value">Net 0</span>
                            <span class="flora-stat-label">Carbon emissions</span>
                        </div>
                    </div>

                    <a href="#" class="flora-report-link">
                        Read our sustainability report
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2797 6.52974C10.5727 6.23677 10.5727 5.76099 10.2797 5.46802L6.52969 1.71802C6.23672 1.42505 5.76094 1.42505 5.46797 1.71802C5.175 2.01099 5.175 2.48677 5.46797 2.77974L7.94062 5.25005H0.75C0.335156 5.25005 0 5.58521 0 6.00005C0 6.41489 0.335156 6.75005 0.75 6.75005H7.93828L5.47031 9.22036C5.17734 9.51333 5.17734 9.98911 5.47031 10.2821C5.76328 10.575 6.23906 10.575 6.53203 10.2821L10.282 6.53208L10.2797 6.52974Z" fill="#7E22CE"/></svg>
                    </a>
                </div>
                <div class="flora-sustainability-image">
                    <img src="https://api.builder.io/api/v1/image/assets/TEMP/833a1e19a0458eb8f56e02ac8b1fe8d508dce18b?width=1152" alt="Vast lavender flower field in full bloom at golden hour" />
                </div>
            </div>
        </section>

        <!-- ===== Newsletter ===== -->
        <section class="flora-newsletter">
            <div class="flora-newsletter-card">
                <div class="flora-newsletter-gradient-bar" aria-hidden="true"></div>
                <div class="flora-newsletter-inner">
                    <div class="flora-newsletter-icon">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.57266 3.375H5.0625H3.78984H3.375V3.68438V5.0625V6.48281V9.61172L0.00703125 7.11914C0.0632813 6.48281 0.390234 5.89219 0.910547 5.50898L1.6875 4.93242V3.375C1.6875 2.44336 2.44336 1.6875 3.375 1.6875H6.06797L7.82227 0.390234C8.16328 0.137109 8.57461 0 9 0C9.42539 0 9.83672 0.137109 10.1777 0.386719L11.932 1.6875H14.625C15.5566 1.6875 16.3125 2.44336 16.3125 3.375V4.93242L17.0895 5.50898C17.6098 5.89219 17.9367 6.48281 17.993 7.11914L14.625 9.61172V6.48281V5.0625V3.68438V3.375H14.2102H12.9375H10.4273H7.57266ZM0 15.75V8.51133L7.65 14.1785C8.04023 14.4668 8.51484 14.625 9 14.625C9.48516 14.625 9.95977 14.4703 10.35 14.1785L18 8.51133V15.75C18 16.991 16.991 18 15.75 18H2.25C1.00898 18 0 16.991 0 15.75ZM6.1875 5.625H11.8125C12.1219 5.625 12.375 5.87813 12.375 6.1875C12.375 6.49687 12.1219 6.75 11.8125 6.75H6.1875C5.87813 6.75 5.625 6.49687 5.625 6.1875C5.625 5.87813 5.87813 5.625 6.1875 5.625ZM6.1875 7.875H11.8125C12.1219 7.875 12.375 8.12813 12.375 8.4375C12.375 8.74687 12.1219 9 11.8125 9H6.1875C5.87813 9 5.625 8.74687 5.625 8.4375C5.625 8.12813 5.87813 7.875 6.1875 7.875Z" fill="#9333EA"/>
                        </svg>
                    </div>

                    <h2 class="flora-newsletter-heading">Join our blooming<br>community</h2>

                    <p class="flora-newsletter-subtitle">Get seasonal bloom guides, exclusive early access, and 15% off your first order delivered to your inbox.</p>

                    <form class="flora-newsletter-form" action="#" method="post" novalidate>
                        <label class="flora-sr-only" for="newsletter-email">Email address</label>
                        <input class="flora-email-input" id="newsletter-email" type="email" placeholder="Enter your email address" />
                        <button class="flora-subscribe-btn" type="submit">Subscribe</button>
                    </form>

                    <div class="flora-newsletter-disclaimer">
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.375 3.375V4.5H7.125V3.375C7.125 2.33906 6.28594 1.5 5.25 1.5C4.21406 1.5 3.375 2.33906 3.375 3.375ZM1.875 4.5V3.375C1.875 1.51172 3.38672 0 5.25 0C7.11328 0 8.625 1.51172 8.625 3.375V4.5H9C9.82734 4.5 10.5 5.17266 10.5 6V10.5C10.5 11.3273 9.82734 12 9 12H1.5C0.672656 12 0 11.3273 0 10.5V6C0 5.17266 0.672656 4.5 1.5 4.5H1.875Z" fill="#D8B4FE"/></svg>
                        <span class="flora-disclaimer-text">No spam, ever. Unsubscribe at any time.</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ===== Footer ===== -->
    <footer class="flora-footer">
        <div class="flora-footer-inner">
            <div class="flora-footer-logo">
                <div class="flora-logo-icon">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.4375 2.62511C5.28828 2.62511 3.46992 4.03331 2.85195 5.97471C3.7707 5.50987 4.80703 5.2501 5.90625 5.2501H8.3125C8.55313 5.2501 8.75 5.44698 8.75 5.6876C8.75 5.92823 8.55313 6.1251 8.3125 6.1251H7.875H5.90625C5.45234 6.1251 5.01211 6.17706 4.58828 6.27276C3.88008 6.43409 3.22109 6.7212 2.63594 7.11221C1.04727 8.17042 0 9.97784 0 12.0314V12.4689C0 12.8325 0.292578 13.1251 0.65625 13.1251C1.01992 13.1251 1.3125 12.8325 1.3125 12.4689V12.0314C1.3125 10.6997 1.87852 9.50206 2.78359 8.66261C3.325 10.7271 5.20352 12.2501 7.4375 12.2501H7.46484C11.077 12.231 14 8.67081 14 4.28214C14 3.11729 13.7949 2.00987 13.423 1.01182C13.352 0.823152 13.0758 0.831355 12.9801 1.00909C12.466 1.97159 11.4488 2.62511 10.2812 2.62511H7.4375Z" fill="#9333EA"/>
                    </svg>
                </div>
                <span class="flora-logo-name">FloraConcept</span>
            </div>

            <nav class="flora-footer-links" aria-label="Footer">
                <a href="#" class="flora-footer-link flora-footer-link-active">Shop</a>
                <a href="#" class="flora-footer-link">Occasions</a>
                <a href="#" class="flora-footer-link">About</a>
                <a href="#" class="flora-footer-link">Contact</a>
                <a href="#" class="flora-footer-link">Sustainability</a>
                <a href="#" class="flora-footer-link">Blog</a>
            </nav>

            <div class="flora-footer-divider" role="separator"></div>

            <div class="flora-footer-bottom">
                <p class="flora-copyright">© 2024 FloraConcept. All rights reserved.</p>

                <div class="flora-social-links">
                    <!-- Instagram -->
                    <a href="#" class="flora-social-btn" aria-label="Instagram">
                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.12783 3.85537C4.38877 3.85537 2.98603 5.25811 2.98603 6.99717C2.98603 8.73623 4.38877 10.139 6.12783 10.139C7.86689 10.139 9.26963 8.73623 9.26963 6.99717C9.26963 5.25811 7.86689 3.85537 6.12783 3.85537ZM6.12783 9.03975C5.004 9.03975 4.08525 8.12373 4.08525 6.99717C4.08525 5.87061 5.00127 4.95459 6.12783 4.95459C7.25439 4.95459 8.17041 5.87061 8.17041 6.99717C8.17041 8.12373 7.25166 9.03975 6.12783 9.03975ZM10.131 3.72686C10.131 4.13428 9.80283 4.45967 9.39815 4.45967C8.99072 4.45967 8.66533 4.13154 8.66533 3.72686C8.66533 3.32217 8.99346 2.99404 9.39815 2.99404C9.80283 2.99404 10.131 3.32217 10.131 3.72686ZM12.2118 4.47061C12.1653 3.48896 11.9411 2.61943 11.222 1.90303C10.5056 1.18662 9.63604 0.962402 8.6544 0.913184C7.64268 0.855762 4.61025 0.855762 3.59854 0.913184C2.61963 0.959668 1.7501 1.18389 1.03096 1.90029C0.311816 2.6167 0.090332 3.48623 0.0411133 4.46787C-0.0163086 5.47959 -0.0163086 8.51201 0.0411133 9.52373C0.0875977 10.5054 0.311816 11.3749 1.03096 12.0913C1.7501 12.8077 2.61689 13.0319 3.59854 13.0812C4.61025 13.1386 7.64268 13.1386 8.6544 13.0812C9.63604 13.0347 10.5056 12.8104 11.222 12.0913C11.9384 11.3749 12.1626 10.5054 12.2118 9.52373C12.2692 8.51201 12.2692 5.48232 12.2118 4.47061ZM10.9048 10.6093C10.6915 11.1452 10.2786 11.5581 9.73994 11.7741C8.9333 12.094 7.01924 12.0202 6.12783 12.0202C5.23643 12.0202 3.31963 12.0913 2.51572 11.7741C1.97979 11.5608 1.56689 11.1479 1.35088 10.6093C1.03096 9.80264 1.10479 7.88857 1.10479 6.99717C1.10479 6.10576 1.03369 4.18896 1.35088 3.38506C1.56416 2.84912 1.97705 2.43623 2.51572 2.22021C3.32236 1.90029 5.23643 1.97412 6.12783 1.97412C7.01924 1.97412 8.93604 1.90303 9.73994 2.22021C10.2759 2.4335 10.6888 2.84639 10.9048 3.38506C11.2247 4.1917 11.1509 6.10576 11.1509 6.99717C11.1509 7.88857 11.2247 9.80537 10.9048 10.6093Z" fill="#A855F7"/></svg>
                    </a>
                    <!-- Pinterest -->
                    <a href="#" class="flora-social-btn" aria-label="Pinterest">
                        <svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.57812 0.177734C2.77266 0.177734 0 2.04805 0 5.075C0 7 1.08281 8.09375 1.73906 8.09375C2.00977 8.09375 2.16562 7.33906 2.16562 7.12578C2.16562 6.87148 1.51758 6.33008 1.51758 5.27187C1.51758 3.07344 3.19102 1.51484 5.35664 1.51484C7.21875 1.51484 8.59688 2.57305 8.59688 4.51719C8.59688 5.96914 8.01445 8.69258 6.12773 8.69258C5.44688 8.69258 4.86445 8.20039 4.86445 7.49492C4.86445 6.46133 5.58633 5.46055 5.58633 4.39414C5.58633 2.58398 3.01875 2.91211 3.01875 5.09961C3.01875 5.55898 3.07617 6.06758 3.28125 6.48594C2.90391 8.11016 2.13281 10.5301 2.13281 12.2035C2.13281 12.7203 2.20664 13.2289 2.25586 13.7457C2.34883 13.8496 2.30234 13.8387 2.44453 13.7867C3.82266 11.9 3.77344 11.5309 4.39687 9.06172C4.7332 9.70156 5.60273 10.0461 6.2918 10.0461C9.1957 10.0461 10.5 7.21602 10.5 4.66484C10.5 1.94961 8.15391 0.177734 5.57812 0.177734Z" fill="#A855F7"/></svg>
                    </a>
                    <!-- TikTok -->
                    <a href="#" class="flora-social-btn" aria-label="TikTok">
                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.2501 5.73973C11.0463 5.74261 9.872 5.36718 8.89312 4.66648V9.55336C8.89279 10.4585 8.61614 11.3419 8.10017 12.0855C7.5842 12.8292 6.8535 13.3975 6.00578 13.7147C5.15806 14.0318 4.23372 14.0826 3.35636 13.8602C2.479 13.6378 1.69044 13.1529 1.09612 12.4703C0.501804 11.7876 0.130057 10.9398 0.0305881 10.0402C-0.0688806 9.14057 0.10867 8.23203 0.539499 7.43604C0.970328 6.64005 1.6339 5.99456 2.44149 5.58588C3.24907 5.17721 4.16218 5.02482 5.0587 5.1491V7.60703C4.64845 7.47799 4.20791 7.48187 3.8 7.61814C3.39209 7.7544 3.03766 8.01607 2.78734 8.36578C2.53701 8.71549 2.40359 9.13536 2.40612 9.56542C2.40866 9.99549 2.54702 10.4138 2.80144 10.7605C3.05587 11.1072 3.41335 11.3647 3.82284 11.4962C4.23233 11.6276 4.67288 11.6263 5.08159 11.4924C5.49029 11.3586 5.84625 11.099 6.09862 10.7507C6.35099 10.4025 6.48688 9.98343 6.48687 9.55336V0H8.89312C8.89145 0.203202 8.90847 0.406128 8.94398 0.606211C9.02759 1.05287 9.20145 1.47777 9.45491 1.85493C9.70837 2.23209 10.0361 2.55357 10.4181 2.79973C10.9615 3.15905 11.5986 3.35057 12.2501 3.35043V5.73973Z" fill="#A855F7"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="#" class="flora-social-btn" aria-label="Facebook">
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.63281 7.875L8.02164 5.34133H5.59051V3.69715C5.59051 3.00398 5.93012 2.32832 7.01895 2.32832H8.12418V0.171172C8.12418 0.171172 7.12121 0 6.16227 0C4.16016 0 2.85148 1.21352 2.85148 3.41031V5.34133H0.625977V7.875H2.85148V14H5.59051V7.875H7.63281Z" fill="#A855F7"/></svg>
                    </a>
                </div>

                <div class="flora-made-with">
                    <span class="flora-made-with-text">Made with</span>
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.11562 7.04051L5.35078 10.9944C5.52656 11.1585 5.75859 11.2499 6 11.2499C6.24141 11.2499 6.47344 11.1585 6.64922 10.9944L10.8844 7.04051C11.5969 6.37723 12 5.44676 12 4.4741V4.33816C12 2.69988 10.8164 1.30301 9.20156 1.03348C8.13281 0.85535 7.04531 1.20457 6.28125 1.96863L6 2.24988L5.71875 1.96863C4.95469 1.20457 3.86719 0.85535 2.79844 1.03348C1.18359 1.30301 0 2.69988 0 4.33816V4.4741C0 5.44676 0.403125 6.37723 1.11562 7.04051Z" fill="#C084FC"/></svg>
                    <span class="flora-made-with-text">for flower lovers.</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
