@extends('layouts.app')
@section('title', 'Student - Add')
@section('content')
    <div class="dashboard-main-body">

        <div class="breadcrumb d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <div class="">
                <h1 class="fw-semibold mb-4 h6 text-primary-light">Student Details</h1>
                <div class="">
                    <a href="index.html" class="text-secondary-light hover-text-primary hover-underline">Dashboard </a>
                    <a href="student-list.html" class="text-secondary-light hover-text-primary hover-underline"> /
                        Student</a>
                    <span class="text-secondary-light">/ Student Details</span>
                </div>
            </div>
            {{-- <button type="button"
                class="my-sidebar-btn btn btn-primary-600 d-flex align-items-center gap-6 bg-base text-primary-light bg-hover-primary-600">
                <span class="d-flex text-md">
                    <i class="ri-lock-2-line"></i>
                </span>
                Login Details
            </button> --}}
        </div>
        @include('alerts.alert')
        <div class="mt-24">
            <div class="card h-100">
                <div class="card-body p-24">
                    <div class="d-flex gap-32 flex-md-row flex-column">
                        <div class="max-w-300-px w-100 text-center">
                            <figure
                                class="mb-24 w-120-px h-120-px mx-auto rounded-circle overflow-hidden position-relative">

                                <!-- Image -->
                                <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image"
                                    class="w-100 h-100 object-fit-cover">

                                <!-- Hidden File Input -->
                                <input type="file" id="imageUpload" name="image" class="d-none">
                                <input type="hidden" id="studentId" value="{{ $student->id }}">
                                <!-- Bottom Center Icon -->
                                {{-- <label for="imageUpload"
                                    class="position-absolute start-50 translate-middle-x 
               bg-dark bg-opacity-75 text-white 
               d-flex align-items-center justify-content-center rounded-circle"
                                    style="bottom: 8px; width:32px; height:32px; cursor:pointer;">

                                    <iconify-icon icon="fluent:edit-24-filled"></iconify-icon>

                                </label> --}}

                            </figure>

                            <h2 class="h6 text-primary-light mb-16 fw-semibold">Seth Hallam</h2>
                            {{-- <p class="mb-0">Admission No: <span class="text-primary-600 fw-semibold">AD1256589</span>
                            </p>
                            <p class="mb-0">Admission No: <span class="text-primary-light fw-semibold">10</span> </p> --}}
                            <div class="mt-32 d-flex gap-16 w-100">
                                @if ($student->status == 1)
                                    <button type="button"
                                        class="btn border fw-medium border-danger-600 bg-hover-danger-200 text-danger-600 text-md d-flex justify-content-center align-items-center gap-8 flex-grow-1 px-12 py-8 radius-8"
                                        data-bs-toggle="modal" data-bs-target="#confirm-{{ $student->id }}">
                                        <span class="d-flex text-lg">
                                            <i class="ri-close-circle-line text-danger"></i>
                                        </span>
                                        Inactive
                                    </button>
                                @else
                                    <button type="button"
                                        class="btn border fw-medium border-success-600 bg-hover-success-200 text-success-600 text-md d-flex justify-content-center align-items-center gap-8 flex-grow-1 px-12 py-8 radius-8"
                                        data-bs-toggle="modal" data-bs-target="#confirm-{{ $student->id }}">
                                        <span class="d-flex text-lg">
                                            <i class="ri-checkbox-circle-line text-success"></i>
                                        </span>
                                        Active
                                    </button>
                                @endif

                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="btn btn-primary-600 border fw-medium border-primary-600 text-md d-flex justify-content-center align-items-center gap-8 flex-grow-1 px-12 py-8 radius-8">
                                    <span class="d-flex text-lg">
                                        <i class="ri-edit-line"></i>
                                    </span>
                                    Edit
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <span class="h-100 w-1-px bg-neutral-200"></span>
                        </div>
                        <div class="flex-grow-1">
                            <div class="pb-16 border-bottom d-flex align-items-center justify-content-between gap-20">
                                <h3 class="h6 text-primary-light text-lg mb-0 fw-semibold">Personal Info</h3>
                                @if ($student?->status ?? '' == '1')
                                    <span
                                        class="bg-success-100 text-success-600 px-24 py-4 radius-4 fw-medium text-sm">Active</span>
                                @else
                                    <span
                                        class="bg-danger-100 text-danger-600 px-24 py-4 radius-4 fw-medium text-sm">Inactive</span>
                                @endif
                            </div>
                            <div class="mt-16 d-flex flex-column gap-8">
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Name</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->name ?? '' }}</span>
                                </div>
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Gender</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->gender ?? '' }}</span>
                                </div>
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Date Of Birth</span>
                                    <span class="fw-normal text-sm text-secondary-light">: {{ $student?->dob ?? '' }}</span>
                                </div>
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Email</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->email ?? '' }}</span>
                                </div>
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Mobile Number</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->mobile ?? '' }}</span>
                                </div>
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Qualification</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->qualification ?? '' }}</span>
                                </div>


                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Address</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->address ?? '' }}</span>
                                </div>
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Father name</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->father_name ?? '' }}</span>
                                </div>
                                <div class="d-flex gap-4">
                                    <span class="fw-semibold text-sm text-primary-light w-110-px">Practitioner Registration
                                        No</span>
                                    <span class="fw-normal text-sm text-secondary-light">:
                                        {{ $student?->practitioner_registration ?? '' }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Delete Event start -->
    <div class="modal fade" id="confirm-{{ $student->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog modal-dialog-centered max-w-340-px">
            <div class="modal-content radius-16 bg-base">
                <div class="modal-body pt-32 px-36 pb-24 text-center">
                    <span class="mb-16 fs-1 line-height-1 text-danger">
                        @if ($student->status == 1)
                            <iconify-icon icon="fluent:dismiss-circle-24-filled"
                                class="menu-icon text-danger"></iconify-icon>
                        @else
                            <iconify-icon icon="fluent:checkmark-circle-24-filled"
                                class="menu-icon text-success"></iconify-icon>
                        @endif
                    </span>
                    <h6 class="text-lg fw-semibold text-primary-light mb-0">Are your sure for this action
                    </h6>
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                        <button type="reset"
                            class="flex-grow-1 border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-24 py-11 radius-8">
                            Cancel
                        </button>
                        <form action="{{ route('student.status') }}" method="post">
                            @csrf
                            @if ($student->status == 1)
                                <input type="hidden" name="status" value="0">
                                <input type="hidden" name="student_id" value="{{ $student->id }}">
                                <button type="submit"
                                    class="flex-grow-1 btn btn-primary-600 border border-primary-600 text-md px-16 py-12 radius-8">
                                    Yes, Inactive
                                </button>
                            @else
                                <input type="hidden" name="status" value="1">
                                <input type="hidden" name="student_id" value="{{ $student->id }}">
                                <button type="submit"
                                    class="flex-grow-1 btn btn-primary-600 border border-primary-600 text-md px-16 py-12 radius-8">
                                    Yes, Active
                                </button>
                            @endif
                            <input type="hidden" name="id" value="{{ $student->id }}">


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Delete Event end -->


    {{-- <script>
        // Data Table start
        let table = new DataTable('#dataTable');
        let tableTwo = new DataTable('#dataTableTwo');
        let tableThree = new DataTable('#dataTableThree');
        let tableFour = new DataTable('#dataTableFour');
        let firstSemesterTable = new DataTable('#firstSemesterTable');
        let monthlyTestJun = new DataTable('#monthlyTestJun');
        let weeklyTestJun = new DataTable('#weeklyTestJun');
        let weeklyTestMay = new DataTable('#weeklyTestMay');
        let monthlyTestMay = new DataTable('#monthlyTestMay');
        let dataTableLibrary = new DataTable('#dataTableLibrary');
        let loginDetailsTable = new DataTable('#loginDetailsTable');

        // ✅ Data Table start
        $('.data-table').each(function() {
            const $table = $(this);
            const tableInstance = new DataTable(this);

            // Handle search input (inside same wrapper)
            $table.closest('.dataTable-wrapper').find('.dt-search .dt-input').on('keyup', function() {
                tableInstance.search(this.value).draw();
            });

            // Handle page length change (inside same wrapper)
            $table.closest('.dataTable-wrapper').find('.dt-length .dt-input').on('change', function() {
                const value = $(this).val();
                tableInstance.page.len(value).draw();
            });
        });
        // ✅ Data Table end

        // Dynamic Class added to the (absent/present/late/holiday)
        $(document).ready(function() {
            $('.attendance').each(function() {
                let value = $(this).text().trim().toUpperCase();

                if (value === 'P') {
                    $(this).addClass('text-success-600')
                } else if (value === 'A') {
                    $(this).addClass('text-danger-600')
                } else if (value === 'H') {
                    $(this).addClass('text-warning-600')
                } else if (value === 'F') {
                    $(this).addClass('text-purple-600')
                } else if (value === 'L') {
                    $(this).addClass('text-info-600')
                }
            });
        });
        // Dynamic Class added to the (absent/present/late/holiday)


        // Custom accordion js start
        $(document).on('click', '.custom-accordion-btn', function() {
            $('.custom-accordion-btn').not(this).removeClass('active').siblings('.custom-accordion-content')
                .slideUp();

            // Toggle current one
            $(this).toggleClass('active');
            $(this).siblings('.custom-accordion-content').slideToggle();
        });

        // Keep first accordion open by default
        $(document).ready(function() {
            const firstAccordion = $('.custom-accordion-btn').first();
            firstAccordion.addClass('active');
            firstAccordion.siblings('.custom-accordion-content').show();
        });
        // Custom accordion js end


        // Sidebar js start
        $('.my-sidebar-btn').on('click', function() {
            $('.my-sidebar').addClass('active');
            $('.overlay').addClass('active');
        });
        $('.close-my-sidebar, .overlay').on('click', function() {
            $('.my-sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });


        $('.apply-leave-btn').on('click', function() {
            $('.apply-leave').addClass('active');
            $('.overlay').addClass('active');
        });
        $('.close-apply-leave, .overlay').on('click', function() {
            $('.apply-leave').removeClass('active');
            $('.overlay').removeClass('active');
        });
        // Sidebar js end

        $('.collect-fees-btn').on('click', function() {
            $('.collect-fees').addClass('active');
            $('.overlay').addClass('active');
        });
        $('.close-collect-fees, .overlay').on('click', function() {
            $('.collect-fees').removeClass('active');
            $('.overlay').removeClass('active');
        });
        // Sidebar js end
    </script> --}}


@endsection
