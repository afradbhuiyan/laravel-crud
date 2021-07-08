@extends('layouts.app')

@section('page_title','A laravel8 CRUD')

@section('content')
    <section class="main-wrap__sec home-sec">
        <div class="home-sec__container container">
            <div class="home-sec__row row">
                <div class="home-sec__col col-12 col-md-10 col-lg-8">
                
                    <h1 class="home-sec__title">
                        Laravel 8 CRUD Application
                    </h1>

                    <div class="home-sec__topBar">
                        <h5 class="home-sec__subTitle">
                            All Students
                        </h5>

                        <a class="btn btn--primary btn--create" href="{{ route('students.create') }}">
                            <i class="btn__icon fas fa-plus"></i>
                            <span class="btn__txt">Create</span>
                        </a>
                    </div>

                    <div class="home-sec__table">
                        <table class="table table--homeSec">
                            <thead class="table__thead">
                                <tr class="table__tr table__tr--thead">
                                    <th class="table__th">#ID</th>
                                    <th class="table__th">Name</th>
                                    <th class="table__th">Age</th>
                                    <th class="table__th">Gender</th>
                                    <th class="table__th">City</th>
                                    <th class="table__th">Action</th>
                                </tr>
                            </thead>

                            <tbody class="table__tbody">
                                @for ($i = 1; $i < 15; $i++)
                                    <tr class="table__tr table__tr--tbody">
                                        <td class="table__td table__td--id">
                                            <div class="table__td-wrap">
                                                {{ $i }}
                                            </div>
                                        </td>
                                        <td class="table__td table__td--name">
                                            <div class="table__td-wrap">
                                                Afrad Bhuiyan
                                            </div>
                                        </td>
                                        <td class="table__td table__td--age">
                                            <div class="table__td-wrap">
                                                20
                                            </div>
                                        </td>
                                        <td class="table__td table__td--gender">
                                            <div class="table__td-wrap">
                                                Male
                                            </div>
                                        </td>
                                        <td class="table__td table__td--city">
                                            <div class="table__td-wrap">
                                                Narayanganj
                                            </div>
                                        </td>
                                        <td class="table__td table__td--action">
                                            <div class="table__td-wrap">
                                                <a class="btn btn--icon btn--edit" href="#">
                                                    <i class="btn__icon fas fa-edit"></i>
                                                </a>

                                                <a class="btn btn--icon btn--delete" href="#">
                                                    <i class="btn__icon fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection