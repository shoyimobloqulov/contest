@extends('layouts.admin')
@section('content')
    <div class="tab-content">











        <div class="tab-pane show active">
            <div class="form-row">
                <div class="col-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
                <div class="col-12">
                    <div class="card mb-3">
                        <h4 class="card-header">Shaxsiy ma'lumotlar</h4>
                        <div class="card-body">
                            <form action="{{ route('presonal.update') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-md-right">Ism familiya</label>
                                    <input id="name" type="text" class="form-control " name="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-form-label text-md-right">Taxallus</label>
                                    <input readonly="" disabled="" id="username" type="text" class="form-control " name="username" value="{{ $user->username }}">

                                </div>

                                <div class="form-group">
                                    <label for="phone">Telefon raqam</label>
                                    <input type="tel" class="form-control " value="{{ $user->phone }}" name="phone" id="phone">

                                </div>

                                <div class="form-group">
                                    <label for="regions">Viloyat</label>
                                    <select class="form-control" id="regions" name="region_id">
                                        <option value="1">Andijon viloyati</option>
                                        <option value="19">Buxoro viloyati</option>
                                        <option value="33">Jizzax viloyati</option>
                                        <option value="47">Qashqadaryo viloyati</option>
                                        <option value="63">Navoiy viloyati</option>
                                        <option value="74">Namangan viloyati</option>
                                        <option value="87" selected="">Samarqand viloyati</option>
                                        <option value="104">Surхondaryo viloyati</option>
                                        <option value="119">Sirdaryo viloyati</option>
                                        <option value="132">Toshkent shahar</option>
                                        <option value="144">Toshkent viloyati</option>
                                        <option value="167">Farg'ona viloyati</option>
                                        <option value="187">Xorazm viloyati</option>
                                        <option value="201">Qoraqalpog'iston Resp.</option>
                                    </select>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Saqlash">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-3">
                        <h4 class="card-header">Maxfiylik</h4>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="currentPassword">Hozirgi parolingiz</label>
                                    <input type="password" class="form-control " name="current_password" id="currentPassword" required="">
                                </div>

                                <div class="form-group">
                                    <label for="password">Yangi parolni kiriting</label>
                                    <input type="password" class="form-control " id="password" name="password" required="">

                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Yangi parolni qaytaring</label>
                                    <input type="password" class="form-control " id="password_confirmation" name="password_confirmation" required="" autocomplete="new-password">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Saqlash">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
