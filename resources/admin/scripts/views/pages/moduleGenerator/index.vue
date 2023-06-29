<template>
  <Card>
    <template v-slot:header>
      <div class="d-flex justify-content-between">
        <h5 class="mb-0" data-anchor="data-anchor">
          Module Generator Table
        </h5>
        <Link :href="route('admin.module_generator.create')" class="btn btn-outline-info me-1 mb-1" type="button">Create
          New Module
        </Link>
      </div>
    </template>
    <template v-slot:default>
      <div class="table-responsive scrollbar">
        <table class="table table-striped overflow-hidden">
          <thead>
          <tr class="btn-reveal-trigger">
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th class="text-end" scope="col">Actions</th>
          </tr>
          </thead>
          <tbody>
          <tr class="btn-reveal-trigger">
            <td>Ricky Antony</td>
            <td>ricky@example.com</td>
            <td class="text-end">
              <div class="dropdown font-sans-serif position-static"
              >
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                        type="button"
                        data-bs-toggle="dropdown"
                        data-boundary="window"
                        aria-haspopup="true"
                        aria-expanded="false">
                  <span class="fas fa-ellipsis-h fs--1"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end border py-0">
                  <div class="bg-white py-2">
                    <a class="dropdown-item" href="#!">Edit</a>
                    <a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td>Emma Watson</td>
            <td>emma@example.com</td>
            <td class="text-end">
              <div
                class="dropdown font-sans-serif position-static"
              >
                <button
                  class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                  type="button"
                  data-bs-toggle="dropdown"
                  data-boundary="window"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                                        <span
                                          class="fas fa-ellipsis-h fs--1"
                                        ></span>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end border py-0"
                >
                  <div class="bg-white py-2">
                    <a class="dropdown-item" href="#!"
                    >Edit</a
                    ><a
                    class="dropdown-item text-danger"
                    href="#!"
                  >Delete</a
                  >
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td>Rowen Atkinson</td>
            <td>rown@example.com</td>
            <td class="text-end">
              <div
                class="dropdown font-sans-serif position-static"
              >
                <button
                  class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                  type="button"
                  data-bs-toggle="dropdown"
                  data-boundary="window"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                                        <span
                                          class="fas fa-ellipsis-h fs--1"
                                        ></span>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end border py-0"
                >
                  <div class="bg-white py-2">
                    <a class="dropdown-item" href="#!"
                    >Edit</a
                    ><a
                    class="dropdown-item text-danger"
                    href="#!"
                  >Delete</a
                  >
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td>Antony Hopkins</td>
            <td>antony@example.com</td>
            <td class="text-end">
              <div
                class="dropdown font-sans-serif position-static"
              >
                <button
                  class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                  type="button"
                  data-bs-toggle="dropdown"
                  data-boundary="window"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                                        <span
                                          class="fas fa-ellipsis-h fs--1"
                                        ></span>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end border py-0"
                >
                  <div class="bg-white py-2">
                    <a class="dropdown-item" href="#!"
                    >Edit</a
                    ><a
                    class="dropdown-item text-danger"
                    href="#!"
                  >Delete</a
                  >
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td>Jennifer Schramm</td>
            <td>jennifer@example.com</td>
            <td class="text-end">
              <div
                class="dropdown font-sans-serif position-static"
              >
                <button
                  class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                  type="button"
                  data-bs-toggle="dropdown"
                  data-boundary="window"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                                        <span
                                          class="fas fa-ellipsis-h fs--1"
                                        ></span>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end border py-0"
                >
                  <div class="bg-white py-2">
                    <a class="dropdown-item" href="#!"
                    >Edit</a
                    ><a
                    class="dropdown-item text-danger"
                    href="#!"
                  >Delete</a
                  >
                  </div>
                </div>
              </div>
            </td>
          </tr>


          </tbody>
        </table>
        <Pagination/>
      </div>
    </template>
  </Card>
</template>

<script setup>
import Pagination from "../../components/ui/Pagination.vue";
</script>

<style lang="scss" scoped></style>
