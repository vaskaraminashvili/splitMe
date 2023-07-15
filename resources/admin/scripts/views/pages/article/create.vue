<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0" data-anchor="data-anchor">
        Articles Create
      </h5>
    </template>
    <template v-slot:default>
      <form class="container" @submit.prevent="form.post(route('admin.articles.store'))">
        @sc
        <div class="row g-3 mb-3">
          <div class="col-12">
            <label class="form-label" for="exampleFormControlInput1">Email address</label>
            <input class="form-control" v-model="form.title" id="exampleFormControlInput1" type="text"
                   placeholder="name@example.com"/>
            <div v-if="form.errors.email">{{ form.errors.title }}</div>
          </div>
          <div class="col-12">
            <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
            <textarea v-model="form.body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-12">
            <div class="form-check form-switch form-check-inline">
              <input class="form-check-input" id="flexSwitchCheckDefault22" type="checkbox"/>
              <label class="form-check-label" for="flexSwitchCheckDefault22">Default switch checkbox input</label>
            </div>
            <div class="form-check form-switch form-check-inline">
              <input v-model="form.status" class="form-check-input" id="flexSwitchCheckDefault" type="checkbox"/>
              <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-12">
            <button class="btn btn-success me-1 mb-1" type="submit">Success</button>
          </div>
        </div>
      </form>
    </template>
  </Card>
</template>

<script setup>

import {useForm} from "@inertiajs/vue3";

const form = useForm({
  title: null,
  body: null,
  status: false,
})

</script>

<style lang="scss" scoped>

</style>
