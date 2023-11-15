@extends('layouts.main')
@section('container')

    <!-- TITTLE COMENTS PAGE SECTION-->
    <div class="genre-title-section container p-3 mx-lg-5 d-flex text-white">
        <div class="genres d-flex align-items-center">
            <div class="d-flex align-items-center">
            <h1 class="genre-subtitle text-white mb-0"><a class="genre-subtitle text-white text-decoration-none" href="/novels/{{ $novel->slug }}">{{ $novel->title }}</a></h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="genre-title text-white mb-0">{{ $episode->name }}</h1>
            </div>
        </div>
    </div>

    <!-- HERO COMMENT SECTION -->

    <section class="container">
        <div class="img w-100 d-flex justify-content-center">
            {{-- <img src="/asset/img/hero-coment.svg" alt="" class="w-100"> --}}
            <iframe class="file-preview" id="file-preview" src="{{ asset('storage/'.$episode->file_pdf) }}#toolbar=0" frameborder="0"></iframe>
        </div>
        <style>
            .file-preview{
                height: 1200px;
                width: 70%;
            }

        </style>
    </section>
    <!-- END OF HERO COMMENT SECTION -->

    <!-- COMMENT TITTLE -->
    <div class="read p-3 mx-lg-5 d-flex text-white">
        <h1>Comments</h1>
    </div>
    <div class="bottom"></div>
    <!-- END OF COMMENT TITTLE -->

    <!-- COMMENT SECTION -->
    <section class="container d-flex m-3 mx-lg-5">
        <div class="card">
            <form action="/reviews/create" method="POST">
                @csrf
                <input type="text" name="comment" id="" class="p-2" placeholder="Input your comments">
                <input type="hidden" name="episode_id" value="{{ $episode->id }}" id="" class="p-2" placeholder="Input your comments">
                <button type="submit" class="text-black p-3">Post</button>
            </form>
        </div>
    </section>
    <section class="container mx-md-5">
        @foreach ($reviews as $review)
        
        <div class="comment text-white my-3">
            <h1>{{ $review->user->name }}</h1>
            <p>{{ $review->comment }}</p>
            <div class="comments d-flex align-items-center">
                <div class="d-flex align-items-center tanggal justify-content-between w-100">
                    <h3 class="text-white mb-0">{{ $review->created_at }}</h3>
                </div>
                @if ($review->dislikeLikeReviews->count() == 0)
                
            <form action="/addLike" method="post">
            @csrf
            <input type="hidden" value="{{ $review->id }}" name="review_id">
            <input type="hidden" value="1" name="like">
            <button type="submit" class="btn-dl">
                <i class='bx bx-like'></i>
            </button>
            </form>
            <form action="/addDislike" method="post">
            @csrf
            <input type="hidden" value="{{ $review->id }}" name="review_id">
            <input type="hidden" value="1" name="dislike">
            <button type="submit" class="btn-dl">
                <i class='bx bx-dislike'></i>
            </button>
            </form>
                @else
                <form action="/addLike" method="post">
                    @csrf
                    <input type="hidden" value="{{ $review->id }}" name="review_id">
                    <input type="hidden" value="1" name="like">
                    <button type="submit" class="btn-dl">
                        <i class='bx bx-like'>{{ $review->dislikeLikeReviews->sum('like') }}</i>
                    </button>
                </form>
                <form action="/addDislike" method="post">
                    @csrf
                    <input type="hidden" value="{{ $review->id }}" name="review_id">
                    <input type="hidden" value="1" name="dislike">
                    <button type="submit" class="btn-dl">
                        <i class='bx bx-dislike'>{{ $review->dislikeLikeReviews->sum('dislike') }}</i>
                </button>
                </form>
                @endif
            </div>
            
            <!-- replay komen -->
            <section>
                <div class="faq">
                    <div class="question d-flex align-items-center pt-2">
                        <h3>Reply</h3>
                        <i class='bx bxs-chevron-down'></i>
                    </div>
                    <div class="answer">
                        <section class="container d-flex m-3">
                            <div class="card">
                                <form action="/replyreviews/create" method="POST">
                                    @csrf
                                    <input type="text" name="comment" id="" class="p-2" placeholder="Input your comments">
                                    <input type="hidden" name="review_id" value="{{ $review->id }}" id="" class="p-2" placeholder="Input your comments">
                                    <button type="submit" class="text-black p-3">Post</button>
                                </form>
                            </div>
                        </section>
                        @foreach ($review->replyReviews as $replyReview)
                            <div class="mx-lg-5">
                                <h1>{{ $replyReview->user->name }}</h1>
                                <p>{{ $replyReview->comment }}</p>
                                <h3 class="text-white mb-0">{{ $replyReview->created_at }}</h3>
                            </div>
                            @endforeach
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
                    <script>
const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });
});
                    </script>
@endsection