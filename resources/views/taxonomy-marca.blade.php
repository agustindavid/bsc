@extends('layouts.app')

@section('content')
@include('partials.archive-wrap')

    @while(have_posts()) @php the_post() @endphp
        <div class='row no-margin'>
          @include('partials.content-producto')
        </div>
    @endwhile
      </div>
      </div>
  </div>
</div>
@endsection
