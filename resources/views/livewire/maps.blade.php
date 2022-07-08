{{--
-*- coding: utf-8 -*-

Creado en la fecha (12/06/2022) hora (06:19 pm)

@author: @Manriv31
--}}

<div>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
    </head>
    {{-- <body> --}}
    <div id="floating-panel">
        <b>Start: </b>
        <input type="search" id="start">
        <br /><br />
        {{-- <select id="start">
        <option value="san salvador, sv">San Salvador</option>
        </select> --}}
        <b>End: </b>
        <input type="search" id="end">
        {{-- <select id="end">
        <option value="universidad evangelica, sv">Universidad Evangelica</option>
        <option value="redondel masferrer">Redondel Masferrer</option>
        </select> --}}
    </div>
    <div id="map"></div>
    <script
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GMAP_KEY') }}&callback=initMap&v=weekly"
    defer
    ></script>
    {{-- </body> --}}
</div>