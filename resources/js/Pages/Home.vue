<template>
<div>
  <p>{{ title }}</p>
</div>
  <Head title="Home" />
  <Link href="/blog">Blog</Link>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
  props: ['title'],
  components: {
    Head,
    Link,
  },
};
</script>

<style>
</style>