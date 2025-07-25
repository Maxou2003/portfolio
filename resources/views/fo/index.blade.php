@extends('layouts.connected')
@section('title', 'Maxence Martin - Développeur Web')
@section('content')
    <main id="index_page" class="container d-flex flex-column justify-content-center col-12 col-md-8 col-lg-6 mt-3">
        <section id="about">
            <h2>À propos</h2>
            <p>
                Je suis un <strong>développeur web full stack</strong> passionné par les technologies modernes.
                Mon objectif est de créer des expériences performantes, élégantes et accessibles.
            </p>
        </section>

        <section id="projects">
            <h2>Projets récents</h2>
            <p>
                → <a href="#">No Reality</a> – Simulateur de réseaux sociaux pour l’OSINT<br />
                → <a href="#">Global Challenge</a> – Jeu stratégique d’entreprise multijoueur<br />
            </p>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>
                Discutons sur <a href="#">LinkedIn</a> ou écris-moi à <a
                    href="mailto:lemaila.maxence@gmail.com">lemaila.maxence@gmail.com</a>
            </p>
        </section>
    </main>
@endsection
