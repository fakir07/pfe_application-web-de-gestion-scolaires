@extends('layouts.master')
@section('title')
    Home
@endsection


@section('css')
    @toastr_css
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Profil</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Etudiant</a>
                        </li>
                        
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <!--begin: Pic-->

                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#"
                                                class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $Etudiants->name }}</a>
                                            <a href="#">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                            fill="#00A3FF" />
                                                        <path class="permanent"
                                                            d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                           
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{ $Etudiants->niveauxdetudes->Nom . ' - ' . $Etudiants->Classes->Nom_Classe . ' - ' . $Etudiants->Sections->nom_section }}
                                            </a>
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{ $Etudiants->adresss }}
                                            </a>
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{ $Etudiants->email }}
                                            </a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Actions-->
                                    <div class="d-flex my-4">

                                            <a href="{{ route('etudiants.edit', $Etudiants->id) }}"
                                                class="btn btn-sm btn-primary me-2">Modifier etudaint</a>
                                        <!--begin::Menu-->
                                        <div class="me-0">
                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="bi bi-three-dots fs-3"></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                            data-kt-menu="true" style="">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div
                                                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Paiements</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a  href="{{ route('craete_facture', $Etudiants->id) }}" class="menu-link px-3">Ajouter une Facture
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{route('RecuEtudaint.show',$Etudiants->id)}}"
                                                    class="menu-link flex-stack px-3">Créer un paiement
                                                   </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="{{route('FraisTraitement.show',$Etudiants->id)}}"
                                                    class="menu-link flex-stack px-3">Créer un Frais Traitement
                                                   </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="{{route('RecuDeEchange.show',$Etudiants->id)}}"
                                                    class="menu-link flex-stack px-3">Créer un Recu De Echange
                                                   </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                           
                                            <!--end::Menu item-->
                                           
                                        </div>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->
                                {{-- <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="13" y="6"
                                                                width="13" height="2" rx="1"
                                                                transform="rotate(90 13 6)" fill="currentColor" />
                                                            <path
                                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">Earnings</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11" y="18"
                                                                width="13" height="2" rx="1"
                                                                transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <path
                                                                d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="75">0</div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">Projects</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="13" y="6"
                                                                width="13" height="2" rx="1"
                                                                transform="rotate(90 13 6)" fill="currentColor" />
                                                            <path
                                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">Success Rate</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Progress-->
                                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>
                                            <span class="fw-bolder fs-6">50%</span>
                                        </div>
                                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Stats--> --}}
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Row-->
                <div class="row g-xxl-9">
                    <!--begin::Col-->
                    <div class="col-xxl-12">
                        <!--begin::Security summary-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header card-header-stretch">
                                <!--begin::Title-->

                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bolder"
                                        id="kt_security_summary_tabs">
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary active" data-kt-countup-tabs="true"
                                                data-bs-toggle="tab" href="#kt_security_summary_tab_pane_hours">
                                                <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx m-4"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="currentColor" />
                                                        <rect opacity="0.3" x="8" y="3"
                                                            width="8" height="8" rx="4"
                                                            fill="currentColor" />
                                                    </svg></span> les information Etudiant
                                                <!--end::Svg Icon-->
                                            </a>
                                        </li>
                                        <li class="nav-item" id="filess">
                                            <a class="nav-link text-active-primary" data-kt-countup-tabs="true"
                                                data-bs-toggle="tab" id="kt_security_summary_tab_day"
                                                href="#kt_security_summary_tab_pane_day">

                                                <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil023.svg-->
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx m-4"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                            fill="currentColor" />
                                                    </svg></span> Les Fiche étudiants
                                                <!--end::Svg Icon-->
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-7 pb-0 px-0">
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours"
                                        role="tabpanel">
                                        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">

                                            <!--begin::Card header-->
                                            <!--begin::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body p-9">
                                                <!--begin::Row-->
                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Nom et prénom</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <span
                                                            class="fw-bolder fs-6 text-gray-800">{{ $Etudiants->name }}</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Input group-->
                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Gender
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">

                                                        <span
                                                            class="fw-bold text-gray-800 fs-6">{{ $Etudiants->genders->Nom_g }}</span>

                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Email
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <span
                                                            class="fw-bold text-gray-800 fs-6">{{ $Etudiants->email }}</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Date Naissance
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <span
                                                            class="fw-bold text-gray-800 fs-6">{{ $Etudiants->date_naissance }}</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Nationalities
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <span
                                                            class="fw-bold text-gray-800 fs-6">{{ $Etudiants->nationalities->Nom }}</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>

                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Adresss</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <a href="#"
                                                            class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $Etudiants->adresss }}</a>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Annee Academique
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Country of origination"></i></label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <span
                                                            class="fw-bolder fs-6 text-gray-800">{{ $Etudiants->annee_academique }}</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Niveauxdetude</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <span
                                                            class="fw-bolder fs-6 text-gray-800">{{ $Etudiants->niveauxdetudes->Nom }}</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Classe</label>
                                                    <!--begin::Label-->
                                                    <!--begin::Label-->
                                                    <div class="col-lg-8">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800">{{ $Etudiants->Classes->Nom_Classe }}</span>
                                                    </div>
                                                    <!--begin::Label-->
                                                </div>

                                                <div class="row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Section</label>
                                                    <!--begin::Label-->
                                                    <!--begin::Label-->
                                                    <div class="col-lg-8">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800">{{ $Etudiants->Sections->nom_section }}</span>
                                                    </div>
                                                    <!--begin::Label-->
                                                </div>

                                                <div class="row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Section</label>
                                                    <!--begin::Label-->
                                                    <!--begin::Label-->
                                                    <div class="col-lg-8">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800">{{ $Etudiants->Sections->nom_section }}</span>
                                                    </div>
                                                    <!--begin::Label-->
                                                </div>

                                                <div class="row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 fw-bold text-muted">Parente</label>
                                                    <!--begin::Label-->
                                                    <!--begin::Label-->
                                                    <div class="col-lg-8">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800">{{ $Etudiants->parentes->NomPraent }}</span>
                                                    </div>
                                                    <!--begin::Label-->
                                                </div>
                                               
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_security_summary_tab_pane_day" role="tabpanel">
                                        <div class="card">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Heading-->
                                                <div class="card-title">
                                                    <h6>Les Fiche étudiants</h6>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">

                                                    <div class="card-toolbar" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-trigger="hover"
                                                        title="Click  a ajoute une  piece jointe">
                                                        <a href="#" class="btn btn-sm btn-primary "
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11.364" y="20.364"
                                                                        width="16" height="2" rx="1"
                                                                        transform="rotate(-90 11.364 20.364)"
                                                                        fill="black" />
                                                                    <rect x="4.36396" y="11.364" width="16"
                                                                        height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->upload piece jointe
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body p-0">
                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-flush align-middle table-row-bordered table-row-solid gy-4"
                                                        id="kt_security_license_usage_table">
                                                        <!--begin::Thead-->
                                                        <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                                            <tr>
                                                                <th class="ps-9">le nom du fichier </th>
                                                                <th class="ps-9">Date Ajouter</th>
                                                                <th class="ps-9">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Thead-->
                                                        <!--begin::Tbody-->
                                                        <tbody class="fw-6 fw-bold text-gray-600">
                                                            @foreach ($images as $image)
                                                                <tr>
                                                                    <td class="ps-9">
                                                                        <a href=""
                                                                            class="text-hover-primary text-gray-600">
                                                                            {{ $image->Nom_image }}</a>
                                                                    </td>
                                                                    <td class="ps-9">
                                                                        <a href=""
                                                                            class="text-hover-primary text-gray-600">
                                                                            {{ $image->created_at }}</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex justify-content flex-shrink-0">
                                                                            <a href="{{ URL('telecharge_picesjoint') }}/{{ $Etudiants->name }}/{{ $image->Nom_image }}"
                                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                                <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil021.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-muted svg-icon-3">
                                                                                    <span class="svg-icon svg-icon-3">

                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                                                                fill="black" />
                                                                                            <path opacity="0.3"
                                                                                                d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                                                                fill="black" />
                                                                                        </svg></span>
                                                                                    <!--end::Svg Icon-->
                                                                                    <!--end::Svg Icon-->
                                                                            </a>
                                                                            <a data-bs-toggle="modal"
                                                                                data-bs-target="#delete{{ $image->id }}"
                                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <path
                                                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                            fill="black" />
                                                                                        <path opacity="0.5"
                                                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                            fill="black" />
                                                                                        <path opacity="0.5"
                                                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                            fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>


                                                                        </div>
                                                                    </td>

                                                                </tr>


                                                                <div class="modal fade" tabindex="-1"
                                                                    id="delete{{ $image->id }}">
                                                                    <div class="modal-dialog mw-650px">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action="{{ route('delete_picesjoint') }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    <!--begin::Heading-->
                                                                                    <div class="mb-13 text-center">
                                                                                        <!--begin::Title-->
                                                                                        <h1 class="mb-3">Supprimer un  Pices de Joint
                                                                                        </h1>
                                                                                        <!--end::Title-->
                                                                                        <!--begin::Description-->
                                                                                        
                                                                                    </div>
                                                                                    <!--end::Heading-->
                                                                                    <!--begin::Input group-->
                                                                                    <div
                                                                                        class="d-flex flex-column mb-8 fv-row">
                                                                                        <!--begin::Label-->
                                                                                        <label
                                                                                            class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                                            <span
                                                                                                class="required">voulez-vous
                                                                                                supprimer une piece de
                                                                                                jointe </span>
                                                                                            <code>{{ $image->Nom_image }}</code>
                                                                                            <input type="hidden"
                                                                                                id="id"
                                                                                                name="id"
                                                                                                value="{{ $image->id }}">
                                                                                            <input type="hidden"
                                                                                                id="Nom_pices"
                                                                                                name="Nom_pices"
                                                                                                value="{{ $image->Nom_image }}">
                                                                                            <input type="hidden"
                                                                                                id="Nom_etudiant"
                                                                                                name="Nom_etudiant"
                                                                                                value="{{ $image->imageable->name }}">
                                                                                            <input type="hidden"
                                                                                                id="Etudiants_id"
                                                                                                name="Etudiants_id"
                                                                                                value="{{ $image->imageable->id }}">



                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-light"
                                                                                            data-bs-dismiss="modal">Fermer</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary">supprimer
                                                                                            </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </tbody>
                                                        <!--end::Tbody-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->



                                    <!-- Modal -->
                                    <div class="modal fade" tabindex="-1" id="kt_modal_new_target">
                                        <div class="modal-dialog mw-650px">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <form action="{{ route('upload_picesjoint') }}" method="POST"
                                                        id="kt_modal_new_target_form" class="form" action="#"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Heading-->
                                                        <div class="mb-13 text-center">
                                                            <!--begin::Title-->
                                                            <h1 class="mb-3">Ajouter un  pices de joint</h1>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Input group-->
                                                        <div class="card-body pt-0">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-2">
                                                                <!--begin::Dropzone-->
                                                                <div class="dropzone dz-clickable"
                                                                    id="kt_ecommerce_add_product_media">
                                                                    <!--begin::Message-->
                                                                    <div class="dz-message needsclick">
                                                                        <!--begin::Icon-->
                                                                        <i
                                                                            class="bi bi-file-earmark-arrow-up text-primary fs-3x">
                                                                        </i>
                                                                        <input type="file" name="files[]"
                                                                            accept="image/*,application/pdf"
                                                                            multiple="">
                                                                        <input type="hidden"
                                                                            value="{{ $Etudiants->id }}"
                                                                            id="Etudiants_id" name="Etudiants_id">
                                                                        <input type="hidden"
                                                                            value="{{ $Etudiants->name }}"
                                                                            id="Etudiants_nom" name="Etudiants_nom">


                                                                        <!--end::Icon-->
                                                                        <!--begin::Info-->

                                                                        <!--end::Info-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Dropzone-->

                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Description-->
                                                            
                                                        </div>
                                                        <!--end::Input group-->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">fermer</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Ajouter</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal -->
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Security summary-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@section('scripts')
    @toastr_js
    @toastr_render
@endsection
