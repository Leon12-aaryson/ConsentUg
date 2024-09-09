@extends('layouts.app')
@section('title', 'Events')
<div class="header">
    <div class="contact">
        <div class="container">
            <h3>Events</h3>
        </div>
    </div>
</div>
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Events</h1>
                <p>Here are some of our upcoming events:</p>
                <ul>
                    <li><a href="/event/1">Event 1</a></li>
                    <li><a href="/event/2">Event 2</a></li>
                    <li><a href="/event/3">Event 3</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
