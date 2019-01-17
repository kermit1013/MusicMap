export default[
    { path: '', redirect: '/index' },
    { path: '/index', component: require('./page/App.vue').default },
    { path: '/list', component: require('./page/List.vue').default },
    { path: '/detail/:id', component: require('./page/Detail.vue').default }
];
