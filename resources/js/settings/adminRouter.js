import {createRouter, createWebHistory} from "vue-router";
import index from "@/views/elementsAdmin/index.vue";
import create from "@/views/elementsAdmin/create.vue";
import edit from "@/views/elementsAdmin/edit.vue";
import show from "@/views/elementsAdmin/show.vue";



const routes = [
    {
        path: '/admin',
        name: 'admin',
        component: "",
        children: [
            {
                path: "",
                name: "home",
                alias: "/dashboard",
                component: "",
            },
            {
                path: ':target',
                name: "universal",
                children: [
                    {
                        path: "",
                        name: "universal__index",
                        component: index
                    }, {
                        path: "create",
                        name: "universal__create",
                        component: create,
                    }, {
                        path: ":id/edit",
                        name: "universal__edit",
                        component: edit
                    }, {
                        path: ":id",
                        name: "universal__show",
                        component: show
                    }
                ]
            }, {
                path: 'bookings',
                name: 'bookings',
                children: [
                    {
                        path: "",
                        name: "bookings-index",
                        component: index
                    }, {
                        path: "create",
                        name: "bookings-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "bookings-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "bookings-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'payments',
                name: 'payments',
                children: [
                    {
                        path: "",
                        name: "payments-index",
                        component: index
                    }, {
                        path: "create",
                        name: "payments-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "payments-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "payments-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'oceans',
                name: 'oceans',
                children: [
                    {
                        path: "",
                        name: "oceans-index",
                        component: index
                    }, {
                        path: "create",
                        name: "oceans-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "oceans-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "oceans-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'orders',
                name: 'orders',
                children: [
                    {
                        path: "",
                        name: "orders-index",
                        component: index
                    }, {
                        path: "create",
                        name: "orders-create",
                        component: "bannerCreate",
                    }, {
                        path: ":id/edit",
                        name: "orders-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "orders-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'pages',
                name: 'pages',
                children: [
                    {
                        path: "",
                        name: "pages-index",
                        component: index
                    }, {
                        path: "create",
                        name: "pages-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "pages-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "pages-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'rooms',
                name: 'rooms',
                children: [
                    {
                        path: "",
                        name: "rooms-index",
                        component: index
                    }, {
                        path: "create",
                        name: "rooms-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "rooms-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "rooms-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'templates',
                name: 'templates',
                children: [
                    {
                        path: "",
                        name: "templates-index",
                        component: index
                    }, {
                        path: "create",
                        name: "templates-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "templates-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "templates-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'trips',
                name: 'trips',
                children: [
                    {
                        path: "",
                        name: "trips-index",
                        component: index
                    }, {
                        path: "create",
                        name: "trips-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "trips-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "trips-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'users',
                name: 'users',
                children: [
                    {
                        path: "",
                        name: "users-index",
                        component: index
                    }, {
                        path: "create",
                        name: "users-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "users-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "users-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'vacationers',
                name: 'vacationers',
                children: [
                    {
                        path: "",
                        name: "vacationers-index",
                        component: index
                    }, {
                        path: "create",
                        name: "vacationers-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "vacationers-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "vacationers-show",
                        component: "bannerShow"
                    }
                ]
            }, {
                path: 'yachts',
                name: 'yachts',
                children: [
                    {
                        path: "",
                        name: "yachts-index",
                        component: index
                    }, {
                        path: "create",
                        name: "yachts-create",
                        component: "bannerCreate"
                    }, {
                        path: ":id/edit",
                        name: "yachts-edit",
                        component: "bannerEdit"
                    }, {
                        path: ":id",
                        name: "yachts-show",
                        component: "bannerShow"
                    }
                ]
            },
        ]
    }
];

export const adminRouter = createRouter({
    history: createWebHistory(),
    routes,
})
