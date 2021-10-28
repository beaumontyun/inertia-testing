<template>
  <div>
      <p>Blog test</p>
      <div v-for="{blog, index} in blos" :key="index">
        {{ blog.body }}
      </div>
      <Link href="/">Home</Link>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  props: {
    blogs: Array
  },
  components: {
    Link,
  }
}
</script>

<style>

</style>