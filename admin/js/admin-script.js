document.addEventListener('DOMContentLoaded', () => {
    
    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.main-content');
    const toggleBtn = document.getElementById('toggleSidebar');
    const closeSidebarBtn = document.getElementById('closeSidebar');

    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', () => {
            if (window.innerWidth <= 1024) {
                sidebar.classList.add('active');
            } else {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
            }
        });
    }

    if (closeSidebarBtn && sidebar) {
        closeSidebarBtn.addEventListener('click', () => {
            sidebar.classList.remove('active');
        });
    }

    // Profile Dropdown
    const profileDropdown = document.querySelector('.profile-dropdown');
    if (profileDropdown) {
        profileDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdown.classList.toggle('active');
        });

        document.addEventListener('click', () => {
            profileDropdown.classList.remove('active');
        });
    }

    // Table Search Filter
    const searchInput = document.getElementById('tableSearch');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                let text = row.innerText.toLowerCase();
                if(text.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }

    // File Upload Preview Text
    const fileInputs = document.querySelectorAll('.file-upload-input');
    fileInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            if(this.files && this.files.length > 0) {
                const wrapper = this.closest('.file-upload-wrapper');
                const text = wrapper.querySelector('p');
                if(this.files.length === 1) {
                    text.innerText = this.files[0].name;
                } else {
                    text.innerText = this.files.length + " files selected";
                }
                wrapper.style.borderColor = 'var(--primary-color)';
                wrapper.style.background = 'rgba(255,255,255,0.9)';
            }
        });
    });

    // Modal Handling (Example for Delete)
    const deleteBtns = document.querySelectorAll('.delete-btn');
    const modal = document.getElementById('deleteModal');
    if (deleteBtns.length > 0 && modal) {
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.add('active');
            });
        });

        const closeBtns = modal.querySelectorAll('.close-modal, .cancel-btn');
        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                modal.classList.remove('active');
            });
        });
    }
});
