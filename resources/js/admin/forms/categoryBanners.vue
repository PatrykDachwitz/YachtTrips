<script setup>

import {inject} from "vue";

const lang = inject('lang')
</script>

<template>
    <form class="row g-3 p-3 d-none" data-show-form>
        <div class="col-md-10">
            <label for="inputEmail4" class="form-label">{{ lang['name'] }}</label>
            <input type="email" class="form-control" id="inputEmail4" name="name" data-form-main>
        </div>

        <div class="col-md-2">
            <label for="inputPassword4" class="form-label">{{ lang['active'] }}</label>
            <select class="form-select" name="active" aria-label="Default select example" data-form-main>
                <option value="1">{{ lang['yes'] }}</option>
                <option value="0">{{ lang['no'] }}</option>
            </select>
        </div>

        @csrf

        <div class="col-md-4">
            <label for="template_id" class="form-label">{{ lang['template'] }}</label>
            <select class="form-select" name="template_id" data-form-main><!--

                @foreach($templates as $template)
                <option value="{{ $template->id }}">{{ $template->name }}</option>
                @endforeach
            --></select>
        </div>


    </form>

</template>

<style scoped>

</style>
