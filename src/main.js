import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap.js";
import 'sweetalert2/dist/sweetalert2.min.css';

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import VueSweetalert2 from 'vue-sweetalert2';


import { faRightFromBracket } from "@fortawesome/free-solid-svg-icons";
import { faPerson } from "@fortawesome/free-solid-svg-icons";
import { faPaw } from "@fortawesome/free-solid-svg-icons";
import { faHand } from "@fortawesome/free-solid-svg-icons";
import { faHouse } from "@fortawesome/free-solid-svg-icons";

library.add(faRightFromBracket)
library.add(faPerson)
library.add(faPaw)
library.add(faHand)
library.add(faHouse)

const app = createApp(App)

app.use(VueSweetalert2);

createApp(App).component('font-awesome-icon', FontAwesomeIcon).use(router).use(store).use(VueSweetalert2).mount('#app');
