import banners from "@/admin/forms/banners.vue";
import {ref} from "vue";
import bookings from "@/admin/forms/bookings.vue";
import methodPayments from "@/admin/forms/methodPayments.vue";
import oceans from "@/admin/forms/oceans.vue";
import orders from "@/admin/forms/orders.vue";
import pages from "@/admin/forms/pages.vue";
import rooms from "@/admin/forms/rooms.vue";
import trips from "@/admin/forms/trips.vue";
import users from "@/admin/forms/users.vue";
import vacationers from "@/admin/forms/vacationers.vue";
import yachts from "@/admin/forms/yachts.vue";
import categoryBanners from "@/admin/forms/categoryBanners.vue";
import templates from "@/admin/forms/templates.vue";
import Pages404 from "@/views/pages_error/Pages404.vue";

export function getCorrectFormPage(name) {
    //Default is page 404
    let responseForm = Pages404;

    const availableForm = [
        banners,
        bookings,
        categoryBanners,
        methodPayments,
        oceans,
        orders,
        pages,
        rooms,
        templates,
        trips,
        users,
        vacationers,
        yachts,
    ];

    availableForm.forEach(form => {
        if (form.__name === name) {
            responseForm = form;
        }
    });

    return responseForm;
}

