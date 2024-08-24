import banners from "@/components/admin/forms/banners.vue";
import {ref} from "vue";
import bookings from "@/components/admin/forms/bookings.vue";
import methodPayments from "@/components/admin/forms/methodPayments.vue";
import oceans from "@/components/admin/forms/oceans.vue";
import orders from "@/components/admin/forms/orders.vue";
import pages from "@/components/admin/forms/pages.vue";
import rooms from "@/components/admin/forms/rooms.vue";
import trips from "@/components/admin/forms/trips.vue";
import users from "@/components/admin/forms/users.vue";
import vacationers from "@/components/admin/forms/vacationers.vue";
import yachts from "@/components/admin/forms/yachts.vue";
import categoryBanners from "@/components/admin/forms/categoryBanners.vue";
import templates from "@/components/admin/forms/templates.vue";
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

