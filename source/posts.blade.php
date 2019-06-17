@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
