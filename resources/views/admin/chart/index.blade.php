@extends('templates.app')

@section('title', 'Chart')
@section('active-chart', 'active')

@section('content')
    <livewire:charts></livewire:charts>

    <livewire:scripts />
    <livewire:styles />

@endsection


