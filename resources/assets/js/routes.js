import VueRouter from 'vue-router';

let routes = [
        { path: '/', component: require( './pages/Home' )      },
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});