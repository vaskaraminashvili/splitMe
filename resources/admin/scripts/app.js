import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'
import AdminLayout from "@/admin/scripts/views/layouts/default.vue"
import { ZiggyVue } from 'ziggy';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./views/pages/**/*.vue', { eager: true })
        name = name.replace(".", "/");
        let page = pages[`./views/pages/${name}.vue`]
        page.default.layout = page.default.layout || AdminLayout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .component("Link", Link)
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el)
    },
})
