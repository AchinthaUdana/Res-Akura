document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const closeSidebar = document.getElementById('closeSidebar');

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(0)';
        });
    }

    if (closeSidebar) {
        closeSidebar.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(-100%)';
        });
    }

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 1024) {
            if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                sidebar.style.transform = 'translateX(-100%)';
            }
        }
    });

    // Handle Profile Dropdown
    const profileDropdown = document.querySelector('.profile-dropdown');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    
    if (profileDropdown && dropdownMenu) {
        profileDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', () => {
            dropdownMenu.classList.remove('show');
        });
    }
});
