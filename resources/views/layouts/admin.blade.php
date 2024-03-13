
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="uz">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="c++, cpp, python, piton, c#, csharp, pascal, pascalabc, javascript, nodejs, dasturlash, masalalar, tatu, dasturlashdan masalalar">
    <meta name="csrf-token" content="KBNs4MgH2R8Kf3wPcmv9gV0BlbfnSYuhVAPEWkNM">
    <title>{{ env('APP_NAME') }}</title>
    <link rel='stylesheet' href='{{ asset('css/themes/light8fa4.css') }}'><meta name='theme-color' content='#FFF'>
    <script>
        window._auth = false;
    </script>
    <!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>
<body>
<div id="app">
    <div class="container my-3">
        <div class="d-none d-sm-block">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="/">Bosh sahifa</a></li>
                </ol>
            </nav>
        </div>
        <div class="form-row">
            <div class="col-12 col-xl-2 col-md-3 col-sm-4 mb-3">
                <aside class="sidebar">
                    <nav id="sidebar" class="d-none d-sm-block mt-2">
                        @auth()
                            <div class="">
                                <a href="{{ route('profile',auth()->user()->username) }}" class="btn btn-link text-decoration-none" style="margin-left: -3px;">
                                    <img class="rounded-circle" src="https://robocontest.uz/storage/uploads/profile/50153Q7kpyOxMUKwECteF4QZBQNV.jpg" width="32px"><b>&nbsp;&nbsp;{{ auth()->user()->username }}</b>
                                </a>
                            </div>
                        @endauth
                        <div class="">
                            <a href="{{ route('users') }}" class="btn btn-link text-decoration-none">
                                <i class="fa fa-user"></i> Foydalanuvchilar        </a>
                        </div>
                        <div class="">
                            <a href="tasks.html" class="btn btn-link text-decoration-none">
                                <i class="fas fa-book"></i> Masalalar        </a>
                        </div>
                        <div class="">
                            <a href="attempts.html" class="btn btn-link text-decoration-none">
                                <i class="fab fa-strava"></i> Urinishlar        </a>
                        </div>
                        <div
                            class="">
                            <a href="olympiads.html" class="btn btn-link text-decoration-none">
                                <i class="fas fa-medal"></i> Olimpiadalar
                                <span class="badge badge-pill badge-danger">2</span>
                            </a>
                        </div>
                        <div class="">
                            <a href="blog.html" class="btn btn-link text-decoration-none">
                                <i class="fas fa-pen-alt"></i> Bloglar        </a>
                        </div>
                        <div class="">
                            <a href="{{ route('system') }}" class="btn btn-link text-decoration-none">
                                <i class="fa fa-info-circle"></i> Tizimda ishlash        </a>
                        </div>
                        <hr>
                        <div>
                            <a href="team.html" class="btn btn-link text-decoration-none">
                                <i class="fa fa-code"></i> Bizning jamoa            </a>
                        </div>
                        <hr>
                        @guest()
                            <div class="">
                                <a href="{{ route('login') }}" class="btn btn-link text-decoration-none">
                                    <i class="fa fa-key"></i> Kirish            </a>
                            </div>
                            <div class=" active ">
                                <a href="{{ route('register') }}" class="btn btn-link text-decoration-none">
                                    <i class="fa fa-user-plus"></i> Ro'yxatdan o'tish            </a>
                            </div>
                        @endguest
                        @auth()
                            <div class="">
                                <a href="#" class="btn btn-link text-decoration-none" onclick="document.getElementById('logout-form').submit()">
                                    <i class="fa fa-lock"></i> Chiqish</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endauth
                    </nav>

                </aside>
            </div>
            <div class="col-12 col-xl-10 col-md-9 col-sm-8">
                <header class="d-sm-none d-block">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="index.html">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ro&#039;yxatdan o&#039;tish</li>

                        </ol>
                    </nav>

                </header>


                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</div>

<div id="snow"></div>

<link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/codemirror.css') }}"/>
<link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/monokai.min.css') }}"/>

<script>
    $("#logout").click(function () {
        $("#logout-form").submit();
    });
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-BEMP8ESNCH');
</script>
<script>
    $.fn.select2.defaults.set("theme", "bootstrap4");
</script>
<script>
    $('#regions').change();

    $(document).ready(function () {
        $('#study_places').select2({
            ajax: {
                url: '/api/study_places',
                dataType: 'json',
                processResults: function (data) {
                    return {
                        results: data.items.map(item => {
                            const text = item.name;
                            const id = `${item.id}|${item.type}`;
                            return {text, id}
                        })
                    };
                }
            }
        });
        $('#study_level').select2();

        $("#study_places").on("select2:open", function () {
            $(".select2-search--dropdown .select2-search__field").attr("placeholder", 'Oʻqish joyi');
        });
        $("#study_places").on("select2:close", function () {
            $(".select2-search--dropdown .select2-search__field").attr("placeholder", null);
        });
    });

    $('#study_other_check').on('change', e => {
        if (e.target.checked) {
            $('#study_places').parents(".form-group").hide();
            $('#study_level').parents(".form-group").hide();
            $('#study_other').parents(".form-group").show();
            $('#study_other').attr('required', true);
        } else {
            $('#study_places').parents(".form-group").show();
            $('#study_level').parents(".form-group").show();
            $('#study_other').parents(".form-group").hide();
            $('#study_other').removeAttr('required');
        }
    }).trigger('change');

    $('#study_places').on('change', e => {
        const type = $(e.target).find(':selected')[0].value.split('|')[1];
        const select = $('#study_level');
        select.html('').prop('disabled', false);

        axios.get('/api/study_levels/' + type).then(({data}) => {
            data.items.map(
                item => select.append(new Option(item.name, item.id, false, false))
            );
        });
    });
</script>
<script>
    let $password = $("#password");
    let $passwordConfirm = $("#password-confirm");

    function validateClass(el, validationPassed) {
        if (validationPassed) {
            el.classList.add('is-valid');
            el.classList.remove('is-invalid');
        } else {
            el.classList.add('is-invalid');
            el.classList.remove('is-valid');
        }
    }

    async function checkUsername() {
        let username = this.value
        let usernameRegexp = /^[0-9a-zA-Z-_]{2,24}$/g;

        let isValid;

        if (!username.match(usernameRegexp)) {
            isValid = false;
        } else {
            const response = await axios.get('/api/users/exists/' + username);

            isValid = response.data.exists === false;
        }

        validateClass(this, isValid)
    }

    function checkPassword() {
        let isValid = this.value.length >= 6 && this.value.length <= 40;

        validateClass(this, isValid)
    }

    function checkPassword2() {
        let isValid = this.value.length >= 6 && this.value.length <= 40 && this.value === $password.val();

        validateClass(this, isValid)
    }
</script>
<script>
    $('#message').on('click', (e) => {
        $('#sidebar').toggleClass('d-none')
    });

    $('.robocontest').on('click', (e) => {
        window.location.href = 'index.html'
    });

    $('#logout').on('click', (e) => {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
</script>
<script>

    $("#code_file").on('change', async (event) => {
        const file = event.target.files.item(0)
        const code = await file.text()

        $(event.target).parents('form').find('#code')[0].nextSibling.CodeMirror.setValue(code)
    })
</script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script src="{{ asset('livewire/livewire.min3330.js') }}"></script>

<script src="{{ asset('js/vue-appc4b4.js') }}"></script>
</body>

</html>
