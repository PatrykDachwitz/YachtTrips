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
                path: 'banners',
                name: 'banners',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'bookings',
                name: 'bookings',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'payments',
                name: 'payments',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'oceans',
                name: 'oceans',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'orders',
                name: 'orders',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'pages',
                name: 'pages',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'rooms',
                name: 'rooms',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'templates',
                name: 'templates',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'trips',
                name: 'trips',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'users',
                name: 'users',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'vacationers',
                name: 'vacationers',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            }, {
                path: 'yachts',
                name: 'yachts',
                children: [
                    {
                        path: "",
                        name: "index",
                        component: bannerIndex
                    }, {
                        path: "create",
                        name: "create",
                        component: bannerCreate
                    }, {
                        path: ":id/edit",
                        name: "edit",
                        component: bannerEdit
                    }, {
                        path: ":id",
                        name: "show",
                        component: bannerShow
                    }
                ]
            },
        ]
    }
];

export const router = createRouter({
    history: createWebHistory(),
    routes,
})
