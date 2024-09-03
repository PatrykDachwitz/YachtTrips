import {updateFiltersCheckedInputs} from "@/utils/updateFiltersCheckedInputs.js";

window.addEventListener('load', () => {
   const container = document.querySelector('div[data-filters-checked]').innerHTML.trim();

   updateFiltersCheckedInputs(JSON.parse(container))
});
