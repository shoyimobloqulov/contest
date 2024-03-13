@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ro'yxatdan o'tish</div>

                <div class="card-body">
                    <form method="POST" id="register" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">Ism familiya</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control " name="name"
                                       value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">Elektron pochta manzili</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control " name="email"
                                       value="" required autocomplete="email">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone"
                                   class="col-md-4 col-form-label text-md-right">Telefon raqam</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel"
                                       class="form-control " name="phone"
                                       value="" required autocomplete="phone">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right">Taxallus</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input minlength="2" maxlength="24" id="username" type="text"
                                           class="form-control "
                                           name="username" value="" required>


                                    <div class="invalid-feedback">
                                        Foydalanuvchi nomi noyob bo'lishi kerak, faqat harflar, raqamlar va "-", "_" dan foydalanish mumkin. Uzunlik 2 dan 24 gacha bo'lishi kerak                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="regions"
                                   class="col-md-4 col-form-label text-md-right">Viloyat</label>
                            <div class="col-md-6">
                                <select class="form-control" id="regions" name="region">
                                    <option value="1"
                                    >
                                        Andijon viloyati
                                    </option>
                                    <option value="19"
                                    >
                                        Buxoro viloyati
                                    </option>
                                    <option value="33"
                                    >
                                        Jizzax viloyati
                                    </option>
                                    <option value="47"
                                    >
                                        Qashqadaryo viloyati
                                    </option>
                                    <option value="63"
                                    >
                                        Navoiy viloyati
                                    </option>
                                    <option value="74"
                                    >
                                        Namangan viloyati
                                    </option>
                                    <option value="87"
                                    >
                                        Samarqand viloyati
                                    </option>
                                    <option value="104"
                                    >
                                        Surхondaryo viloyati
                                    </option>
                                    <option value="119"
                                    >
                                        Sirdaryo viloyati
                                    </option>
                                    <option value="132"
                                    >
                                        Toshkent shahar
                                    </option>
                                    <option value="144"
                                    >
                                        Toshkent viloyati
                                    </option>
                                    <option value="167"
                                    >
                                        Farg&#039;ona viloyati
                                    </option>
                                    <option value="187"
                                    >
                                        Xorazm viloyati
                                    </option>
                                    <option value="201"
                                    >
                                        Qoraqalpog&#039;iston Resp.
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row d-none">
                            <label for="districts"
                                   class="col-md-4 col-form-label text-md-right">Tuman</label>
                            <div class="col-md-6">
                                <select class="form-control" id="districts" name="district"
                                        data-old="">
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="study_level"
                                   class="col-md-4 col-form-label text-md-right">Oʻqish joyi yoki ish joyi</label>
                            <div class="col-md-6">
                                <input id="study_other" type="text" required
                                       class="form-control "
                                       name="study_other"
                                       value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">Parol</label>

                            <div class="col-md-6">
                                <input minlength="6" id="password" type="password"
                                       class="form-control " name="password"
                                       required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">Parolni yana kiriting</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <script src="../www.google.com/recaptcha/apid41d.js?" async defer></script>

                                <button class="g-recaptcha btn btn-primary" data-callback="onSubmitregister" data-sitekey="6Lex5MgnAAAAAE5_XSqUrkO6jGoy6B90w0q2cPjS"><span>Ro'yxatdan o'tish</span></button><script>function onSubmitregister(){document.getElementById("register").submit();}</script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
