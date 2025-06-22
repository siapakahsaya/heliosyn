import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

console.log('Alpine.js version:', Alpine.version);
Alpine.plugin(intersect);
Alpine.start();
