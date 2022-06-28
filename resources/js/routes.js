import Vue from 'vue'
import VueRouter from 'vue-router'
import home from './routes/home';

Vue.use(VueRouter);

const routes = [
    {
        name: 'app',
        path: '/',
        component: require('./components/app.vue').default
    },
    
    {
      name: 'about',
      path: '/about',
      component: require('./components/about.vue').default
    },
  
    {
      name: 'blog',
      path: '/blog',
      component: require('./components/blog.vue').default
    },
  
    {
      name: 'privacy',
      path: '/privacy',
      component: require('./components/privacy.vue').default
    }
    ,
  
    {
      name: 'aboutus',
      path: '/aboutus',
      component: require('./components/aboutus.vue').default
    }
  ];


export default new VueRouter({
    // base: '/blogportal/',
    mode: 'history',
    scrollBehavior: (to, from, savedPosition) => ({ y: 0 }), 
    routes: routes
});