@extends('layout')
@section('title', 'Maxence Martin - Développeur Web')
@section('includes')
    <link rel="stylesheet" href="{{ '../resources/css/app.css' }}">
@endsection
@section('content')
    <main>
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
