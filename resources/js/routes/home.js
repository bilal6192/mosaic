const home = () =>import ( '../components/app.vue')
const about = () =>import ( '../components/about.vue')

export default [
    {
        path: '/home',
        component: home,
        name: 'home',
    },
    {
        path: '/about',
        component: about,
        name: 'about',
    },
]
