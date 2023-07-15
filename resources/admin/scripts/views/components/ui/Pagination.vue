<template>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <template v-for="(link, index) in links">
        <li class="page-item" :class="{ disabled : !link.url , active: link.active}">
          <Component
            :is="link.url ? 'Link' : 'span'"
            class="page-link"
            :tabindex="index"
            v-html="link.label"
            :href="link.url"
          />
        </li>

      </template>

    </ul>
  </nav>
</template>

<script setup>
const porps = defineProps(['links'])
</script>

<style lang="scss" scoped>

</style>
