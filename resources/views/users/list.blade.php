@extends('layouts.admin')
@section('content')
    <div class="form-row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body p-0">
                    <div id="user-search">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="m-2">
                                    <form action="{{ route('users') }}" method="get" id="search-form">
                                        <div class="input-group">
                                            <input type="text" placeholder="Izlash..." name="search" class="form-control">
                                            <div class="input-group-append">
                                                <button type="submit" id="search" class="btn btn-primary"><i class="fas fa-search"></i> Izlash</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive mb-0">
                        <table class="table table-hover m-0 table-borderless table-striped text-left slim-table">
                            <tbody>
                            <tr>
                                <th>Ism familiya / Username</th>
                                <th class="text-center">Faolligi</th>
                            </tr>
                            @foreach($users as $u)
                                <tr>
                                    <td class="v">
                                        <a href="{{ route('profile',$u->username) }}">{{ $u->name }} / {{ $u->username }}</a>
                                        <div class="small">
                                            {{ $u->education }}
                                        </div>
                                    </td>
                                    <td class="vc">
                                        <span class="badge badge-pill {{$u->is_online ?'badge-success':'badge-secondary'}}">
                                            @if($u->is_online)
                                                Onlayn
                                            @else
                                                Chiqib ketgan /  {{ $u->last_seen_human }}
                                            @endif
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex mt-3">
                            <div class="mx-auto overflow-auto">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
