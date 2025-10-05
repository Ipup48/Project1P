/**
 * Real-time editing functionality for admin panel
 */
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners for real-time editing
    initializeRealtimeEditing();
});

function initializeRealtimeEditing() {
    // Add event listeners to editable fields
    const editableFields = document.querySelectorAll('[data-realtime-editable]');
    
    editableFields.forEach(field => {
        // For input and textarea elements
        if (field.tagName === 'INPUT' || field.tagName === 'TEXTAREA') {
            field.addEventListener('blur', function() {
                updateContentRealtime(this);
            });
            
            // Also update on Enter key for input fields
            if (field.tagName === 'INPUT') {
                field.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        updateContentRealtime(this);
                    }
                });
            }
        }
        // For contenteditable elements
        else if (field.hasAttribute('contenteditable')) {
            field.addEventListener('blur', function() {
                updateContentRealtime(this);
            });
        }
    });
}

function updateContentRealtime(element) {
    const contentId = element.getAttribute('data-content-id');
    const contentType = element.getAttribute('data-content-type');
    const field = element.getAttribute('data-field');
    const oldValue = element.getAttribute('data-original-value');
    const newValue = element.value !== undefined ? element.value : element.innerHTML;
    
    // If value hasn't changed, don't make request
    if (oldValue === newValue) {
        return;
    }
    
    // Show loading indicator
    const originalBg = element.style.backgroundColor;
    element.style.backgroundColor = '#e6f7ff';
    
    // Prepare data for the request
    const data = {
        field: field,
        value: newValue,
        _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };
    
    // Determine the correct route based on content type
    let route;
    switch(contentType) {
        case 'about':
            route = `/admin/new/about/${contentId}/realtime`;
            break;
        case 'home':
            route = `/admin/new/home/${contentId}/realtime`;
            break;
        case 'courses':
            route = `/admin/new/courses/${contentId}/realtime`;
            break;
        case 'contact':
            route = `/admin/new/contact/${contentId}/realtime`;
            break;
        case 'faculty':
            route = `/admin/new/faculty/${contentId}/realtime`;
            break;
        case 'news':
            route = `/admin/new/news/${contentId}/realtime`;
            break;
        default:
            console.error('Unknown content type:', contentType);
            element.style.backgroundColor = originalBg;
            return;
    }
    
    // Make the AJAX request
    fetch(route, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': data._token
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update successful
            element.setAttribute('data-original-value', newValue);
            element.style.backgroundColor = '#f6ffed'; // Green background for success
            setTimeout(() => {
                element.style.backgroundColor = originalBg;
            }, 1000);
            
            // Show success message
            showNotification('Content updated successfully', 'success');
        } else {
            // Update failed
            element.style.backgroundColor = '#fff2f0'; // Red background for error
            setTimeout(() => {
                element.style.backgroundColor = originalBg;
            }, 1000);
            
            // Show error message
            showNotification('Failed to update content: ' + (data.error || 'Unknown error'), 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        element.style.backgroundColor = '#fff2f0'; // Red background for error
        setTimeout(() => {
            element.style.backgroundColor = originalBg;
        }, 1000);
        
        // Show error message
        showNotification('Network error occurred', 'error');
    });
}

function showNotification(message, type) {
    // Create notification element if it doesn't exist
    let notification = document.getElementById('realtime-notification');
    if (!notification) {
        notification = document.createElement('div');
        notification.id = 'realtime-notification';
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            z-index: 10000;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            transition: opacity 0.3s;
        `;
        document.body.appendChild(notification);
    }
    
    // Set styles based on type
    if (type === 'success') {
        notification.style.backgroundColor = '#52c41a';
    } else {
        notification.style.backgroundColor = '#ff4d4f';
    }
    
    // Set message
    notification.textContent = message;
    
    // Show notification
    notification.style.opacity = '1';
    
    // Hide after 3 seconds
    setTimeout(() => {
        notification.style.opacity = '0';
    }, 3000);
}

// Initialize real-time editing when new content is loaded
window.initializeRealtimeEditing = initializeRealtimeEditing;