<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="main-content">
    <?php include '../includes/navbar.php'; ?>
    
    <div class="page-content">
        <div class="section-header">
            <h2 class="section-title">Manage Students</h2>
            <a href="create.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Student</a>
        </div>

        <div class="table-container">
            <div class="table-controls">
                <div class="search-bar">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" id="tableSearch" placeholder="Search students...">
                </div>
                <div class="filter-group">
                    <select class="filter-select">
                        <option value="">All Batches</option>
                        <option value="2026">2026 A/L</option>
                        <option value="2027">2027 A/L</option>
                    </select>
                    <select class="filter-select">
                        <option value="">All Grades</option>
                        <option value="11">Grade 11</option>
                        <option value="10">Grade 10</option>
                    </select>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th class="hide-mobile">Student ID</th>
                        <th>Name</th>
                        <th class="hide-mobile">Email</th>
                        <th>Grade</th>
                        <th>Batch</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="hide-mobile">#STU-1001</td>
                        <td>Nuwan Pradeep</td>
                        <td class="hide-mobile">nuwan@gmail.com</td>
                        <td>-</td>
                        <td>2026 A/L</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <div class="action-btns">
                                <a href="edit.php?id=1" class="action-btn edit-btn"><i class="fa-solid fa-pen"></i></a>
                                <button class="action-btn delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="hide-mobile">#STU-1002</td>
                        <td>Amaya Perera</td>
                        <td class="hide-mobile">amaya@yahoo.com</td>
                        <td>Grade 11</td>
                        <td>-</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>
                            <div class="action-btns">
                                <a href="edit.php?id=2" class="action-btn edit-btn"><i class="fa-solid fa-pen"></i></a>
                                <button class="action-btn delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Delete Modal -->
<div class="modal" id="deleteModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Confirm Delete</h3>
            <button class="close-modal"><i class="fa-solid fa-times"></i></button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete this student? This action cannot be undone.
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary cancel-btn">Cancel</button>
            <button class="btn btn-danger">Delete Student</button>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
