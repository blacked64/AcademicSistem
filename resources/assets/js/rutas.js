//Importar Rutas
import Indexed from './components/Index.vue';
import Contact from './components/Contact.vue';
import About from './components/About.vue';
import Login from './components/Autentificacion/Login.vue';
import Home from './components/Autentificacion/Home.vue';
import Register from './components/Autentificacion/Register.vue';

// CRUD routes profesor alumn
import Alumno from './components/Alumno/Alumno.vue';
import Profesor from './components/Profesor/Profesor.vue';

export const rutas = [
    { path: '/', component: Indexed, name: 'index' },
    { path: '/about', component: About, name: 'about' },
    { path: '/contact', component: Contact, name: 'contact' },
    { path: '/login', component: Login, name: 'Login' },
    { path: '/register', component: Register, name: 'register' },
    { path: '/alumno', component: Alumno, name: 'alumno' },
    { path: '/profesor', component: Profesor, name: 'profesor' },
    { path: '/home', component: Home, name: 'home' },
    { path: '*', component: Indexed }
];
