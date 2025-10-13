@extends('layout')

@section('title', 'Social Media')

@section('content')
{{--  Custom styling + accent color  --}}
<style>
    :root { --accent: #6f42c1; } /* fallback accent */

    /* per-button accents (each button sets its own --accent which is used on hover) */
    .btn-twitter { --accent: #1DA1F2; }
    .btn-linkedin { --accent: #0077b5; }
    .btn-instagram { --accent: #E1306C; }

    .social-card {
        border-radius: .5rem;
        overflow: hidden;
        transition: box-shadow .18s ease, transform .12s ease, border-color .18s ease;
    }

    .social-card:hover, .social-card:focus-within {
        box-shadow: 0 8px 28px rgba(111,66,193,0.12);
        transform: translateY(-3px);
        border-color: rgba(111,66,193,0.25);
    }

    .social-accent {
        height: 6px;
        background: linear-gradient(90deg, var(--accent), #e1306c 70%);
    }

    .btn-outline-x { border-color: #1DA1F2; color: #1DA1F2; }
    .btn-outline-insta { border-color: #833AB4; color: #E1306C; }
    .btn-outline-linkedin { border-color: #007bb5; color: #00a0dc; }

    /* highlight buttons on hover using accent variable when hovered/focused */
    .btn-outline-primary:hover, .btn-outline-primary:focus,
    .btn-outline-x:hover, .btn-outline-x:focus,
    .btn-outline-insta:hover, .btn-outline-insta:focus,
    .btn-outline-linkedin:hover, .btn-outline-linkedin:focus {
        color: #fff !important;
        background: var(--accent) !important;
        border-color: var(--accent) !important;
        box-shadow: 0 6px 18px rgba(111,66,193,0.12);
    }

    a.btn { min-width: 140px; }
</style>

<div class="d-flex justify-content-center">
    <div class="card shadow-sm w-100 social-card" style="max-width:720px;">
        <div class="social-accent" aria-hidden="true"></div>
        <div class="card-body text-center">
            <h1 class="card-title mb-2">Connect with me</h1>
            <p class="text-muted mb-4">Follow my work, see updates, or reach out for collaborations.</p>

            <div class="d-flex flex-column flex-sm-row justify-content-center gap-2">
                <a href="" class="btn btn-outline-primary btn-twitter d-flex align-items-center justify-content-center btn-outline-x"
                target="_blank">
                    <!-- Twitter icon (simple) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter me-2" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.009-.422A6.68 6.68 0 0 0 16 3.542a6.533 6.533 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.084.797A3.286 3.286 0 0 0 7.88 6.03 9.325 9.325 0 0 1 1.112 2.1 3.286 3.286 0 0 0 2.13 7.86 3.203 3.203 0 0 1 .64 7.13v.041a3.286 3.286 0 0 0 2.633 3.218 3.203 3.203 0 0 1-.865.115c-.212 0-.418-.02-.616-.058a3.288 3.288 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.046A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    <span>Twitter</span>
                </a>

                <a href="https://www.linkedin.com/in/shiaseeds" class="btn btn-outline-linkedin btn-linkedin d-flex align-items-center justify-content-center"
                target="_blank">
                    <!-- LinkedIn icon (simple) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin me-2" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175A1.175 1.175 0 0 1 0 14.854V1.146zM4.943 12.306V5.337H2.542v6.969h2.401zm-1.2-7.934c.837 0 1.357-.554 1.357-1.248C5.1 2.027 4.53 1.5 3.757 1.5c-.773 0-1.357.527-1.357 1.624 0 .694.52 1.248 1.357 1.248h.029zM13.458 12.306V8.354c0-2.095-1.121-3.067-2.618-3.067-1.2 0-1.737.66-2.039 1.124v.042h-.018L8.5 5.337H6.297c.03.685 0 6.969 0 6.969h2.401v-3.9c0-.209.015-.419.08-.569.195-.419.64-.853 1.387-.853.98 0 1.372.643 1.372 1.586v3.736h2.401z"/>
                    </svg>
                    <span>LinkedIn</span>
                </a>
                <a href="https://www.instagram.com/shiaseeds_" target="_blank"
                class="btn btn-outline-insta btn-instagram d-flex align-items-center justify-content-center">
                        <!-- Instagram icon (simple) -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram me-2" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M8 3.162a4.838 4.838 0 1 0 0 9.676 4.838 4.838 0 0 0 0-9.676zM8 10.6a2.6 2.6 0 1 1 0-5.2 2.6 2.6 0 0 1 0 5.2z"/>
                            <path d="M12.744 2.5a1.05 1.05 0 1 1-2.1 0 1.05 1.05 0 0 1 2.1 0z"/>
                            <path d="M3.5 1A2.5 2.5 0 0 0 1 3.5v9A2.5 2.5 0 0 0 3.5 15h9a2.5 2.5 0 0 0 2.5-2.5v-9A2.5 2.5 0 0 0 12.5 1h-9zM2 3.5A1.5 1.5 0 0 1 3.5 2h9A1.5 1.5 0 0 1 14 3.5v9A1.5 1.5 0 0 1 12.5 14h-9A1.5 1.5 0 0 1 2 12.5v-9z"/>
                        </svg>
                        <span>Instagram</span>
                </a>
            </div>

            <div class="mt-4 small text-muted">Or email me at <a href="mailto:you@example.com">you@example.com</a></div>
        </div>
    </div>
</div>

@endsection
