<template>
    <div>
        {{ msg }}
        <input type="text" v-model="msg" />
    </div>
</template>

<script setup>
import { ref } from "vue";
const msg = ref("test");
</script>

<style lang="scss" scoped></style>
