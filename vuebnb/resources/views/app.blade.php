<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vuebnb</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <script>
        window.vuebnb_listing_model = "{!! addslashes(json_encode($model)) !!}";
    </script>
</head>
<body>
<div id="toolbar">
    <img class="icon" :src="images[0]">
    <h1>Vuebnb</h1>
</div>
<div id="app">
    <div class="header" @click="modalOpen = true">
        <div class="header-img" :style="headerImageStyle"></div>
        <button class="view-photos">View Photos</button>
    </div>
    <div class="container">
        <div class="heading">
            <h1>@{{ title }}</h1>
<p>@{{ address }}</p>
</div>
<hr>
<div class="about">
    <h3>About this listing</h3>
    <p :class="{'contracted': contracted}">@{{ about }}</p>
    <button v-if="contracted" class="more" @click="contracted = false">+ More</button>
</div>
<div class="lists">
    <hr>
    <div class="amenities list">
        <div class="title"><strong>Amenities</strong></div>
        <div class="content">
            <div class="list-item" v-for="amenity in amenities">
                <i class="fa fa-lg" :class="amenity.icon"></i>
                <span>@{{ amenity.title }}</span>
            </div>
        </div>
    </div>
    <hr>
    <div class="prices list">
        <div class="title"><strong>Prices</strong></div>
        <div class="content">
            <div class="list-item" v-for="price in prices">@{{ price.title }}: <strong>@{{ price.value }}</strong>
            </div>
        </div>
    </div>
</div>
</div>
<div id="modal" :class="{'show' : modalOpen}">
    <button @click="modalOpen = false" class="modal-close" >
        &times;
    </button>
    <div class="modal-content">
        <img src="{{ asset('images/header.jpg') }}" alt="room" />
    </div>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
