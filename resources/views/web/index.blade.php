@extends('web.master')
@section('content')

    <h1>Contenido inicial</h1>

    @{{message}}

  

    <!--<list-posts title="Tittle" :final_posts="posts"></list-posts> -->

    <!--<list-posts title="Title"></list-posts>-->

    <router-view></router-view>
    

    
@endsection