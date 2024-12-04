<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Alerts</title>
    <style>
        :root {
            --background: #0f172a;
            --primary-dark: #4f46e5;
            --text-color: #ffffff;
            --secondary-text: #8b8ca7;
            --toast-bg: rgba(30, 41, 59, 0.95);
            --success-color: #22c55e;
            --error-color: #ef4444;
            --border-radius: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            background-color: var(--background);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: var(--text-color);
        }

        .toast-container {
            position: fixed;
            right: 24px;
            top: 24px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 92%;
            max-width: 400px;
            z-index: 1000;
        }

        .toast {
            background: var(--toast-bg);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            padding: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: flex-start;
            transform: translateX(120%);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            margin-left: auto;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .toast.show {
            transform: translateX(0);
            opacity: 1;
        }

        .toast-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-right: 12px;
            font-size: 16px;
            font-weight: bold;
        }

        .toast-content {
            flex-grow: 1;
            padding-right: 8px;
        }

        .toast-title {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
            letter-spacing: -0.2px;
            color: var(--text-color);
        }

        .toast-message {
            font-size: 14px;
            color: var(--secondary-text);
            line-height: 1.4;
        }

        .close-btn {
            background: none;
            border: none;
            padding: 4px;
            cursor: pointer;
            opacity: 0.5;
            transition: opacity 0.2s;
            font-size: 18px;
            color: var(--text-color);
            margin: -4px;
        }

        .close-btn:hover {
            opacity: 1;
        }

        /* Success Toast Styles */
        .toast.success {
            border-right: 4px solid var(--success-color);
        }

        .toast.success .toast-icon {
            background: rgba(34, 197, 94, 0.2);
            color: var(--success-color);
        }

        /* Error Toast Styles */
        .toast.error {
            border-right: 4px solid var(--error-color);
        }

        .toast.error .toast-icon {
            background: rgba(239, 68, 68, 0.2);
            color: var(--error-color);
        }

        /* Demo Buttons */
        .button-container {
            position: fixed;
            bottom: 140px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            width: 92%;
            max-width: 400px;
        }

        .btn {
            flex: 1;
            padding: 16px;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.2s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            background: var(--primary-dark);
            color: var(--text-color);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn:active {
            transform: scale(0.96);
        }

        .btn-success {
            background: var(--success-color);
        }

        .btn-error {
            background: var(--error-color);
        }

        @media (hover: hover) {
            .btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
                filter: brightness(1.1);
            }
        }

        /* Add subtle animation for mobile devices */
        @media (max-width: 768px) {
            .btn:active {
                transform: scale(0.95);
            }

            .toast-container {
                width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button class="btn btn-success" onclick="showToast('success')">Success Alert</button>
        <button class="btn btn-error" onclick="showToast('error')">Error Alert</button>
    </div>

    <div class="toast-container" id="toastContainer"></div>

    <script>
        function showToast(type) {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            
            const icons = {
                success: '✓',
                error: '✕'
            };
            
            const titles = {
                success: 'Success',
                error: 'Error'
            };
            
            const messages = {
                success: 'Your action was completed successfully',
                error: 'Something went wrong. Please try again'
            };
            
            toast.innerHTML = `
                <div class="toast-icon">${icons[type]}</div>
                <div class="toast-content">
                    <div class="toast-title">${titles[type]}</div>
                    <div class="toast-message">${messages[type]}</div>
                </div>
                <button class="close-btn" onclick="closeToast(this)">×</button>
            `;
            
            const maxToasts = 3;
            while (container.children.length >= maxToasts) {
                container.removeChild(container.lastChild);
            }
            
            container.insertBefore(toast, container.firstChild);
            
            toast.offsetHeight;
            
            requestAnimationFrame(() => {
                toast.classList.add('show');
            });
            
            if (window.navigator && window.navigator.vibrate) {
                window.navigator.vibrate(50);
            }
            
            const timeout = setTimeout(() => {
                if (toast.parentElement) {
                    closeToast(toast.querySelector('.close-btn'));
                }
            }, 4000);
            
            toast.dataset.timeoutId = timeout;
        }

        function closeToast(closeButton) {
            const toast = closeButton.parentElement;
            
            if (toast.dataset.timeoutId) {
                clearTimeout(parseInt(toast.dataset.timeoutId));
            }
            
            toast.classList.remove('show');
            
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.parentElement.removeChild(toast);
                }
            }, 400);
        }
    </script>
</body>
</html>