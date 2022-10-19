@extends('adminlte::page')

@section('title', 'Tempano')

@section('content_header')
    <h1>Chats</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Chats CACA</div>
        <div class="card-body">
            <chat-messages :messages="messages"></chat-messages>
        </div>
        <div class="card-footer">
            <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
        </div>
    </div>
</div>
@stop


<div class="container">
    <div class="card">
        <div class="card-header">Chats CACA</div>
        <div class="card-body">
            <chat-messages :messages="messages"></chat-messages>
        </div>
        <div class="card-footer">
            <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
        </div>
    </div>
</div>
