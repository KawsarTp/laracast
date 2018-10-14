<div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">
            <a href="/post/{{$post->id}}">{{$post->title}}</a>
          </h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Start Bootstrap</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>{{$post->created_at->toFormattedDateString()}}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

          <!-- Post Content -->
          
          {{$post->body}}

          <hr>

            </div>
         