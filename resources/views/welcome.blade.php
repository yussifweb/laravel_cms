@extends('layouts.home')

@section('content')

          <!-- Flash messages -->
    <p class="alert alert-success">user Logged in</p>
    
    <div class="content-section"><h2>Music</h2></div>
        
    <div class="content-section mt-5"><h2>No post for Music Category</h2></div>
            
            <article class="media content-section">
                <img class="article-img" src="../../images/posts/10.jpg">
              <div class="media-body">
                <div class="article-metadata">
                  <small class="text-muted">27/08/2020 in <strong>News</strong></small>
                </div>
                <h3><a class="article-title" href="#">Hello World is coming Soon</a></h3>
                </div>
            </article>
           
        
            <div class="pagination-links text-white">Prev | 1 | 2 | Next</div>
    
@endsection