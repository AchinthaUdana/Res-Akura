<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="main-content">
    <?php include '../includes/navbar.php'; ?>
    
    <div class="page-content">
        <div class="section-header">
            <h2 class="section-title">Verify Payment</h2>
            <a href="list.php" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
        </div>

        <div class="form-container" style="max-width: 900px;">
            <div class="dashboard-grid" style="gap: 32px;">
                
                <!-- Slip Preview -->
                <div>
                    <h3 style="margin-bottom: 16px; font-size: 16px;">Payment Slip</h3>
                    <div style="width: 100%; height: 400px; background: #e2e8f0; border-radius: 16px; display: flex; align-items: center; justify-content: center; overflow: hidden; border: 1px solid var(--border-color);">
                        <!-- Placeholder for slip -->
                        <img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?auto=format&fit=crop&w=800&q=80" alt="Slip" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>

                <!-- Verification Details -->
                <div>
                    <h3 style="margin-bottom: 16px; font-size: 16px;">Payment Details</h3>
                    <div style="background: rgba(255,255,255,0.5); padding: 20px; border-radius: 16px; margin-bottom: 24px;">
                        <p style="margin-bottom: 8px;"><strong>Student:</strong> Nuwan Pradeep (#STU-1001)</p>
                        <p style="margin-bottom: 8px;"><strong>Batch:</strong> 2026 A/L</p>
                        <p style="margin-bottom: 8px;"><strong>Month:</strong> May 2026</p>
                        <p style="margin-bottom: 8px;"><strong>Uploaded On:</strong> May 5, 2026 - 10:30 AM</p>
                    </div>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <label class="form-label">Admin Remarks (Optional)</label>
                            <textarea class="form-control" rows="3" placeholder="Enter any notes about this payment..."></textarea>
                        </div>
                        
                        <div style="display: flex; gap: 16px; margin-top: 24px;">
                            <button type="submit" class="btn btn-success" style="flex: 1; justify-content: center;"><i class="fa-solid fa-check"></i> Approve</button>
                            <button type="button" class="btn btn-danger" style="flex: 1; justify-content: center;"><i class="fa-solid fa-times"></i> Reject</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
