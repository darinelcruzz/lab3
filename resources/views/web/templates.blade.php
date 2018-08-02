@extends('web.root')

@section('main')
    <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>Plantillas</h1>
                </header>
                <p>Conjunto de plantillas que pueden servir de base para su sitio web</p>

                <div class="row 200%">
                    <div class="12u$ 12u$(medium)">
                        <div class="box alt">
                            <div class="row 50% uniform">
                                <div class="4u">
                                    <span class="image fit">
                                    <a href="{{ route('template.show', 'apex') }}">
                                        <img src="{{ asset('templates/apex/images/apex.png')}}" alt="APEX"/>
                                    </a>
                                    </span>
                                </div>
                                <div class="4u">
                                    <span class="image fit">
                                    <a href="{{ route('template.show', 'atmosphere') }}">
                                        <img src="{{ asset('templates/atmosphere/images/atmosphere.png')}}" alt="APEX"/>
                                    </a>
                                    </span>
                                </div>
                                <div class="4u$">
                                    <span class="image fit">
                                    <a href="{{ route('template.show', 'hyperspace') }}">
                                        <img src="{{ asset('templates/hyperspace/images/hyperspace.png')}}" alt="APEX"/>
                                    </a>
                                    </span>
                                </div>
                                <!-- Break -->
                                <div class="4u">
                                    <span class="image fit">
                                    <a href="{{ route('template.show', 'atmosphere') }}">
                                        <img src="{{ asset('templates/atmosphere/images/atmosphere.png')}}" alt="APEX"/>
                                    </a>
                                    </span>
                                </div>
                                <div class="4u">
                                    <span class="image fit">
                                    <a href="{{ route('template.show', 'apex') }}">
                                        <img src="{{ asset('templates/apex/images/apex.png')}}" alt="APEX"/>
                                    </a>
                                    </span>
                                </div>
                                <div class="4u$">
                                    <span class="image fit">
                                    <a href="{{ route('template.show', 'hyperspace') }}">
                                        <img src="{{ asset('templates/hyperspace/images/hyperspace.png')}}" alt="APEX"/>
                                    </a>
                                    </span>
                                </div>
                                <!-- Break -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
