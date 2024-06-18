<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                {{-- <img src="{{ asset('assets/backend/images/logos/image.png') }}" width="100" alt="" /> --}}
                <p class="text-dark fw-bold">कृषि तथा भूमि व्यवस्था मन्त्रालय</P>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->

        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">

            <ul id="sidebarnav">

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">ड्यासबोर्ड</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.setting.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-settings"></i>
                        </span>
                        <span class="hide-menu">कार्यालय सेटिङ</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.introduction.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">परिचय</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.organization.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">संगठन संरचना</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.slider.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-photo-scan text-[24px]"></i>
                        </span>
                        <span class="hide-menu fs-4 text-dark">स्लाइडर</span>
                    </a>
                </li>


                <button class="btn dropdown-toggle fs-3" type="button" data-toggle="collapse"
                    data-target="#dropdown-container1" aria-expanded="false">
                    <span>
                        <i class="ti ti-users text-dark"></i>
                    </span>
                    <span class="hide-menu fs-4 text-dark">कर्मचारीहरु</span>

                </button>
                <div class="collapse" id="dropdown-container1">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.employee.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">कर्मचारी</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.department.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">विभाग</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.designation.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">पद</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                <button class="btn dropdown-toggle fs-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#dropdown-container" aria-expanded="false">
                    <span>
                        <i class="ti ti-building"></i>
                    </span>
                    <span class="hide-menu fs-4 text-dark">प्रकाशन</span>
                </button>
                <div class="collapse" id="dropdown-container">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.publication.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">प्रकाशन</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.publicationCategory.index') }}"
                                aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">प्रकाशन वर्ग</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Bootstrap CSS -->
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

                <!-- Bootstrap JS and dependencies -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

                <button class="btn dropdown-toggle fs-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#dropdown-container2" aria-expanded="false">
                    <span>
                        <i class="ti ti-building"></i>
                    </span>
                    <span class="hide-menu fs-4 text-dark">सुचना तथा समाचारहरु</span>
                </button>
                <div class="collapse" id="dropdown-container2">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.news.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">सुचनाहरु</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.publicationCategory.index') }}"
                                aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">सूचना वर्ग</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="btn dropdown-toggle fs-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#dropdown-container3" aria-expanded="false">
                    <span>
                        <i class="ti ti-building"></i>
                    </span>
                    <span class="hide-menu fs-4 text-dark">कानुन</span>
                </button>
                <div class="collapse" id="dropdown-container3">
                    <ul class="list-group">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.law.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">कानुन</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.lawCategory.index') }}"
                                aria-expanded="false">
                                <span>
                                    <i class="ti ti-building"></i>
                                </span>
                                <span class="hide-menu">कानुन वर्ग</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.subordinate.index') }}" aria-expanded="false">

                        <span class="hide-menu fs-4">मातहतका निकाय</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.contact.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-link"></i>
                        </span>
                        <span class="hide-menu fs-4">सम्पर्क</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.link.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-link"></i>
                        </span>
                        <span class="hide-menu fs-4">लिंक</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
