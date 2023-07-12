<template>
  <Card>
    <template v-slot:header>
      <div class="d-flex justify-content-between">
        <h5 class="mb-0" data-anchor="data-anchor">
          Module Generator Table
        </h5>

      </div>
    </template>
    <template v-slot:default>
      asdsa
      <br>
      {{pluralize(word)}}
      <br>
      {{word}}
      <br>
      <input type="text" v-model="word">
      <br>
      <br>
      here use can entre just a word and after php laravel can mainupale the rest for the words
    </template>
  </Card>
</template>

<script setup>
import Pagination from "../../components/ui/Pagination.vue";
import pluralize from 'pluralize';
import {ref} from "vue";


const  word = ref('')
</script>

<style lang="scss" scoped></style>
