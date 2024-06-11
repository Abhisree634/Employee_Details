const apiUrl = 'delete-user/';

let currentPage = 1;
const rowsPerPage = 5;

$(document).ready(function() {
    fetchUsers(currentPage);

    function fetchUsers(page) {
        $.get(apiUrl, { page: page }, function(response) {
            const users = response.data;
            const total = response.total;
            const lastPage = response.last_page;

            $('#user-table-body').empty();
            users.forEach(user => {
                $('#user-table-body').append(`
                    <tr>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.mobile}</td>
                        <td>${user.city}</td>
                        <td>
                            <button class="btn btn-sm btn-primary update-btn" data-id="${user.id}">Update</button>
                            <button class="btn btn-sm btn-danger delete-btn" data-id="${user.id}">Delete</button>
                        </td>
                    </tr>
                `);
            });

            updatePagination(page, lastPage);
        });
    }

    function updatePagination(page, lastPage) {
        $('#pagination').empty();
        for (let i = 1; i <= lastPage; i++) {
            const activeClass = page === i ? 'active' : '';
            $('#pagination').append(`
                <li class="page-item ${activeClass}">
                    <a class="page-link" href="#" data-page="${i}">${i}</a>
                </li>
            `);
        }
    }

    $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        currentPage = page;
        fetchUsers(page);
    });

    $(document).on('click', '.update-btn', function() {
        const userId = $(this).data('id');
        // Handle update logic here
        alert('Update user with ID: ' + userId);
    });

    $(document).on('click', '.delete-btn', function() {
        const userId = $(this).data('id');
    const apiUrl = '/api/users';

let currentPage = 1;
const rowsPerPage = 5;

$(document).ready(function() {
    fetchUsers(currentPage);

    function fetchUsers(page) {
        $.get(apiUrl, { page: page }, function(response) {
            const users = response.data;
            const total = response.total;
            const lastPage = response.last_page;

            $('#user-table-body').empty();
            users.forEach(user => {
                $('#user-table-body').append(`
                    <tr>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.mobile}</td>
                        <td>${user.city}</td>
                        <td>
                            <button class="btn btn-sm btn-primary update-btn" data-id="${user.id}">Update</button>
                            <button class="btn btn-sm btn-danger delete-btn" data-id="${user.id}">Delete</button>
                        </td>
                    </tr>
                `);
            });

            updatePagination(page, lastPage);
        });
    }

    function updatePagination(page, lastPage) {
        $('#pagination').empty();
        for (let i = 1; i <= lastPage; i++) {
            const activeClass = page === i ? 'active' : '';
            $('#pagination').append(`
                <li class="page-item ${activeClass}">
                    <a class="page-link" href="#" data-page="${i}">${i}</a>
                </li>
            `);
        }
    }

    $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        currentPage = page;
        fetchUsers(page);
    });

    $(document).on('click', '.update-btn', function() {
        const userId = $(this).data('id');
        // Handle update logic here
        alert('Update user with ID: ' + userId);
    });

    $(document).on('click', '.delete-btn', function() {
        const userId = $(this).data('id');
        if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                url: `${apiUrl}/${userId}`,
                type: 'DELETE',
                success: function(result) {
                    alert('User deleted successfully');
                    fetchUsers(currentPage);
                },
                error: function(xhr) {
                    alert('Error deleting user: ' + xhr.responseJSON.message);
                }
            });
        }
    });
});
    if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                url: `${apiUrl}/${userId}`,
                type: 'DELETE',
                success: function(result) {
                    alert('User deleted successfully');
                    fetchUsers(currentPage);
                },
                error: function(xhr) {
                    alert('Error deleting user: ' + xhr.responseJSON.message);
                }
            });
        }
    });
});
