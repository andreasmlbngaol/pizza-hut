@extends('layouts.main')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <div>
                <h1 class="fs-1 fw-bold">
                    Welcome, {{ $user->name }}
                </h1>
                <p class="text-start">
                    Temukan kelezatan dan statistik Pizza Hut di sini. Outlet, karyawan, resep, dan penjualan terungkap dalam data lengkap kami. Selamat datang di Pizza Web. Jelajahi dan nikmati setiap potongan informasi.
                </p>
            </div>
                
        </div>
        <div class="col-6 text-end">
            <img  src="img/pizza.png" alt="/" width="530">
        </div>
    </div>
    <div class="row">
        <div class="col-6 d-flex gap-5">
            <div>
                <div class="d-flex flex-column ps-2" style="border-left: 5px solid red">
                    <span class="fw-bold fs-4" style="color : red">1k+</span>
                    <span class="fw-semibold fs-5">Employees</span>
                </div>
            </div>
            <div>
                <div class="d-flex flex-column ps-2" style="border-left: 5px solid red">
                    <span class="fw-bold fs-4" style="color : red">20+</span>
                    <span class="fw-semibold fs-5">Outlets</span>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex flex-column justify-content-center p-3 " style="border: 2px solid red">
            <h1 class="fw-bold" style="color : red; font-size : 25px">Italian Pizza</h1>
            <p class="mb-0"style="font-size : 13px;">
                Lapisan tipis, keju leleh, saus tomat kaya, rempah Italia, cita rasa autentik, kenikmatan tiada tara.
            </p>
        </div>

    </div>
</div>
@endsection
