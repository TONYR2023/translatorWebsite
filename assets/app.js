import './bootstrap.js';
import './scripts/burger-menu';

import './styles/app.scss';
import './styles/navbar.scss'
import './styles/index.scss'                   

import { setLocale, getLocale, trans } from '@symfony/ux-translator';
// Récupérer la locale actuelle
console.log('Current locale:', getLocale());
// Définir une nouvelle locale
setLocale('fr');


