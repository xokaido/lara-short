import VueRouter from 'vue-router';

let routes = [
        { path: '/',          component: require( './pages/Home' )      },
        { path: '/home',      component: require( './pages/Home' )      },
        { path: '/url',       component: require( './pages/URL' )    },
        { path: '/published', component: require( './pages/Published' )    },
        { path: '/drafts',    component: require( './pages/Drafts' )    },
        { path: '/deleted',   component: require( './pages/Deleted' )    },
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});