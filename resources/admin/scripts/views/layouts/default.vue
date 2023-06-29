<template>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button
                            class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title="Toggle Navigation"
                        >
                            <span class="navbar-toggle-icon"
                                ><span class="toggle-line"></span
                            ></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="../index.html">
                        <div class="d-flex align-items-center py-3">
                            <img
                                class="me-2"
                                src="/back_assets/img/icons/spot-illustrations/falcon.png"
                                alt=""
                                width="40"
                            /><span class="font-sans-serif">falcon</span>
                        </div>
                    </a>
                </div>
                <slot name="main-nav"></slot>
            </nav>
            <div class="content">
                <nav
                    class="navbar navbar-light navbar-glass navbar-top navbar-expand"
                >
                    <button
                        class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse"
                        aria-expanded="false"
                        aria-label="Toggle Navigation"
                    >
                        <span class="navbar-toggle-icon"
                            ><span class="toggle-line"></span
                        ></span>
                    </button>
                    <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                        <div class="d-flex align-items-center">
                            <img
                                class="me-2"
                                src="/back_assets/img/icons/spot-illustrations/falcon.png"
                                alt=""
                                width="40"
                            /><span class="font-sans-serif">falcon</span>
                        </div>
                    </a>

                    <ul
                        class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center"
                    >
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2">
                                <input
                                    class="form-check-input ms-0 theme-control-toggle-input"
                                    id="themeControlToggle"
                                    type="checkbox"
                                    data-theme-control="theme"
                                    value="dark"
                                />
                                <label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="Switch to light theme"
                                    ><span class="fas fa-sun fs-0"></span
                                ></label>
                                <label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="Switch to dark theme"
                                    ><span class="fas fa-moon fs-0"></span
                                ></label>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a
                                class="nav-link pe-0"
                                id="navbarDropdownUser"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <div class="avatar avatar-xl">
                                    <img
                                        class="rounded-circle"
                                        src="/back_assets/img/team/3-thumb.png"
                                        alt=""
                                    />
                                </div>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser"
                            >
                                <div
                                    class="bg-white dark__bg-1000 rounded-2 py-2"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="../pages/user/settings.html"
                                        >Profile</a
                                    >
                                    <a
                                        class="dropdown-item"
                                        href="../pages/authentication/card/logout.html"
                                        >Logout</a
                                    >
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <slot />

                <footer class="footer">
                    <div
                        class="row g-0 justify-content-between fs--1 mt-4 mb-3"
                    >
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">
                                Thank you for creating with ME
                                <span class="d-none d-sm-inline-block">| </span
                                ><br class="d-sm-none" />
                                2023 &copy;
                            </p>
                        </div>
                        <div class="col-12 col-sm-auto text-center"></div>
                    </div>
                </footer>
            </div>
            <div
                class="modal fade"
                id="authentication-modal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="authentication-modal-label"
                aria-hidden="true"
            >
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div
                            class="modal-header px-5 position-relative modal-shape-header bg-shape"
                        >
                            <div class="position-relative z-index-1 light">
                                <h4
                                    class="mb-0 text-white"
                                    id="authentication-modal-label"
                                >
                                    Register
                                </h4>
                                <p class="fs--1 mb-0 text-white">
                                    Please create your free Falcon account
                                </p>
                            </div>
                            <button
                                class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body py-4 px-5">
                            <form>
                                <div class="mb-3">
                                    <label
                                        class="form-label"
                                        for="modal-auth-name"
                                        >Name</label
                                    >
                                    <input
                                        class="form-control"
                                        type="text"
                                        autocomplete="on"
                                        id="modal-auth-name"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        class="form-label"
                                        for="modal-auth-email"
                                        >Email address</label
                                    >
                                    <input
                                        class="form-control"
                                        type="email"
                                        autocomplete="on"
                                        id="modal-auth-email"
                                    />
                                </div>
                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <label
                                            class="form-label"
                                            for="modal-auth-password"
                                            >Password</label
                                        >
                                        <input
                                            class="form-control"
                                            type="password"
                                            autocomplete="on"
                                            id="modal-auth-password"
                                        />
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label
                                            class="form-label"
                                            for="modal-auth-confirm-password"
                                            >Confirm Password</label
                                        >
                                        <input
                                            class="form-control"
                                            type="password"
                                            autocomplete="on"
                                            id="modal-auth-confirm-password"
                                        />
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="modal-auth-register-checkbox"
                                    />
                                    <label
                                        class="form-label"
                                        for="modal-auth-register-checkbox"
                                        >I accept the <a href="#!">terms </a>and
                                        <a href="#!">privacy policy</a></label
                                    >
                                </div>
                                <div class="mb-3">
                                    <button
                                        class="btn btn-primary d-block w-100 mt-3"
                                        type="submit"
                                        name="submit"
                                    >
                                        Register
                                    </button>
                                </div>
                            </form>
                            <div class="position-relative mt-5">
                                <hr class="bg-300" />
                                <div class="divider-content-center">
                                    or register with
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-sm-6">
                                    <a
                                        class="btn btn-outline-google-plus btn-sm d-block w-100"
                                        href="#"
                                        ><span
                                            class="fab fa-google-plus-g me-2"
                                            data-fa-transform="grow-8"
                                        ></span>
                                        google</a
                                    >
                                </div>
                                <div class="col-sm-6">
                                    <a
                                        class="btn btn-outline-facebook btn-sm d-block w-100"
                                        href="#"
                                        ><span
                                            class="fab fa-facebook-square me-2"
                                            data-fa-transform="grow-8"
                                        ></span>
                                        facebook</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: { Link },
};
</script>

<style lang="scss" scoped></style>
