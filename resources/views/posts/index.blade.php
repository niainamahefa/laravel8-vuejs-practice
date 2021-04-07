
@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="m-4">

        <div class="row">

            <!-- /.col-lg-3 -->

            <div class="col-lg-12">

                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">{{$post->content}}</p>
                            </div>
                                <div class="card-footer">
                                    <form action="{{route('posts.like')}}" id="form-like">
                                        <small id="count-like" class="text-muted">{{$post->likes->count()}} Like(s)</small>
                                        <input type="hidden" id="post-id-like" value="{{$post->id}}">
                                        <button type="submit" class="btn btn-link btn-sm">Like</button>
                                    </form>
                                </div>

                            </div>
                    </div>
                    @endforeach

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
@endsection
