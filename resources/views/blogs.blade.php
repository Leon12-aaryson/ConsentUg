@extends('layouts.app')
@section('title', 'Blogs')
@section('body')
    <div class="contact">
        <div class="container">
            <h3>Contact Us</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blogs</h1>
                <p>Here are some of our latest blog posts:</p>
                <ul>
                    <li><a href="/blog/1">Blog Post 1</a></li>
                    <li><a href="/blog/2">Blog Post 2</a></li>
                    <li><a href="/blog/3">Blog Post 3</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
