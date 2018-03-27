

import './bootstrap';
import router from './routes';

import VueGoodTable from 'vue-good-table';

Vue.use(VueGoodTable);

Vue.component('navigation-bar',     require('./components/NavigationBar'));
Vue.component('profile-heading',    require('./components/ProfileHeading'));
Vue.component('profile-options',    require('./components/ProfileOptions'));
Vue.component('profile-urlbox',     require('./components/ProfileURLbox'));


new Vue({
    data() {
      return {
        page: [   { title: 'A Test Application' }
              ],
      }
    },
    el: '#app',

    router,

});
