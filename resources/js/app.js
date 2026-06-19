const sidebar = document.querySelector('[data-sidebar]');
const sidebarOverlay = document.querySelector('[data-sidebar-overlay]');
const sidebarOpenButtons = document.querySelectorAll('[data-sidebar-open]');
const sidebarCloseButtons = document.querySelectorAll('[data-sidebar-close]');

const openSidebar = () => {
    sidebar?.classList.remove('-translate-x-full');
    sidebarOverlay?.classList.remove('hidden');
};

const closeSidebar = () => {
    sidebar?.classList.add('-translate-x-full');
    sidebarOverlay?.classList.add('hidden');
};

sidebarOpenButtons.forEach((button) => button.addEventListener('click', openSidebar));
sidebarCloseButtons.forEach((button) => button.addEventListener('click', closeSidebar));
sidebarOverlay?.addEventListener('click', closeSidebar);

const searchInput = document.querySelector('[data-property-search]');
const statusFilter = document.querySelector('[data-property-filter]');
const propertyCards = document.querySelectorAll('[data-property-card]');

const filterProperties = () => {
    const searchTerm = searchInput?.value.toLowerCase().trim() ?? '';
    const selectedStatus = statusFilter?.value ?? 'All';

    propertyCards.forEach((card) => {
        const nameMatches = card.dataset.name.includes(searchTerm);
        const statusMatches = selectedStatus === 'All' || card.dataset.status === selectedStatus;

        card.classList.toggle('hidden', !(nameMatches && statusMatches));
    });
};

searchInput?.addEventListener('input', filterProperties);
statusFilter?.addEventListener('change', filterProperties);
