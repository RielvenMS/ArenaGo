  <style>
    :root {
      --brand-red:   #E8112D;
      --brand-dark:  #111111;
      --brand-gray:  #f5f5f5;
      --brand-blue:  #1A6FC4;
    }

    body {
      font-family: 'Barlow', sans-serif;
      background: #fff;
      color: var(--brand-dark);
    }

    /* ── NAVBAR ── */
    .navbar-brand-text {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 2rem;
      color: var(--brand-dark);
      letter-spacing: 1px;
    }
    .navbar-brand-text span { color: var(--brand-red); }
    .nav-link {
      font-weight: 600;
      font-size: .85rem;
      letter-spacing: .08em;
      text-transform: uppercase;
      color:white !important;
    }
    .nav-link:hover { color: var(--brand-red) !important; }

    /* ── HERO BANNER ── */
    .hero-banner {
      background: var(--brand-red);
      padding: 1.25rem 0;
    }
    .hero-banner h1 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(2.2rem, 5vw, 3.5rem);
      color: #fff;
      letter-spacing: .12em;
      margin: 0;
    }

    /* ── BACK LINK ── */
    .back-link {
      color: var(--brand-blue);
      font-weight: 600;
      font-size: .9rem;
      text-decoration: none;
    }
    .back-link:hover { text-decoration: underline; }

    /* ── COURT IMAGE ── */
    .court-img {
      width: 100%;
      height: 280px;
      object-fit: cover;
      border-radius: .5rem;
    }

    /* ── TITLE ── */
    .venue-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(1.8rem, 4vw, 2.8rem);
      letter-spacing: .05em;
      line-height: 1.1;
    }
    .venue-subtitle {
      color: #555;
      font-size: .9rem;
      font-weight: 500;
    }

    /* ── CARDS ── */
    .info-card {
      border: 1px solid #e0e0e0;
      border-radius: .6rem;
      padding: 1.1rem 1.25rem;
      margin-bottom: 1rem;
      background: #fff;
    }
    .info-card h6 {
      font-weight: 700;
      font-size: .8rem;
      text-transform: uppercase;
      letter-spacing: .08em;
      color: #333;
      margin-bottom: .75rem;
    }

    /* Características badges */
    .feature-badge {
      display: inline-flex;
      align-items: center;
      gap: .35rem;
      background: var(--brand-gray);
      border-radius: 2rem;
      padding: .3rem .75rem;
      font-size: .8rem;
      font-weight: 600;
      margin-right: .4rem;
      margin-bottom: .4rem;
    }
    .feature-badge i { font-size: .95rem; color: #555; }

    /* Status pill */
    .status-good {
      color: #1a8c4e;
      font-weight: 700;
      font-size: .9rem;
    }
    .status-good i { color: #1a8c4e; }

    /* Horarios */
    .schedule-row {
      display: flex;
      align-items: center;
      gap: .5rem;
      font-size: .9rem;
    }
    .schedule-row .badge-day {
      background: var(--brand-dark);
      color: #fff;
      border-radius: .25rem;
      padding: .2rem .5rem;
      font-size: .75rem;
      font-weight: 600;
    }
    .schedule-row .badge-hours {
      background: var(--brand-gray);
      border-radius: .25rem;
      padding: .2rem .6rem;
      font-size: .8rem;
      font-weight: 600;
    }

    /* Reservación */
    .no-reserva {
      color: var(--brand-blue);
      font-weight: 700;
      font-size: .9rem;
    }

    /* Rating */
    .rating-score {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 3rem;
      line-height: 1;
      color: var(--brand-dark);
    }
    .stars-fill { color: #F5A623; }

    /* Reviews */
    .review-item {
      border-top: 1px solid #eee;
      padding: .75rem 0;
    }
    .review-avatar {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
      background: #ccc;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: .9rem;
      color: #fff;
      flex-shrink: 0;
    }
    .avatar-alejandro { background: #5b7bbd; }
    .avatar-erika     { background: #bd5b7b; }

    .review-name  { font-weight: 700; font-size: .85rem; }
    .review-text  { font-size: .82rem; color: #444; }

    /* Write review button */
    .btn-review {
      background: var(--brand-red);
      color: #fff;
      border: none;
      border-radius: .35rem;
      font-weight: 700;
      font-size: .85rem;
      letter-spacing: .05em;
      padding: .6rem 1.25rem;
      width: 100%;
      transition: background .2s;
    }
    .btn-review:hover { background: #c00020; color: #fff; }

    /* ── FOOTER CREDITS ── */
    .footer-credits {
      background: var(--brand-dark);
      color: #fff;
      padding: 1.5rem 0;
    }
    .footer-credits .credit-name {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 1.6rem;
      letter-spacing: .1em;
      text-align: center;
    }
  </style>

@include('complementos.header')



<body>
  <!-- ── MAIN CONTENT ── -->
  <div class="container py-4">

    <div class="row g-4">

      <!-- LEFT COLUMN -->
      <div class="col-lg-6">

        <!-- Venue title -->
        <h2 class="venue-title mb-1">{{ $escenario->nombre_escenario }}</h2>


        <!-- Court image -->
        <img
          src="Gemini_Generated_Image_penabypenabypena.png"
          alt="Cancha de Básquet Las Palmeras"
          class="court-img mb-4 mt-3"
          onerror="this.src='{{ asset('storage/' . $escenario->imagen) }}'; this.onerror=null;"
        />

        <!-- General info -->
        <h5 class="fw-bold mb-2">Información General:</h5>
        <p class="text-muted" style="font-size:.92rem; line-height:1.6;">{{ $escenario->descripcion }}</p>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="col-lg-6">

        <!-- Características -->
        <div class="info-card">
          <h6><i class="bi bi-geo-alt-fill me-1" style="color:var(--brand-red)"></i>Características del lugar</h6>
          <span class="feature-badge"><i class=""></i>{{ $escenario->deporte }}</span>
          <span class="feature-badge"><i class=""></i>{{ $escenario->capacidad }} Personas</span>
          <span class="feature-badge"><i class=""></i> {{ $escenario->municipio }}</span>
          <span class="feature-badge"><i class=""></i> {{ $escenario->direccion }}</span>
        </div>

        <!-- Infraestructura -->
        <div class="info-card">
          <h6><i class="bi bi-hammer me-1" style="color:var(--brand-red)"></i>Condiciones de Infraestructura</h6>
          <span class="feature-badge"><i class=""></i>Iluminación: {{ $escenario->iluminacion }}</span>
          <span class="feature-badge"><i class=""></i>Tipo de Suelo: {{ $escenario->suelo }}</span>
          <span class="feature-badge"><i class=""></i>Baños: {{ $escenario->banos }}</span>
        </div>

        <!-- Horarios -->
        <div class="info-card">
          <h6><i class="bi bi-clock me-1" style="color:var(--brand-red)"></i>Horarios</h6>
          <div class="schedule-row">
            <i class="bi bi-calendar-check text-primary"></i>
            <span class="badge-day">{{ $escenario->horarios}}</span>
          </div>
        </div>

      </div><!-- /right col -->
    </div><!-- /row -->
  </div><!-- /container -->

  @include('complementos.footer')   