@extends('layouts.sample')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-1 menu">
                <div class="icon">
                    <img src="{{ url('assets/img/profile-avatar.png') }}" alt="Profile">
                </div>
                <div class="icon" id="open_nav">
                    <img src="{{ url('assets/img/menu-expand.png') }}" alt="Open Menu">
                </div>
                <div class="icon">
                    <img src="{{ url('assets/img/plus.png') }}" alt="Open Add">
                </div>
                <div class="icon">
                    <img src="{{ url('assets/img/search.png') }}" alt="Search">
                </div>
            </div>
            <div class="col-md-11 content">
                <h1 class="title">Explore the Community</h1>

                <div class="main"></div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>
    <img src="{{ url('assets/img/close-button.png') }}" class="close_btn">
    <div id="slide_nav" class="slide_nav">
        <div class="slide_nav_top">
            <img src="{{ url('assets/img/profile-avatar.png') }}" alt="Profile">
            <h4 class="log_user_name">Margaret Macdiarmid</h4>

            <div class="row options_row">
                <div class="col-md-4 nav_options">
                    <img src="{{ url('assets/img/chat.png') }}" alt="chat"> 12
                </div>
                <div class="col-md-4 nav_options">
                    <img src="{{ url('assets/img/user.png') }}"> 11/43
                </div>
                <div class="col-md-4 nav_options">
                    <img src="{{ url('assets/img/stats.png') }}"> 3
                </div>
            </div>
        </div>

        <ul class="slide_nav_links">
            <li>
                <table class="link_table">
                    <tr>
                        <td width="50"><img src="{{ url('assets/img/notification.png') }}"><b class="not_icon">4</b></td>
                        <td>Notifications</td>
                    </tr>
                </table>
            </li>
            <li>
                <table class="link_table">
                    <tr>
                        <td width="50"><img src="{{ url('assets/img/help.png') }}"></td>
                        <td>Help</td>
                    </tr>
                </table>
            </li>
            <li>
                <table class="link_table">
                    <tr>
                        <td width="50"><img src="{{ url('assets/img/signout.png') }}"></td>
                        <td>Sing Out</td>
                    </tr>
                </table>
            </li>
        </ul>
    </div>

@endsection
