<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <?php include 'includes/navbar.php'; ?>
    
    <div class="page-content">
        <div class="section-header">
            <h2 class="section-title">Dashboard Overview</h2>
            <button class="btn btn-primary"><i class="fa-solid fa-download"></i> Generate Report</button>
        </div>

        <!-- STATS GRID -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon primary"><i class="fa-solid fa-users"></i></div>
                <div class="stat-details">
                    <h3>1,248</h3>
                    <p>Total Students</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon success"><i class="fa-solid fa-layer-group"></i></div>
                <div class="stat-details">
                    <h3>12</h3>
                    <p>Active Batches</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon warning"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                <div class="stat-details">
                    <h3>45</h3>
                    <p>Pending Payments</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon info"><i class="fa-solid fa-file-alt"></i></div>
                <div class="stat-details">
                    <h3>8</h3>
                    <p>Active Papers</p>
                </div>
            </div>
        </div>

        <div class="dashboard-grid">
            <!-- RECENT PAYMENTS -->
            <div class="table-container">
                <div class="section-header">
                    <h3 class="section-title">Recent Payments</h3>
                    <a href="/admin/payments/list.php" class="btn btn-secondary btn-sm">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kamal Perera</td>
                            <td>Rs. 2500</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Nimali Silva</td>
                            <td>Rs. 2500</td>
                            <td><span class="status-badge status-active">Verified</span></td>
                        </tr>
                        <tr>
                            <td>Kasun Kalhara</td>
                            <td>Rs. 2000</td>
                            <td><span class="status-badge status-closed">Rejected</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- UPCOMING PAPERS -->
            <div class="table-container">
                <div class="section-header">
                    <h3 class="section-title">Upcoming Papers</h3>
                    <a href="/admin/online-papers/list.php" class="btn btn-secondary btn-sm">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Batch</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Physics Unit 4 MCQ</td>
                            <td>May 10, 2026</td>
                            <td>2026 A/L</td>
                        </tr>
                        <tr>
                            <td>Chemistry Essay 2</td>
                            <td>May 12, 2026</td>
                            <td>2026 A/L</td>
                        </tr>
                        <tr>
                            <td>Maths Term Test</td>
                            <td>May 15, 2026</td>
                            <td>Grade 11</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- RECENT REGISTRATIONS -->
        <div class="table-container" style="margin-top: 24px;">
            <div class="section-header">
                <h3 class="section-title">Recent Registrations</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Batch / Grade</th>
                        <th>Registered Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#STU-1024</td>
                        <td>Saman Kumara</td>
                        <td>saman@gmail.com</td>
                        <td>2027 A/L</td>
                        <td>Today, 10:30 AM</td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view-btn"><i class="fa-solid fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#STU-1023</td>
                        <td>Ruwanthi Peiris</td>
                        <td>ruwanthi@yahoo.com</td>
                        <td>Grade 10</td>
                        <td>Yesterday</td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view-btn"><i class="fa-solid fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</main>

<?php include 'includes/footer.php'; ?>
