<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="main-content">
    <?php include '../includes/navbar.php'; ?>
    
    <div class="page-content">
        <div class="section-header">
            <h2 class="section-title">Payment Slips</h2>
        </div>

        <div class="table-container">
            <div class="table-controls">
                <div class="search-bar">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" id="tableSearch" placeholder="Search student or month...">
                </div>
                <div class="filter-group">
                    <select class="filter-select">
                        <option value="">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="verified">Verified</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Month</th>
                        <th>Slip Preview</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#STU-1001 (Nuwan)</td>
                        <td>May 2026</td>
                        <td><a href="#" style="color:var(--primary-color);"><i class="fa-solid fa-image"></i> View Slip</a></td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>
                            <div class="action-btns">
                                <a href="verify.php?id=1" class="btn btn-primary btn-sm">Verify</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#STU-1005 (Amaya)</td>
                        <td>April 2026</td>
                        <td><a href="#" style="color:var(--primary-color);"><i class="fa-solid fa-image"></i> View Slip</a></td>
                        <td><span class="status-badge status-active">Verified</span></td>
                        <td>
                            <div class="action-btns">
                                <a href="verify.php?id=2" class="btn btn-secondary btn-sm">View</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
