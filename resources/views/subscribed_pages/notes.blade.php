@include('subscribed_pages.header_subscribed_pages')

{{-- MAIN SECTION START --}}

<div class="container my-3 p-2">
    <div class="row justify-content-center align-items-center text-center g-2">
        <div class="col">
            <h1 class="display-2">PREMIUM NOTES</h1>
        </div>
    </div>
</div>

{{-- NOTES SECTION START --}}

<div class="container mb-5 py-2 mt-3">
    <div class="row row-cols-4 justify-content-center align-items-center g-2">

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/php.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">PHP Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        A popular general-purpose scripting language that is especially suited to
                        web development
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/css.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">CSS Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        CSS is the language we used to style an HTML document.
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/html.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">HTML Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        HTML is the standard markup language for Web pages.
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/jquery.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">jQuery Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        jQuery is a fast, small, and feature-rich JavaScript library.
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/laravel.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">Laravel Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        Laravel is a web application framework with expressive, elegant syntax.
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/js.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">JavaScript Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        JavaScript is the programming language of the Web.
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/mysql.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">MySQL Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        MySQL is an open-source relational database management system.
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col mx-3 my-5 notes_col">
            <div class="card border-0">
                <img src="{{ URL::asset('assets/subscribed_pages/image/notes/postgres.png') }}"
                    class="card-img-top" alt="" style=" height:180px;">
                <div class="card-body text-center">
                    <h5 class="h5 font-monospace fw-bold text-center">PostgreSQL Notes</h5>
                    <p class="card-text notes_card_para fw-light">
                        PostgreSQL is a powerful, open source object-relational database system.
                    </p>
                    <a name="" id="" class="btn btn-outline-dark px-3 py-2"
                        href="link/to/your/download/file" download role="button">
                        <i class="fa fa-arrow-circle-o-down" style="font-size:28px;"></i>&nbsp;
                        <i class="fa fa-file-pdf-o" style="font-size:28px;color:red"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- NOTES SECTION START --}}

{{-- MAIN SECTION END --}}

@include('subscribed_pages.footer_subscribed_pages')
