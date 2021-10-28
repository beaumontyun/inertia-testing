<template>
  <div>
      <p>Blog test</p>
      <div v-for="blog in blogs" :key="blog">
        <p>Blog title: {{blog.title}}</p>
        <p>Blog body: {{ blog.body }}</p>
      </div>
      <Link href="/">Home</Link>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  props: {
    blogs: Object
  },
  components: {
    Link,
  }
}
</script>

<style>

</style>