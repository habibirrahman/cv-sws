@extends('landing-page.layout.app')
@section('content')
@include('landing-page.layout.header')

<main id="ts-content" style="padding-top: 3rem;">
    <section id="advanced-features" class="ts-block">
        <div class="container">
            <div class="ts-title text-center">
                <h2>{{ $paragraphs->certificationsTitle }}</h2>
            </div>
            @foreach ($certificates as $key => $certificate)
            @if ($key % 2 === 0)
            <div class="col-sm-12 col-md-12 col-xl-10 ml-auto mr-auto d-flex flex-column-reverse flex-sm-row mb-4">
                <div class="col-sm-8 col-md-8 col-xl-8" data-animate="ts-fadeInUp">
                    <div class="ts-title mb-0">
                        <h2 class="mb-2">{{ $certificate->title }}</h2>
                    </div>
                    <table>
                        @if ($certificate->notary)
                        <tr>
                            <td class="certificate-label">Notaris</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->notary }}</td>
                        </tr>
                        @endif
                        @if ($certificate->number)
                        <tr>
                            <td class="certificate-label">Nomor</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->number }}</td>
                        </tr>
                        @endif
                        @if ($certificate->city)
                        <tr>
                            <td class="certificate-label">Kota</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->city }}</td>
                        </tr>
                        @endif
                        @if ($certificate->class_of_city)
                        <tr>
                            <td class="certificate-label">Kelas</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->class_of_city }}</td>
                        </tr>
                        @endif
                        @if ($certificate->certificate_of_domicile)
                        <tr>
                            <td class="certificate-label">Surat Keterangan Domisili</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->certificate_of_domicile }}</td>
                        </tr>
                        @endif
                        @if ($certificate->published_by)
                        <tr>
                            <td class="certificate-label">Diterbitkan oleh</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->published_by }}</td>
                        </tr>
                        @endif
                        @if ($certificate->registration_number)
                        <tr>
                            <td class="certificate-label">Nomor Registrasi</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->registration_number }}</td>
                        </tr>
                        @endif
                        @if ($certificate->tax_number)
                        <tr>
                            <td class="certificate-label">NPWP</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->tax_number }}</td>
                        </tr>
                        @endif
                        @if ($certificate->tax_letter)
                        <tr>
                            <td class="certificate-label">Surat Pengukuhan Pengusaha Kena Pajak</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->tax_letter }}</td>
                        </tr>
                        @endif
                        @if ($certificate->business_license)
                        <tr>
                            <td class="certificate-label">SIUJK</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->business_license }}</td>
                        </tr>
                        @endif
                        @if ($certificate->date)
                        <tr>
                            <td class="certificate-label">Tanggal</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->dateFormatted }}</td>
                        </tr>
                        @endif
                    </table>
                </div>
                <div class="col-sm-4 col-md-4 col-xl-4 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                    <div class="mb-4 certificate-image">
                        <img id="certificate-1" onclick="openModalImage('certificate-1')" src="{{ asset('assets/img/certificate-800x1250.png') }}" class="mw-100" alt="Akta Pendirian">
                    </div>
                </div>
            </div>
            @else
            <div class="col-sm-12 col-md-12 col-xl-10 ml-auto mr-auto d-flex flex-column flex-sm-row mb-4">
                <div class="col-sm-4 col-md-4 col-xl-4 text-center" data-animate="ts-fadeInUp" data-delay="0.1s">
                    <div class="mb-4 certificate-image">
                        <img id="certificate-2" onclick="openModalImage('certificate-2')" src="{{ asset('assets/img/certificate-800x1250.png') }}" class="mw-100" alt="Akta Pendirian">
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-xl-8" data-animate="ts-fadeInUp">
                    <div class="ts-title mb-0">
                        <h2 class="mb-2">{{ $certificate->title }}</h2>
                    </div>
                    <table>
                        @if ($certificate->notary)
                        <tr>
                            <td class="certificate-label">Notaris</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->notary }}</td>
                        </tr>
                        @endif
                        @if ($certificate->number)
                        <tr>
                            <td class="certificate-label">Nomor</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->number }}</td>
                        </tr>
                        @endif
                        @if ($certificate->city)
                        <tr>
                            <td class="certificate-label">Kota</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->city }}</td>
                        </tr>
                        @endif
                        @if ($certificate->class_of_city)
                        <tr>
                            <td class="certificate-label">Kelas</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->class_of_city }}</td>
                        </tr>
                        @endif
                        @if ($certificate->certificate_of_domicile)
                        <tr>
                            <td class="certificate-label">Surat Keterangan Domisili</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->certificate_of_domicile }}</td>
                        </tr>
                        @endif
                        @if ($certificate->published_by)
                        <tr>
                            <td class="certificate-label">Diterbitkan oleh</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->published_by }}</td>
                        </tr>
                        @endif
                        @if ($certificate->registration_number)
                        <tr>
                            <td class="certificate-label">Nomor Registrasi</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->registration_number }}</td>
                        </tr>
                        @endif
                        @if ($certificate->tax_number)
                        <tr>
                            <td class="certificate-label">NPWP</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->tax_number }}</td>
                        </tr>
                        @endif
                        @if ($certificate->tax_letter)
                        <tr>
                            <td class="certificate-label">Surat Pengukuhan Pengusaha Kena Pajak</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->tax_letter }}</td>
                        </tr>
                        @endif
                        @if ($certificate->business_license)
                        <tr>
                            <td class="certificate-label">SIUJK</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->business_license }}</td>
                        </tr>
                        @endif
                        @if ($certificate->date)
                        <tr>
                            <td class="certificate-label">Tanggal</td>
                            <td class="px-2 d-flex">:</td>
                            <td>{{ $certificate->dateFormatted }}</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
</main>

@include('landing-page.layout.footer')
@endsection
