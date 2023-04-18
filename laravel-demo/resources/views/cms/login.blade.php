@extends('cms.layouts.app')
@section('title', 'Login')
@section('sidebar')
    @parent
    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
    </ul>
@endsection

@section('content')
    {!! $name !!}<br>
    {{ $name }}<br>

    @if (count($records) === 1)
        {{-- Khối lệnh --}}
    @elseif (count($records) > 1)
        {{-- Khối lệnh --}}
    @else
        {{-- Khối lệnh --}}
    @endif


    @isset($records)
        {{-- Khối lệnh --}}
    @endisset
        {{-- Khối lệnh --}}
    @empty($records)
        {{-- Khối lệnh --}}
    @endempty


    @switch($status)
        @case(1)
            {{--First case...--}}
            @break
        @case(2)
            {{--Second case...--}}
            @break
        @default
            {{--Default case...--}}
            @break
    @endswitch

    {{--For statement--}}
    @for ($i = 0; $i < 10; $i++)
        {{ $i }} </br>
    @endfor
    {{--Foreach statement--}}

    @foreach ($records as $key => $row)
        {{ $key . '-' . $row }} </br>
    @endforeach
    {{--While statement--}}
    @php
        $i = 5;
    @endphp
    @while ($i <= 10)
        @php
            $i++;
        @endphp
        <p>I'm looping forever.</p>
    @endwhile
@endsection

