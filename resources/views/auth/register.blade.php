{{-- <!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Modern Education Admin Dashboard for schools, colleges, universities, and eLearning platforms. Includes student and course management, attendance, exams, payments, analytics, and a fully responsive clean UI—ideal for LMS, coaching centers, and academic admin systems.">
    <meta name="keywords"
        content="Education Admin Dashboard, School Admin Panel, College Dashboard, University Dashboard, LMS Dashboard, eLearning Admin Template, Student Management System, Course Management, Education Template, Study Dashboard, Online Learning Dashboard, Academic Admin Panel, Bootstrap Dashboard, React Education Dashboard, Next.js Education Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <!-- Title -->
    <title>Edudash - Login</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.min.css') }}">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/full-calendar.css') }}">
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Theme Customization Structure Start -->
    <div class="body-overlay"></div>

    <button type="button"
        class="theme-customization__button w-48-px h-48-px bg-primary-600 text-white rounded-circle d-flex justify-content-center align-items-center position-fixed end-0 bottom-0 mb-40 me-40 text-2xxl bg-hover-primary-700"
        aria-label="Theme Customization Button">
        <i class="ri-settings-3-line animate-spin"></i>
    </button>
    <div class="theme-customization-sidebar w-100 bg-base h-100vh overflow-y-auto position-fixed end-0 top-0">
        <div class="d-flex align-items-center gap-3 py-16 px-24 justify-content-between border-bottom">
            <div>
                <h6 class="text-sm dark:text-white">Theme Settings</h6>
                <p class="text-xs mb-0 text-neutral-500 dark:text-neutral-200">Customize and preview instantly</p>
            </div>
            <button data-slot="button"
                class="theme-customization-sidebar__close text-neutral-900 bg-transparent text-hover-primary-600 d-flex text-xl">
                <i class="ri-close-fill"></i>
            </button>
        </div>

        <div class="d-flex flex-column gap-48 p-24 overflow-y-auto flex-grow-1">

            <div class="theme-setting-item">
                <h6 class="fw-medium text-primary-light text-md mb-3">Theme Mode</h6>
                <div class="d-grid grid-cols-3 gap-3 dark-light-mode">
                    <button type="button"
                        class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl active"
                        data-theme="light" aria-label="light">
                        <i class="ri-sun-line"></i>
                    </button>
                    <button type="button"
                        class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl"
                        data-theme="dark" aria-label="dark">
                        <i class="ri-moon-line"></i>
                    </button>
                    <button type="button"
                        class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl"
                        data-theme="system" aria-label="system">
                        <i class="ri-computer-line"></i>
                    </button>
                </div>
            </div>

            <div class="theme-setting-item">
                <h6 class="fw-medium text-primary-light text-md mb-3">Page Direction</h6>
                <div class="d-grid grid-cols-2 gap-3">
                    <button type="button"
                        class="theme-setting-item__btn ltr-mode-btn d-flex align-items-center justify-content-center gap-2 h-56-px rounded-3 text-xl"
                        aria-label="LTR">
                        <span><i class="ri-align-item-left-line"></i></span>
                        <span class="h6 text-sm font-medium mb-0">LTR</span>
                    </button>

                    <button type="button"
                        class="theme-setting-item__btn rtl-mode-btn d-flex align-items-center justify-content-center gap-2 h-56-px rounded-3 text-xl"
                        aria-label="RTL">
                        <span class="h6 text-sm font-medium mb-0">RTL</span>
                        <span><i class="ri-align-item-right-line"></i></span>
                    </button>
                </div>
            </div>

            <div class="theme-setting-item">
                <h6 class="fw-medium text-primary-light text-md mb-3">Color Schema</h6>
                <div class="d-grid grid-cols-3 gap-3">
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="base" aria-label="Base">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #25A194;"></span>
                        <span class="fw-medium mt-1" style="color: #25A194;">Base</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="red" aria-label="Red">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #dc2626;"></span>
                        <span class="fw-medium mt-1" style="color: #dc2626;">Red</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="blue" aria-label="Blue">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #2563eb;"></span>
                        <span class="fw-medium mt-1" style="color: #2563eb;">Blue</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="yellow" aria-label="Yellow">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #ff9f29;"></span>
                        <span class="fw-medium mt-1" style="color: #ff9f29;">Yellow</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="cyan" aria-label="Cyan">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #00b8f2;"></span>
                        <span class="fw-medium mt-1" style="color: #00b8f2;">Cyan</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="violet" aria-label="Violet">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #7c3aed;"></span>
                        <span class="fw-medium mt-1" style="color: #7c3aed;">Violet</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- Theme Customization Structure End -->

    <div
        class="overlay bg-black bg-opacity-50 w-100 h-100 position-fixed z-9 visibility-hidden opacity-0 duration-300">
    </div>
    <div class="d-lg-flex bg-white">
        <div class="w-50 d-lg-flex d-none overflow-hidden">
            <img src="{{ asset('assets/images/login-img.png') }}" alt="Login Image"
                class="w-100 h-100 object-fit-cover">
        </div>
        <div class="lg-w-50 px-24 py-40 d-flex justify-content-center align-items-center">
            <div class="max-w-540-px mx-auto">
                <a href="index.html" class="">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                </a>
                <div class="mt-32 mb-32">
                    <h1 class="h6 fw-bold text-primary-light mb-8">
                        Welcome Back 👋
                    </h1>
                    <p class="text-sm text-secondary-light mb-0">
                        Log in to your account to continue
                    </p>
                </div>

                <form action="{{ route('register') }}" method="POST" class="d-flex flex-column gap-32 submit-form">
                    @csrf
                    @session('status')
                        <div class="mb-4 font-medium text-sm text-green-600" style="color: green">
                            {{ $value }}
                        </div>
                    @endsession

                    <x-validation-errors class="mb-4" />
                    <div class="d-flex flex-column gap-16">
                        <div>
                            <label for="name" class="text-sm fw-semibold text-primary-light d-inline-block mb-8">
                                Name
                                <span class="text-danger-600">*</span>
                            </label>
                            <input type="name" id="name" name="name" class="name-field form-control"
                                placeholder="Enter your name" required>
                        </div>
                        <div>
                            <label for="email" class="text-sm fw-semibold text-primary-light d-inline-block mb-8">
                                Email Address
                                <span class="text-danger-600">*</span>
                            </label>
                            <input type="email" id="email" name="email" class="email-field form-control"
                                placeholder="Enter your email" required>
                        </div>

                        <div>
                            <label for="password" class="text-sm fw-semibold text-primary-light d-inline-block mb-8">
                                Password
                                <span class="text-danger-600">*</span>
                            </label>
                            <div class="position-relative">
                                <input type="password" id="password" name="password"
                                    class="password-field form-control" placeholder="Enter your password" required>
                                <button type="button"
                                    class="toggle-password btn p-0 border-0 bg-transparent position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light cursor-pointer ri-eye-line"
                                    data-toggle="#password" aria-label="Toggle password visibility">
                                </button>
                            </div>
                        </div>
                        <div>
                            <label for="password" class="text-sm fw-semibold text-primary-light d-inline-block mb-8">
                                Confirm Password
                                <span class="text-danger-600">*</span>
                            </label>
                            <div class="position-relative">
                                <input type="text" id="confirmPassword" name="password_confirmation"
                                    class="form-control" placeholder="Enter your password" required="">
                                <button type="button"
                                    class="toggle-password btn p-0 border-0 bg-transparent position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light cursor-pointer ri-eye-line ri-eye-off-line"
                                    data-toggle="#confirmPassword" aria-label="Toggle password visibility">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit"
                            class="loginBtn btn btn-primary-600 text-sm btn-sm px-12 py-16 w-100 radius-8"> Submit
                        </button>
                    </div>
                </form>

                <div class="mt-32 text-center text-sm">
                    Have an account?
                    <a href="{{ route('login') }}" class="text-primary-600 fw-semibold text-decoration-underline">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery library js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Apex Chart js -->
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/iconify-icon.min.js') }}"></script>
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/dataTables.min.js') }}"></script>

    <!-- jQuery UI js -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html> --}}

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Modern Education Admin Dashboard for schools, colleges, universities, and eLearning platforms. Includes student and course management, attendance, exams, payments, analytics, and a fully responsive clean UI—ideal for LMS, coaching centers, and academic admin systems.">
    <meta name="keywords"
        content="Education Admin Dashboard, School Admin Panel, College Dashboard, University Dashboard, LMS Dashboard, eLearning Admin Template, Student Management System, Course Management, Education Template, Study Dashboard, Online Learning Dashboard, Academic Admin Panel, Bootstrap Dashboard, React Education Dashboard, Next.js Education Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <!-- Title -->
    <title>Edudash - School, College & LMS Admin Dashboard Template | Bootstrap 5</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.min.css') }}">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/full-calendar.css') }}">
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Theme Customization Structure Start -->
    <div class="body-overlay"></div>

    <button type="button"
        class="theme-customization__button w-48-px h-48-px bg-primary-600 text-white rounded-circle d-flex justify-content-center align-items-center position-fixed end-0 bottom-0 mb-40 me-40 text-2xxl bg-hover-primary-700"
        aria-label="Theme Customization Button">
        <i class="ri-settings-3-line animate-spin"></i>
    </button>
    <div class="theme-customization-sidebar w-100 bg-base h-100vh overflow-y-auto position-fixed end-0 top-0">
        <div class="d-flex align-items-center gap-3 py-16 px-24 justify-content-between border-bottom">
            <div>
                <h6 class="text-sm dark:text-white">Theme Settings</h6>
                <p class="text-xs mb-0 text-neutral-500 dark:text-neutral-200">Customize and preview instantly</p>
            </div>
            <button data-slot="button"
                class="theme-customization-sidebar__close text-neutral-900 bg-transparent text-hover-primary-600 d-flex text-xl">
                <i class="ri-close-fill"></i>
            </button>
        </div>

        <div class="d-flex flex-column gap-48 p-24 overflow-y-auto flex-grow-1">

            <div class="theme-setting-item">
                <h6 class="fw-medium text-primary-light text-md mb-3">Theme Mode</h6>
                <div class="d-grid grid-cols-3 gap-3 dark-light-mode">
                    <button type="button"
                        class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl active"
                        data-theme="light" aria-label="light">
                        <i class="ri-sun-line"></i>
                    </button>
                    <button type="button"
                        class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl"
                        data-theme="dark" aria-label="dark">
                        <i class="ri-moon-line"></i>
                    </button>
                    <button type="button"
                        class="theme-btn theme-setting-item__btn d-flex align-items-center justify-content-center h-64-px rounded-3 text-xl"
                        data-theme="system" aria-label="system">
                        <i class="ri-computer-line"></i>
                    </button>
                </div>
            </div>

            <div class="theme-setting-item">
                <h6 class="fw-medium text-primary-light text-md mb-3">Page Direction</h6>
                <div class="d-grid grid-cols-2 gap-3">
                    <button type="button"
                        class="theme-setting-item__btn ltr-mode-btn d-flex align-items-center justify-content-center gap-2 h-56-px rounded-3 text-xl"
                        aria-label="LTR">
                        <span><i class="ri-align-item-left-line"></i></span>
                        <span class="h6 text-sm font-medium mb-0">LTR</span>
                    </button>

                    <button type="button"
                        class="theme-setting-item__btn rtl-mode-btn d-flex align-items-center justify-content-center gap-2 h-56-px rounded-3 text-xl"
                        aria-label="RTL">
                        <span class="h6 text-sm font-medium mb-0">RTL</span>
                        <span><i class="ri-align-item-right-line"></i></span>
                    </button>
                </div>
            </div>

            <div class="theme-setting-item">
                <h6 class="fw-medium text-primary-light text-md mb-3">Color Schema</h6>
                <div class="d-grid grid-cols-3 gap-3">
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="base" aria-label="Base">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #25A194;"></span>
                        <span class="fw-medium mt-1" style="color: #25A194;">Base</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="red" aria-label="Red">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #dc2626;"></span>
                        <span class="fw-medium mt-1" style="color: #dc2626;">Red</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="blue" aria-label="Blue">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #2563eb;"></span>
                        <span class="fw-medium mt-1" style="color: #2563eb;">Blue</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="yellow" aria-label="Yellow">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #ff9f29;"></span>
                        <span class="fw-medium mt-1" style="color: #ff9f29;">Yellow</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="cyan" aria-label="Cyan">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #00b8f2;"></span>
                        <span class="fw-medium mt-1" style="color: #00b8f2;">Cyan</span>
                    </button>
                    <button type="button"
                        class="color-picker-btn d-flex flex-column justify-content-center align-items-center"
                        data-color="violet" aria-label="Violet">
                        <span class="color-picker-btn__box h-40-px w-100 rounded-3"
                            style="background-color: #7c3aed;"></span>
                        <span class="fw-medium mt-1" style="color: #7c3aed;">Violet</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- Theme Customization Structure End -->

    <div
        class="overlay bg-black bg-opacity-50 w-100 h-100 position-fixed z-9 visibility-hidden opacity-0 duration-300">
    </div>

    <div class="d-lg-flex bg-white">
        <!-- Left Image -->
        <div class="w-50 d-lg-block d-none overflow-hidden d-flex">
            <img src="{{ asset('assets/images/login-img.png') }}" alt="Login Image"
                class="w-100 h-100 object-fit-cover">
        </div>

        <!-- Right Form -->
        <div class="lg-w-50 px-24 py-40 d-flex justify-content-center align-items-center">
            <div class="max-w-540-px mx-auto w-100">

                <a href="index.html">
                    <img src="assets/images/logo.png" alt="Logo">
                </a>

                <div class="mt-48 mb-32">
                    <h1 class="h6 fw-bold text-primary-light">Create Your Account 🚀</h1>
                    <p class="text-sm text-secondary-light">
                        Fill in the details to get started
                    </p>
                </div>

                <form action="{{route('register')}}" method="post" class="d-flex flex-column gap-24">
                    @csrf
                    <!-- Full Name -->
                    <div>
                        <label class="text-sm fw-semibold text-primary-light mb-8">
                            Full Name <span class="text-danger-600">*</span>
                        </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your full name">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="text-sm fw-semibold text-primary-light mb-8">
                            Email Address <span class="text-danger-600">*</span>
                        </label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="text-sm fw-semibold text-primary-light d-inline-block mb-8">
                            Password
                            <span class="text-danger-600">*</span>
                        </label>
                        <div class="position-relative">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter your password" required>
                            <button type="button"
                                class="toggle-password btn p-0 border-0 bg-transparent position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light cursor-pointer ri-eye-line"
                                data-toggle="#password" aria-label="Toggle password visibility">
                            </button>
                        </div>
                    </div>
                    <!-- Confirm Password -->
                    <div>
                        <label for="password" class="text-sm fw-semibold text-primary-light d-inline-block mb-8">
                            Password
                            <span class="text-danger-600">*</span>
                        </label>
                        <div class="position-relative">
                            <input type="password" name="password_confirmation" id="confirmPassword" class="form-control"
                                placeholder="Enter your password" required>
                            <button type="button"
                                class="toggle-password btn p-0 border-0 bg-transparent position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light cursor-pointer ri-eye-line"
                                data-toggle="#confirmPassword" aria-label="Toggle password visibility">
                            </button>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-primary-600 w-100 py-16 radius-8 text-sm fw-semibold">
                        Create Account
                    </button>

                </form>

                <!-- Login Link -->
                <div class="mt-24 text-center text-sm">
                    Already have an account?
                    <a href="{{route('login')}}" class="text-primary-600 fw-semibold text-decoration-underline">
                        Log In
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery library js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Apex Chart js -->
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/iconify-icon.min.js') }}"></script>
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/dataTables.min.js') }}"></script>

    <!-- jQuery UI js -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
