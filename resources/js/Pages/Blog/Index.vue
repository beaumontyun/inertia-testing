<template>
  <div>
    <p>Blog test</p>
    <div v-for="blog in blogs" :key="blog">
      <p>Blog title: {{ blog.title }}</p>
      <p>Blog body: {{ blog.body }}</p>
      <br />
      <form @submit.prevent="store">
        <label for="title">title:</label>
        <input id="title" v-model="form.title" />
        <label for="Body">Body:</label>
        <input id="Body" v-model="form.Body" />
        <button type="store">Submit</button>
      </form>
    </div>
    <br />
    <Link href="/">Home</Link>
  </div>
</template>

<script>
import { reactive } from 'vue';
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    blogs: Object,
  },
  components: {
    Link,
  },
  setup() {
    const form = reactive({
      title: null,
      body: null
    })

    function submit() {
      Inertia.post('/users', form)
    }

    return { form, submit }
  }

  
};
</script>
