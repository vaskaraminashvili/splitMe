<template>
  <Card>
    <template v-slot:header>
      <div class="d-flex justify-content-between">
        <h5 class="mb-0" data-anchor="data-anchor">
          Articles Table
        </h5>
        <Link :href="route('admin.articles.create')" class="btn btn-outline-info me-1 mb-1" type="button">
          Create New Article
        </Link>
      </div>
    </template>
    <template v-slot:default>
      <div class="table-responsive scrollbar">
        <table class="table table-striped overflow-hidden">
          <thead>
          <tr class="btn-reveal-trigger">
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th class="text-end" scope="col">Actions</th>
          </tr>
          </thead>
          <tbody>
          <tr class="btn-reveal-trigger" v-for="item in props.data.items.data" :key="props.data.items.data.id">
            <td>{{ item.title }}</td>
            <td>{{ item.body }}</td>
            <td class="text-end">
              <div class="dropdown font-sans-serif position-static">
                <button
                  class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                  type="button"
                  data-bs-toggle="dropdown"
                  data-boundary="window"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="fas fa-ellipsis-h fs--1"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end border py-0">
                  <div class="bg-white py-2">
                    <a class="dropdown-item" href="#!">Edit</a
                    ><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>

          </tbody>
        </table>
      </div>
      <Pagination :links="data.items.links"/>
    </template>
  </Card>
</template>

<script setup>
import {ref} from "vue";
import Pagination from "../../components/ui/Pagination.vue";

const word = ref("");
const props = defineProps(['data'])
</script>

<style lang="scss" scoped></style>
