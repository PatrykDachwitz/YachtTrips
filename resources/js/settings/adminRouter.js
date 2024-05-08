import {createRouter, createWebHistory} from "vue-router";
import bannerCreate from "@/views/banners/bannerCreate.vue";
import bannerIndex from "@/views/banners/bannerIndex.vue";
import bannerEdit from "@/views/banners/bannerEdit.vue";
import bannerShow from "@/views/banners/bannerShow.vue";


const routes = [
    {
        path: '/admin',
        name: 'admin',
        children: [
            {
                path: "",
                name: "home",
                alias: "/dashboard"
            },
            {
                path: 'banners',
                name: 'banners',
                children: [
                    {
                        path: "",
                        name: "banners-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "banners-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "banners-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "banners-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'bookings',
                name: 'bookings',
                children: [
                    {
                        path: "",
                        name: "bookings-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "bookings-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "bookings-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "bookings-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'payments',
                name: 'payments',
                children: [
                    {
                        path: "",
                        name: "payments-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "payments-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "payments-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "payments-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'oceans',
                name: 'oceans',
                children: [
                    {
                        path: "",
                        name: "oceans-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "oceans-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "oceans-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "oceans-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'orders',
                name: 'orders',
                children: [
                    {
                        path: "",
                        name: "orders-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "orders-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "orders-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "orders-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'pages',
                name: 'pages',
                children: [
                    {
                        path: "",
                        name: "pages-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "pages-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "pages-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "pages-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'rooms',
                name: 'rooms',
                children: [
                    {
                        path: "",
                        name: "rooms-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "rooms-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "rooms-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "rooms-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'templates',
                name: 'templates',
                children: [
                    {
                        path: "",
                        name: "templates-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "templates-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "templates-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "templates-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'trips',
                name: 'trips',
                children: [
                    {
                        path: "",
                        name: "trips-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "trips-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "trips-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "trips-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'users',
                name: 'users',
                children: [
                    {
                        path: "",
                        name: "users-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "users-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "users-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "users-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'vacationers',
                name: 'vacationers',
                children: [
                    {
                        path: "",
                        name: "vacationers-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "vacationers-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "vacationers-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "vacationers-show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'yachts',
                name: 'yachts',
                children: [
                    {
                        path: "",
                        name: "yachts-index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "yachts-create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "yachts-edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "yachts-show",
                        component: bannerShow
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
