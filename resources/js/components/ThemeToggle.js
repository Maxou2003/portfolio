export default class ThemeToggle extends HTMLAnchorElement {

    constructor() {
        super();
        this.root = document.documentElement;
        this.icon = this.querySelector('ion-icon');
    }

    connectedCallback() {

        this.initRoot();

        this.addEventListener('click', () => {
            const current = this.root.getAttribute('data-theme');
            const next = current === 'dark' ? 'light' : 'dark';
            this.root.setAttribute('data-theme', next);
            next === 'dark' ? this.icon.setAttribute('name', 'sunny-outline') : this.icon.setAttribute('name', 'moon-outline')
        });
    }

    initRoot() {
        let theme = this.root.getAttribute('data-theme');
        this.root.setAttribute('data-theme', theme);
    }
}

