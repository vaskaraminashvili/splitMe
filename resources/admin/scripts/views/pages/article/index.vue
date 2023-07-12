<template>
  <div>
{{pluralize("test")}}
    <input type="text" v-model="word">
  </div>
</template>

<script setup>
import pluralize from 'pluralize';
import {ref} from "vue";
const word = ref('');
</script>

<style lang="scss" scoped>

</style>
