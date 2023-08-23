@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    navbar
@endsection


@section('sidebar')
    sidebar
@endsection

@section('content')
LOGIN<br/>
<details class="dropdown mb-32">
    <summary class="m-1 btn">open or close</summary>
    <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
      <li><a>Item 1</a></li>
      <li><a>Item 2</a></li>
    </ul>
  </details>
@endsection

