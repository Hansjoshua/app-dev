<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mobile Responsive</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        /* Header/Logo Row */
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        .header-icons {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .icon {
            width: 24px;
            height: 24px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .icon:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Main Container */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        /* Tabs Navigation */
        .tabs-container {
            margin-bottom: 2rem;
        }

        .tabs {
            display: flex;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 4px;
            margin-bottom: 1rem;
            backdrop-filter: blur(10px);
        }

        .tab {
            flex: 1;
            padding: 12px 16px;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
        }

        .tab.active {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .tab:hover:not(.active) {
            background: rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.9);
        }

        /* Content Box */
        .content-box {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Service Cards */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .service-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .service-card h3 {
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .service-card p {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .service-card .stats {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #888;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 700px) {
            .header-row {
                padding: 0.75rem;
            }

            .logo {
                font-size: 1.2rem;
            }

            .icon {
                width: 20px;
                height: 20px;
            }

            .main-container {
                padding: 1rem 0.75rem;
            }

            .content-box {
                padding: 1.5rem;
                border-radius: 12px;
                margin: 0 0.5rem;
            }

            .tabs {
                margin: 0 0.5rem 1rem 0.5rem;
                padding: 3px;
            }

            .tab {
                padding: 10px 12px;
                font-size: 0.9rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .service-card {
                padding: 1.25rem;
                border-radius: 10px;
            }

            .service-card h3 {
                font-size: 1rem;
            }

            .service-card p {
                font-size: 0.85rem;
            }
        }

        /* Very Small Phone Styles */
        @media (max-width: 360px) {
            .header-row {
                padding: 0.5rem;
            }

            .logo {
                font-size: 1.1rem;
            }

            .header-icons {
                gap: 0.75rem;
            }

            .icon {
                width: 18px;
                height: 18px;
            }

            .main-container {
                padding: 0.75rem 0.5rem;
            }

            .content-box {
                padding: 1rem;
                border-radius: 10px;
                margin: 0 0.25rem;
            }

            .tabs {
                margin: 0 0.25rem 0.75rem 0.25rem;
                padding: 2px;
            }

            .tab {
                padding: 8px 10px;
                font-size: 0.8rem;
            }

            .service-card {
                padding: 1rem;
                border-radius: 8px;
            }

            .service-card h3 {
                font-size: 0.95rem;
            }

            .service-card p {
                font-size: 0.8rem;
            }

            .service-card .stats {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header/Logo Row -->
    <div class="header-row">
        <div class="logo">Dashboard</div>
        <div class="header-icons">
            <div class="icon" title="Notifications">🔔</div>
            <div class="icon" title="Profile">👤</div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Tabs Navigation -->
        <div class="tabs-container">
            <div class="tabs">
                <div class="tab active">Overview</div>
                <div class="tab">Services</div>
                <div class="tab">Analytics</div>
                <div class="tab">Settings</div>
            </div>
        </div>

        <!-- Content Box -->
        <div class="content-box">
            <h2 style="margin-bottom: 1.5rem; color: #333;">Service Overview</h2>
            
            <!-- Service Cards -->
            <div class="services-grid">
                <div class="service-card">
                    <h3>User Management</h3>
                    <p>Manage user accounts, permissions, and profiles with advanced security features.</p>
                    <div class="stats">
                        <span>Active Users: 1,247</span>
                        <span>Last Updated: 2 hours ago</span>
                    </div>
                </div>
                
                <div class="service-card">
                    <h3>Data Analytics</h3>
                    <p>Comprehensive analytics dashboard with real-time insights and reporting tools.</p>
                    <div class="stats">
                        <span>Reports: 34</span>
                        <span>Last Updated: 15 mins ago</span>
                    </div>
                </div>
                
                <div class="service-card">
                    <h3>API Integration</h3>
                    <p>Seamless API integration with third-party services and custom endpoints.</p>
                    <div class="stats">
                        <span>Active APIs: 12</span>
                        <span>Last Updated: 1 hour ago</span>
                    </div>
                </div>
                
                <div class="service-card">
                    <h3>Security Monitor</h3>
                    <p>Advanced security monitoring with threat detection and prevention systems.</p>
                    <div class="stats">
                        <span>Threats Blocked: 157</span>
                        <span>Last Updated: 5 mins ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>