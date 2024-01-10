const Home = () =>
    import ('./components/Home.vue');

const Mostrar = () =>
    import ('./components/user/Mostrar.vue');
const Crear = () =>
    import ('./components/user/Crear.vue');
const Editar = () =>
    import ('./components/user/Editar.vue');

export const routes = [{
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'mostrarUsers',
        path: '/mostrar',
        component: Mostrar
    },
    {
        name: 'crearUser',
        path: '/crear',
        component: Crear
    },
    {
        name: 'editarUser',
        path: '/editar/:id',
        component: Editar
    },
];