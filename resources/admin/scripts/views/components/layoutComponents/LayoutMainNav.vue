<template>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">
                            Settings
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages--><a
                        class="nav-link"
                        href="documentation/getting-started.html"
                        role="button"
                        aria-expanded="false"
                    >
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"
                                ><span class="fas fa-rocket"></span></span
                            ><span class="nav-link-text ps-1"
                                >Module Generator</span
                            >
                        </div>
                    </a>
                </li>
            </ul>
            <div class="settings mb-3"></div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
const msg = "test";
</script>

<style lang="scss" scoped></style>
