@extends('layouts.main')
@section('container')

    <!-- TITTLE COMENTS PAGE SECTION-->
    <div class="genre-title-section container p-3 mx-lg-5 d-flex text-white">
        <div class="genres d-flex align-items-center">
            <div class="d-flex align-items-center">
            <h1 class="genre-subtitle text-white mb-0">{{ $novel->title }}</h1>
            <i class='bx bx-chevron-right'></i>
            <h1 class="genre-title text-white mb-0">{{ $episode->name }}</h1>
            </div>
        </div>
    </div>

    <!-- HERO COMMENT SECTION -->

    <section class="container">
        <div class="img w-100 d-flex justify-content-center">
            {{-- <img src="/asset/img/hero-coment.svg" alt="" class="w-100"> --}}
            <iframe class="file-preview w-100" id="file-preview" src="{{ asset('storage/'.$episode->file_pdf) }}#toolbar=0" frameborder="0"></iframe>
        </div>
        <style>
            .file-preview{
                height: 1200px;
            }
            #toolbar {
    align-items: center;
    background-color: var(--viewer-pdf-toolbar-background-color);
    color: #fff;
    height: var(--viewer-pdf-toolbar-height);
    padding: 0 16px;
    display: none;
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
            <form action="">
                <input type="text" name="" id="" class="p-2" placeholder="Input your comments">
                <button type="submit" class="text-black p-3">Post</button>
            </form>
        </div>
    </section>
    <section class="container mx-md-5">
        <div class="comment text-white my-3">
            <h1>Abhirama</h1>
            <p>Komiknya bauk bli, niat bikin komik ga sii.</p>
                <div class="comments d-flex align-items-center">
                    <div class="d-flex align-items-center tanggal justify-content-between w-100">
                        <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                    </div>
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
                                    <form action="">
                                        <input type="text" name="" id="" class="p-2" placeholder="Input your comments">
                                        <button type="submit" class="text-black p-3">Post</button>
                                    </form>
                                </div>
                            </section>
                            <div class="mx-lg-5">
                                <h1>Mangde</h1>
                                <p>Bacot khe bgst, baca" aja jgn bnyak bacot.</p>
                                <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-md-5">
            <div class="comment text-white my-3">
                <h1>Abhirama</h1>
                <p>Komiknya bauk bli, niat bikin komik ga sii.</p>
                    <div class="comments d-flex align-items-center">
                        <div class="d-flex align-items-center tanggal justify-content-between w-100">
                            <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                        </div>
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
                                        <form action="">
                                            <input type="text" name="" id="" class="p-2" placeholder="Input your comments">
                                            <button type="submit" class="text-black p-3">Post</button>
                                        </form>
                                    </div>
                                </section>
                                <div class="mx-lg-5">
                                    <h1>Mangde</h1>
                                    <p>Bacot khe bgst, baca" aja jgn bnyak bacot.</p>
                                    <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container mx-md-5">
                <div class="comment text-white my-3">
                    <h1>Abhirama</h1>
                    <p>Komiknya bauk bli, niat bikin komik ga sii.</p>
                        <div class="comments d-flex align-items-center">
                            <div class="d-flex align-items-center tanggal justify-content-between w-100">
                                <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                            </div>
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
                                            <form action="">
                                                <input type="text" name="" id="" class="p-2" placeholder="Input your comments">
                                                <button type="submit" class="text-black p-3">Post</button>
                                            </form>
                                        </div>
                                    </section>
                                    <div class="mx-lg-5">
                                        <h1>Mangde</h1>
                                        <p>Bacot khe bgst, baca" aja jgn bnyak bacot.</p>
                                        <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container mx-md-5">
                    <div class="comment text-white my-3">
                        <h1>Abhirama</h1>
                        <p>Komiknya bauk bli, niat bikin komik ga sii.</p>
                            <div class="comments d-flex align-items-center">
                                <div class="d-flex align-items-center tanggal justify-content-between w-100">
                                    <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                                </div>
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
                                                <form action="">
                                                    <input type="text" name="" id="" class="p-2" placeholder="Input your comments">
                                                    <button type="submit" class="text-black p-3">Post</button>
                                                </form>
                                            </div>
                                        </section>
                                        <div class="mx-lg-5">
                                            <h1>Mangde</h1>
                                            <p>Bacot khe bgst, baca" aja jgn bnyak bacot.</p>
                                            <h3 class="text-white mb-0">2023-10-15 20:12</h3>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
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