@extends('layouts.app')
@section('title', 'EduX | Pages')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/page-managment.css') }}">
    <div class="container">
        <main class="main-content">
            <section class="videos-list">
                <div class="videos-container">
                    {{-- Privacy Policy --}}
                    <div class="video-item">
                        <div class="video-details">
                            <h2>Privacy Policy</h2>
                            <p>This Privacy Policy is meant to help you understand what data we collect, why we collect it,
                                and what we do with it.</p>
                        </div>
                        <div class="video-actions-container">
                            <div class="video-actions">
                                <div class="switch-container">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="action-buttons">
                                    <a href="{{ route('pages.edit_privacy', 1) }}" class="action-button edit">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Terms & Conditions --}}
                    <div class="video-item">
                        <div class="video-details">
                            <h2>Terms & Conditions</h2>
                            <p>By downloading or using the app, these terms will automatically apply to you. Make sure you read them carefully before using the app.</p>
                        </div>
                        <div class="video-actions-container">
                            <div class="video-actions">
                                <div class="switch-container">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="action-buttons">
                                    <a href="{{ route('pages.edit_term', 2) }}" class="action-button edit">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- About Us --}}
                    <div class="video-item">
                        <div class="video-details">
                            <h2>About Us</h2>
                            <p>We are committed to delivering quality education services tailored to learners of all ages and backgrounds.</p>
                        </div>
                        <div class="video-actions-container">
                            <div class="video-actions">
                                <div class="switch-container">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="action-buttons">
                                    <a href="{{ route('pages.edit_term', 3) }}" class="action-button edit">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </main>
    </div>
@endsection
