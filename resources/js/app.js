require('./bootstrap');
import { createApp, h } from 'vue';

import { createInertiaApp, Link } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

InertiaProgress.init()

createInertiaApp({

  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    return createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('inertia-link', Link)
      
      .mount(el)
  },
})